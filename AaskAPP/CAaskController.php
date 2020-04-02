<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CAaskController
 *
 * @author asksoft
 */
require_once getcwd() . "/AaskAPP/CStringEncDec.php";
require('phpmailer/class.phpmailer.php');
require('textlocal.class.php');
//require_once getcwd() . "/AaskAPP/CFilseArray.php";
define("MSG_Error", "error");

class CAaskController extends CI_Controller {

    public $controllerConfig;
    public $controllerConfig2 = array();
    public $fileStack;
    public $viewConfig;
    public $controllerAppConfig;
    public $modelConfig;
    public $requestArray;
    public $moduleObj;
    public $actionObj;
    public $encript;
    public $adminDB;
    public $mailObject;
    public $ltemail = "kishor4shinde@gmail.com"; //Text to Local SMS Getway Email
    public $api = "dCsanILKtqoY-HV4a6NUVIea0qYTEFgIjBZfN2pNg"; //I9Qe // SMS Gatway api
    public $hash = "dc2cb76d03bb5af9e3ee55f22e8eb34e370631787624e8c7746af97f04"; //8b1dc18e //SMS Gatway Hash
    public $reciver = "heerafinanceservice@gmail.com"; // Mail Update Triger On Mail id
    public $sender = "info@studyansee.in"; //Replace Your Server Sender Email id
    public $sendername = "Hira Finance"; //Sender Name

    public function __construct() {
        parent::__construct();
        $this->encript = new CStringEncDec();
        $this->controllerxAppConfig = array();
        $this->controllerConfig = array();
        $this->fileStack = array();
        $this->viewConfig = array();
        $this->requestArray = array();
        $this->adminDB = array();
        $this->adminDB = $this->createDBO(); //DB Connection Function to Change db_name user and password to access your db
        $this->mailObject = new PHPMailer(); //Mailer Object to send Mail
        //$this->mongoObject= new CMongoDB();
        return;
        //$this->create();
    }

    function removeArray() {
        foreach ($this->controllerConfig as $a) {
            array_pop($this->controllerConfig);
        }
        foreach ($this->fileStack as $a) {
            array_pop($this->fileStack);
        }
    }

    /* aasksoft life cycle */

    public function create() {
        $this->encript = new CStringEncDec();
        $viewConfig = array();
        $controllerAppConfig = array();
        if (true) {

            $viewConfig = $this->listFolderFiles(getcwd() . "/" . APPLICATION . "/views"); //array fo view files
            $controllerAppConfig = $this->listFolderFiles(getcwd() . "/" . APPLICATION . "/controllers/"); //array of controllers
            $my_file = 'AaskAPP/' . SUB . '.php';
            $handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file);
            $data = '<?php ';
            $data .= "\$viewConfig=array(";
            $i = 0;
            foreach ($viewConfig as $key => $val) {
                if ($i < count($viewConfig) - 1) {
                    $data .= "'" . $key . "'" . "=>" . "'" . $val . "',";
                } else {
                    $data .= "'" . $key . "'" . "=>" . "'" . $val . "'";
                }
                $i++;
            }
            $data .= "); ";
            $data .= "\$controllerAppConfig=array(";
            $i = 0;
            foreach ($controllerAppConfig as $key => $val) {
                if ($i < count($controllerAppConfig) - 1) {
                    $data .= "'" . $key . "'" . "=>" . "'" . $val . "',";
                } else {
                    $data .= "'" . $key . "'" . "=>" . "'" . $val . "'";
                }
                $i++;
            }
            $data .= ");  ";
            fwrite($handle, $data);
            include getcwd() . "/AaskAPP/" . SUB . ".php";
            $this->viewConfig = $viewConfig; //array fo view files
            $this->controllerAppConfig = $controllerAppConfig; //array of controllers
        } else {
            include getcwd() . "/AaskAPP/" . SUB . ".php";

            $this->viewConfig = $viewConfig; //array fo view files
            $this->controllerAppConfig = $controllerAppConfig; //array of controllers
        }

        return;
    }

    public function initialize() {
        return;
    }

    public function execute() {
        return;
    }

    public function finalize() {
        return;
    }

    public function reader() {
        return;
    }

    public function distory() {
        $this->removeArray();
        unset($this->adminDB);
        unset($this->encript);
        return;
    }

    /* end aasksoft life cycle */

    function updateMailMessageSuper($id, $sub) {
        $dt = array(
            "id" => $id,
            "Update By ID" => $_SESSION["id"],
            "Update By Email" => $_SESSION["email"],
            "Update Date & Time" => date("Y-m-d H:s:i"),
            "From IP" => $_SERVER["REMOTE_ADDR"],
            "Browser" => $_SERVER['HTTP_USER_AGENT']
        );
        $msg = $this->MessageData($dt, $sub);
        $this->sendmailWithoutAttachment($this->reciver, $this->sender, $this->sendername, $msg, "Employee " . $this->filterPost("empid") . " Recoard Updated.");
    }

    public function sendMailBoth($form, $reciverEmail, $subject, $message) {
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From: <' . $form . '>' . $form . "\r\n";
        mail($reciverEmail, $subject, $message, $headers);
        return true;
    }

    function updateMailMessgeOffice($id, $sub) {
        $dt = array(
            "id" => $id,
            "Update By ID" => $_SESSION["empid"],
            "Update By Email" => $_SESSION["emailid"],
            "Update Date & Time" => date("Y-m-d H:s:i"),
            "From IP" => $_SERVER["REMOTE_ADDR"],
            "Browser" => $_SERVER['HTTP_USER_AGENT']
        );

        $msg = $this->MessageData($dt, $sub);
        $this->sendmailWithoutAttachment($this->reciver, $this->sender, $this->sendername, $msg, "Employee " . $this->filterPost("empid") . " Recoard Updated.");
    }

    function viewHome($viewName) {
        $this->load->view($this->viewConfig[$viewName]);
        return true;
    }

    function viewSpacific($viewName, $flag, $header, $footer, $data) {
        $data["obj"] = $this->encript;
        $data["main"] = $this;
        if ($flag == true) {
            $this->load->view($this->viewConfig[$header], $data);
            $this->load->view($this->viewConfig[$viewName], $data);
            $this->load->view($this->viewConfig[$footer], $data);
        } else {
            $this->load->view($this->viewConfig[$viewName], $data);
        }
    }

    function loadView($viewName, $flag) {
        $data["obj"] = $this->encript;
        $data["k"] = "work";
        if ($flag == true) {
            $this->load->view($this->viewConfig["header"], $data);
            $this->load->view($this->viewConfig[$viewName], $data);
            $this->load->view($this->viewConfig["footer"], $data);
        } else {

            $this->load->view($this->viewConfig[$viewName], $data);
        }
    }

    public function MessageData($data, $action) {
        $msg = "Resp, Sir/Madam,<br>";
        $msg .= $action . " for " . $data["id"];
        $msg .= "<table boarder='1' style='width:300px;'>";
        foreach ($data as $key => $val) {
            $msg .= "<tr><th>" . $key . "</th><th>:</th><td>" . $val . "</td></tr>";
        }
        $msg .= "</table>";
        $msg .= "<img src='https://cdn.iconscout.com/icon/free/png-256/luxury-28-288501.png' style='width:100px; height:100px;'>";
        $msg .= "<h4>Hira Finance</h4>";
        return $msg;
    }

//Mail Configuration 
    public function sendmailWithoutAttachment($reciver, $sender, $sendername, $msg, $subject) {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug = 0;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Username = "info@studyansee.in";
        $mail->Password = "aasksoftinfo@123";
        $mail->Host = "gains.cloudmonsterservers.com";
        $mail->Mailer = "smtp";
        $mail->SetFrom($sender, $sendername);
        $mail->AddReplyTo($sender, $sendername);
        $mail->AddAddress($reciver);
        $mail->Subject = $subject;
        $mail->WordWrap = 80;
        $mail->MsgHTML($msg);
        $mail->IsHTML(true);

        if (!$mail->Send()) {
            //echo "<p class='error'>Problem in Sending Mail.</p>";
        } else {
            //echo "<p class='success'>Contact Mail Sent.</p>";
        }
    }

    public function orderBy($order, $id) {
        return " ORDER BY " . $id . " " . $order . " ";
    }

    public function isLoadView($viewName, $flag, $data) {
        $data["obj"] = $this->encript;
        $data["main"] = $this;
        if ($flag == true) {
            $this->load->view($this->viewConfig["header"], $data);
            if (array_key_exists($viewName, $this->viewConfig)) {
                $this->load->view($this->viewConfig[$viewName], $data);
            } else {
                $this->load->view($this->viewConfig["page_404"], $data);
            }
            $this->load->view($this->viewConfig["footer"], $data);
        } else {

            if (array_key_exists($viewName, $this->viewConfig)) {
                $this->load->view($this->viewConfig[$viewName], $data);
            } else {
                $this->load->view($this->viewConfig["page_404"], $data);
            }
        }
    }

    public function isLoadViewSp($header, $footer, $viewName, $flag, $data) {
        $data["obj"] = $this->encript;
        $data["main"] = $this;

        if ($flag == true) {
            $this->load->view($this->viewConfig[$header], $data);
            if (array_key_exists($viewName, $this->viewConfig)) {
                $this->load->view($this->viewConfig[$viewName], $data);
            } else {
                $this->load->view($this->viewConfig["404"], $data);
            }
            //$this->load->view($this->viewConfig[$viewName], $data);
            $this->load->view($this->viewConfig[$footer], $data);
        } else {

            $this->load->view($this->viewConfig[$viewName], $data);
        }
    }

    function getClassName() {

        if (isset($_REQUEST)) {

            foreach ($_REQUEST as $key => $value) {
                $this->requestArray[$key] = $value;
            }
            if (count($this->requestArray) == 0) {
                $this->requestArray["module"] = "login";
            }
        }
        return;
    }

    function listFolderFiles($dir) {
        $ffs = scandir($dir);
        foreach ($ffs as $ff) {//$tempDir = $ff;
            if ($ff != '.' && $ff != '..') {
                if (is_dir($dir . '/' . $ff)) {
                    array_push($this->fileStack, $ff);
                    $this->listFolderFiles($dir . '/' . $ff);
                } else {
                    $ext = explode(".", $ff);
                    if (isset($ext[1])) {
                        if (strcmp($ext[1], "php") == 0) {
                            $filePath = "";
                            foreach ($this->fileStack as $stackDir) {
                                $filePath .= $stackDir . "/";
                            }
                            $this->controllerConfig[$ext[0]] = $filePath . $ff;
                        }
                    }
                }
            }
        }array_pop($this->fileStack);
        return $this->controllerConfig;
    }

    function listFolderFilesPhp($dir) {
        $ffs = scandir($dir);

        foreach ($ffs as $ff) {//$tempDir = $ff;
            if ($ff != '.' && $ff != '..') {
                if (is_dir($dir . '/' . $ff)) {
                    array_push($this->fileStack, $ff);
                    $this->listFolderFilesPhp($dir . '/' . $ff);
                } else {
                    $ext = explode(".", $ff);
                    if (isset($ext[1])) {
                        if (strcmp($ext[1], "php") == 0) {
                            $filePath = "";
                            foreach ($this->fileStack as $stackDir) {
                                $filePath .= $stackDir . "/";
                            }
                            $this->controllerConfig2[$ext[0]] = $filePath . $ff;
                        }
                    }
                }
            }
        }array_pop($this->fileStack);
        return $this->controllerConfig2;
    }

    public function setMessage($msg) {
        define("MSG_Error", $msg);
    }

    public function checkLogin() {
        if (isset($_SESSION['userEmail'])) {

            return true;
        } else {
            return false;
        }
    }

    public function createDBO() {

        if (LIVE) {
            $tempObjArray = array();
            $tempObjArray["asteriainfotech_asteria"] = new mysqli("localhost", "asteriainfotech_asteria", "42VxLZcw", "asteriainfotech_asteria");
            $_SESSION["db_1"] = "asteriainfotech_asteria";
        } else {
            $tempObjArray = array();
            $tempObjArray["asteria"] = new mysqli("localhost", "root", "root@123", "asteria");
            $_SESSION["db_1"] = "asteria";
        }
        /*
          $tempObjArray = array();
          $tempObjArray["studyans_hira"] = new mysqli("localhost", "studyans_hira", "Hira!@#123", "studyans_hira");
          $_SESSION["db_1"]="studyans_hira"; */
        /* $resultQuerty = $tempObject->query("SELECT * FROM `master_db`");
          $i = 1;
          while ($row = $resultQuerty->fetch_assoc()) {
          $_SESSION["db_" . $i] = $row["user"];
          $i++;
          $tempObjArray[$row["user"]] = new mysqli($row["host"], $row["username"], $row["password"], $row["db"]);
          } */
        return $tempObjArray;
    }

    /* public function createMongoDB() {
      $config = array(
      'username' => 'kishor',
      'password' => 'kishor',
      'dbname' => 'photo',
      'connection_string' => sprintf('mongodb://%s:%d/%s', '127.0.0.1', '27017', 'admin')
      );
      try {
      if (!class_exists('Mongo')) {
      echo ("The MongoDB PECL extension has not been installed or enabled");
      return false;
      }

      $connection = new \MongoClient($config['connection_string'], array('username' => $config['username'], 'password' => $config['password']));
      return $this->mongoObject = $connection->selectDB($config['dbname']);
      } catch (Exception $e) {
      return false;
      }
      } */

    public function updateQuery($sql, $db) {

        $this->adminDB = $this->createDBO();
        if ($this->adminDB[$db]->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function insert($table, $db, $data) {

        $sql = "INSERT INTO " . $table;
        $t = "( ";
        $t2 = "( ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i != count($data)) {
                $t = $t . $key . ",";
                $t2 = $t2 . "'" . $val . "'" . ",";
            } else {
                $t = $t . $key . " )";
                $t2 = $t2 . "'" . $val . "'" . " )";
            }
            $i++;
        }
        return $sql = $sql . " " . $t . " values " . $t2;
        //return $this->adminDB[$db]->query($sql);
    }

    public function select($table, $db) {
        return $sql = "SELECT * FROM " . $db . "." . $table . " ";
        //return $this->adminDB[$db]->query($sql);
    }

    public function selectSpacific($data, $table) {
        $sql = "SELECT ";
        $pad = count($data) - 1;
        for ($i = 0; $i < count($data) - 1; $i++) {
            $sql .= "`" . $data[$i] . "`, ";
        }
        $sql .= "`" . $data[$pad] . "`  FROM " . $table . " ";
        return $sql;
    }

    public function selectDistinct($table, $id) {
        return "SELECT DISTINCT " . $id . " FROM " . $table . " ";
    }

    function selectJoinData($data1, $data2, $jointype, $table, $oncol) {
        $s = "SELECT ";
        foreach ($data1 as $k1 => $d1) {
            foreach ($d1 as $kk1 => $dd1) {
                $s .= $k1 . "." . $dd1 . " , ";
            }
        }
        foreach ($data2 as $k1 => $d1) {
            $i = 1;
            foreach ($d1 as $kk1 => $dd1) {
                if ($i != count($d1)) {
                    $s .= $k1 . "." . $dd1 . " , ";
                } else {
                    $s .= $k1 . "." . $dd1 . " ";
                }$i++;
            }
        }
        $s .= " FROM ";
        $i = 1;
        foreach ($table as $kt => $tb) {
            if ($i != count($table)) {
                $s .= $tb . " " . $jointype . " ";
            } else {
                $s .= $tb . " ";
            }$i++;
        }
        $s .= " ON ";
        $i = 1;
        foreach ($oncol as $kt => $tb) {
            if ($i != count($oncol)) {
                $s .= $kt . "." . $tb . " = ";
            } else {
                $s .= $kt . "." . $tb . " ";
            }$i++;
        }
        return $s;
    }

    public function whereBetweenDates($colname, $d1, $d2) {
        $sql = " WHERE ";
        $sql .= "DATE(" . $colname . ") BETWEEN '" . $d1 . "' AND '" . $d2 . "'";
        return $sql;
    }

    public function whereBetweenDatesID($colname, $d1, $d2, $key, $id) {
        $sql = " WHERE ";
        $sql .= "DATE(" . $colname . ") BETWEEN '" . $d1 . "' AND '" . $d2 . "'" . " AND " . $key . "='" . $id . "'";
        return $sql;
    }

    public function whereBetweenDatesArray($colname, $d1, $d2, $data) {
        $sql = " WHERE ";
        $sql .= "DATE(" . $colname . ") BETWEEN '" . $d1 . "' AND '" . $d2 . "'" . " AND ";
        $i = 1;
        $and = "AND";
        foreach ($data as $key => $val) {
            if ($i != count($data)) {
                $sql .= $key . "=" . "'" . $val . "'" . " " . $and . " ";
            } else {
                $sql .= $key . "=" . "'" . $val . "'" . " ";
            }
            $i++;
        }
        return $sql;
    }

    public function selectCount($table, $col) {
        return "SELECT count(" . $col . ") FROM " . $table . " ";
    }

    public function selectMax($table, $col) {
        return "SELECT max(" . $col . ") FROM " . $table . " ";
    }

    public function selectSum($table, $col) {
        return "SELECT sum(" . $col . ") FROM " . $table . " ";
    }

    public function limitWithOffset($offset, $limit) {
        return " LIMIT " . $offset . " , " . $limit . " ";
    }

    public function limitWithOutOffset($limit) {
        return " LIMIT " . $limit . " ";
    }

    public function delete($table) {
        return "DELETE FROM " . $table . " ";
    }

    public function updateINC($data, $table) {
        $sql = " UPDATE  " . $table . " SET ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i != count($data)) {
                $sql .= $key . "=" . "" . $val . "" . ", ";
            } else {
                $sql .= $key . "=" . "" . $val . "" . " ";
            }
            $i++;
        }
        return $sql;
    }

    public function checkChild($id) {
        $sql = $this->select("comment", $_SESSION["db_1"]) . $this->where(array("comment_parent" => $id, "isActive" => 1), "AND");
        $result = $this->adminDB[$_SESSION["db_1"]]->query($sql);
        while ($rw = $result->fetch_assoc()) {
            ?>
            <li>
                <div class="comment-body">
                    <div class="comment-author vcard">
                        <img src="assets/ap/dist/img/avatar5.png" class="avatar" alt="comment-img">
                    </div>
                    <div class="comment-box">
                        <div class="comment-meta commentmetadata">
                            <cite class="ttm-comment-owner"><?= $rw["name"] ?></cite>
                            <?php
                            $dats = explode(" ", $rw["isDate"]);
                            $dat = explode("-", $dats[0]);
                            $month = array(0 => "", 1 => "Jan", 2 => "Feb", 3 => "Mar", 4 => "Apr", 5 => "May", 6 => "Jun", 7 => "July", 8 => "Aug", 9 => "Sept", 10 => "Oct", 11 => "Nov", 12 => "Dec",);
                            ?>
                            <a href="#"><?= $month[(int) $dat[1]] ?> <?= $dat[2] ?>, <?= $dat[0] ?> <?= $dats[1] ?></a>
                        </div>
                        <div class="author-content-wrap">
                            <p><?= $rw["message"] ?></p>
                        </div>
                        <div class="reply">
                            <a rel="nofollow" class="comment-reply-link" href="#">Reply</a>
                        </div>
                    </div>
                </div>
            </li>
            <?php
            $this->checkChild($rw["id"]);
        }
    }

    public function where($data, $and) {
        $sql = " WHERE ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i != count($data)) {
                $sql .= $key . "=" . "'" . $val . "'" . " " . $and . " ";
            } else {
                $sql .= $key . "=" . "'" . $val . "'" . " ";
            }
            $i++;
        }
        return $sql;
    }

    public function whereSingle($data) {
        $sql = " WHERE ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i == count($data)) {
                $sql .= $key . "=" . "'" . $val . "'";
            }
        }
        return $sql;
    }

    public function whereSingleWithoutQout($data) {
        $sql = " WHERE ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i == count($data)) {
                $sql .= $key . "=" . "" . $val . "";
            }
        }
        return $sql;
    }

    public function whereNesQuery($data) {
        $sql = " WHERE ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i == count($data)) {
                $sql .= $key . "=" . "(" . $val . ")";
            }
        }
        return $sql;
    }

    public function update($data, $table) {
        $sql = " UPDATE  " . $table . " SET ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i != count($data)) {
                $sql .= $key . "=" . "'" . $val . "'" . ", ";
            } else {
                $sql .= $key . "=" . "'" . $val . "'" . " ";
            }
            $i++;
        }
        return $sql;
    }

    public function filterPost($variable_name) {
        return filter_input(INPUT_POST, $variable_name);
    }

    public function filterGet($variable_name) {
        return filter_input(INPUT_GET, $variable_name);
    }

    public function filterRequest($variable_name) {
        return filter_input(INPUT_REQUEST, $variable_name);
    }

    public function selectQuery($sql, $db) {

        $this->adminDB = $this->createDBO();
        return $this->adminDB[$db]->query($sql);
    }

    public function getRandomPassword() {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789!@#$%^&*";

        $count = strlen($alphabet) - 1;
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $count);

            $pass[$i] = $alphabet[$n];
        }

        return implode($pass);
    }

    public function sendMail($reciverEmail, $subject, $message) {

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <no-replay@aasksoft.com>' . "\r\n";
        mail($reciverEmail, $subject, $message, $headers);
        return true;
    }

    public function sendMailBySp($from, $reciverEmail, $subject, $message) {

        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        // More headers
        $headers .= 'From: <' . $from . '>' . "\r\n";
        mail($reciverEmail, $subject, $message, $headers);
        return true;
    }

    public function sendSMS($mobile, $message) {

        $textlocal = new Textlocal($this->ltemail, $this->hash, $this->api);

        $numbers = array($mobile);
        $sender = 'TXTLCL';
        //$message = 'This is a message';

        try {
            $result = $textlocal->sendSms($numbers, $message, $sender);
            //print_r($result);
        } catch (Exception $e) {
            die('Error: ' . $e->getMessage());
        }
        return true;
    }

    public function newUrl($var) {

        $arrayHostUrl = explode('.', HOSTURL);

        for ($i = 0; $i < count($arrayHostUrl); $i++) {
            if ($i == 0) {
                
            } else {
                $var .= "." . $arrayHostUrl[$i];
            }
        }
        return $var;
    }

    function isValidMobile($mobile) {
        if (!empty($mobile)) { // phone number is not empty
            if (preg_match('/^\d{10}$/', $mobile)) { // phone number is valid
                return true;
                // your other code here
            } else { // phone number is not valid
                return false;
            }
        } else { // phone number is empty
            return false;
        }
    }

    function isPasswordValid($password) {
        $passwordErr = "";
        if (!empty($password)) {

            if (strlen($password) <= '8') {
                $passwordErr = "Your Password Must Contain At Least 8 Characters!";
            } elseif (!preg_match("#[0-9]+#", $password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Number!";
            } elseif (!preg_match("#[A-Z]+#", $password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            } elseif (!preg_match("#[a-z]+#", $password)) {
                $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            }
            return $passwordErr;
        }
    }

    function sendMailtoUser($email) {
        $message = "<a href='" . ASETS . "/?r=" . $this->encript->encdata('C_UserEmailVerify') . "&q=" . $this->encript->encdata($this->getID($email)) . "&d=" . $this->encript->encdata(date("d-m-Y")) . "'>Verify</a>";
        $this->sendMail($this->filterPost("inputEmail"), "PB verification mail", $message);
        return $message;
    }

    public function dayCount($from, $to) {
        $first_date = strtotime($from);
        $second_date = strtotime($to);
        $offset = $second_date - $first_date;
        return floor($offset / 60 / 60 / 24);
    }

    /* function getID($email)
      {
      $data = array(
      "email" => $email
      );
      $cursor = $this->mongoObject->selectData("en_user", $data);
      if ($cursor != false) {
      $data=$cursor->getNext();
      return $data["_id"];
      }
      return 0;
      } */

    public function session_set($data) {
        foreach ($data as $key => $value) {
            $_SESSION[$key] = $value;
        }
    }

    public function session_get($key) {
        return $_SESSION[$key];
    }

    public function session_destrory() {
        session_destroy();
    }

    public function whereBetweenDate($cl, $data, $and) {
        //WHERE startTime BETWEEN '2010-04-29 00:00:00' AND '2010-04-29 23:59:59'
        $sql = " WHERE " . $cl . " BETWEEN ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i != count($data)) {
                $sql .= "'" . $val . "'" . " " . $and . " ";
            } else {
                $sql .= "'" . $val . "'" . " ";
            }
            $i++;
        }
        return $sql;
    }

    public function printMessage($msg, $type) {

        $mssg = '<div class="alert alert-dismissible alert-' . $type . '">';
        $mssg .= '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        $mssg .= $msg;
        $mssg .= '</div>';
        return $mssg;
    }

    public function getIndianCurrency($number) {
        $decimal = round($number - ($no = floor($number)), 2) * 100;
        $hundred = null;
        $digits_length = strlen($no);
        $i = 0;
        $str = array();
        $words = array(0 => '', 1 => 'one', 2 => 'two',
            3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
            7 => 'seven', 8 => 'eight', 9 => 'nine',
            10 => 'ten', 11 => 'eleven', 12 => 'twelve',
            13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
            16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
            19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
            40 => 'forty', 50 => 'fifty', 60 => 'sixty',
            70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
        $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
        while ($i < $digits_length) {
            $divider = ($i == 2) ? 10 : 100;
            $number = floor($no % $divider);
            $no = floor($no / $divider);
            $i += $divider == 10 ? 1 : 2;
            if ($number) {
                $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
                $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
                $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural . ' ' . $hundred : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural . ' ' . $hundred;
            } else
                $str[] = null;
        }
        $Rupees = implode('', array_reverse($str));
        $paise = ($decimal) ? "." . ($words[$decimal / 10] . " " . $words[$decimal % 10]) . ' Paise' : '';
        return ($Rupees ? $Rupees . 'Rupees ' : '') . $paise;
    }

    public function whereSingleLike($data) {
        $sql = " WHERE ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i == count($data)) {
                $sql .= $key . " LIKE " . "'%" . $val . "%'";
            }
        }
        return $sql;
    }

    public function whereSingleLikeAndArray($data, $data2) {
        $sql = " WHERE ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i == count($data)) {
                $sql .= $key . " LIKE " . "'%" . $val . "%'";
            }
        }
        $sql .= " AND ";
        $and = "AND";
        foreach ($data2 as $key => $val) {
            if ($i != count($data)) {
                $sql .= $key . "=" . "'" . $val . "'" . " " . $and . " ";
            } else {
                $sql .= $key . "=" . "'" . $val . "'" . " ";
            }
            $i++;
        }
        return $sql;
    }

    public function whereSearchLike($coloum, $data) {
        $sql = " WHERE CONCAT_WS(";
        $i = 1;
        foreach ($coloum as $val) {
            if ($i == count($coloum)) {
                $sql .= $val;
            } else {
                $sql .= $val . ",";
            }
            $i++;
        }
        $sql .= " ) ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i == count($data)) {
                $sql .= " LIKE " . "'%" . $val . "%'";
            }
        }
        return $sql;
    }

    public function searchFullText($coloum, $data) {
        $sql = " WHERE MATCH(";
        $i = 1;
        foreach ($coloum as $val) {
            if ($i == count($coloum)) {
                $sql .= $val;
            } else {
                $sql .= $val . ",";
            }
            $i++;
        }
        $sql .= " ) AGAINST ( ";
        $i = 1;
        foreach ($data as $key => $val) {
            if ($i == count($data)) {
                $sql .= " " . "'" . $val . "'IN NATURAL LANGUAGE MODE )";
            }
        }
        return $sql;
    }

    public function getBranchName($id) {

        try {
            $result = $this->adminDB[$_SESSION["db_1"]]->query($this->select("hf_branch", $_SESSION["db_1"]) . $this->whereSingle(array("id" => $id)));
            $row = $result->fetch_assoc();
            return $row["blocation"];
        } catch (Exception $ex) {
            return "";
        }
    }

    public function getData($sql, $col) {
        try {
            $result = $this->adminDB[$_SESSION["db_1"]]->query($sql);
            $row = $result->fetch_assoc();
            return $row[$col];
        } catch (Exception $ex) {
            
        }
    }

    public function getAge($dob) {
        $date1 = new DateTime($dob);
        $date2 = new DateTime(date("Y-m-d"));
        $diff = $date1->diff($date2);

        return $diff->y . " Y, " . $diff->m . "M, " . $diff->d . "D";
    }

    public function getAgeinMonth($dob) {
        $date1 = new DateTime($dob);
        $date2 = new DateTime(date("Y-m-d"));
        $diff = $date1->diff($date2);
        $month = (((int) $diff->y) * 12) + $diff->m;
        return $month . "." . $diff->d;
    }

    public function createClassobject($moduleName) {
        //print_r($this->controllerAppConfig);
        if (array_key_exists($moduleName, $this->controllerAppConfig) == FALSE) {
            $strFullDetail = $this->removePhpExtenstion($this->controllerAppConfig["Cpage_404"]);
        } else {
            $strFullDetail = $this->removePhpExtenstion($this->controllerAppConfig[$moduleName]);
        }

        require_once $strFullDetail["fullPath"];
        $controlObject = new $strFullDetail["class"];
        return $controlObject;
    }

    public function removePhpExtenstion($filePath) {
        $strArrayfullDetail = array();
        $strControlfullPath = getcwd() . "/application/super/controllers/" . $filePath;

        $strArray = explode("/", $strControlfullPath);
        $strClassName = explode(".", $strArray[count($strArray) - 1]);
        if (false != file_exists($strControlfullPath)) {
            if (class_exists($strControlfullPath, FALSE) == FALSE) {
                //require_once($strControlfullPath . "");
                $strArrayfullDetail["fullPath"] = $strControlfullPath;
                $strArrayfullDetail["class"] = $strClassName[0];
            }
        } else {
            die("file not found");
        }
        return $strArrayfullDetail;
    }

    public function executeQuery($sql) {
        return $this->adminDB[$_SESSION["db_1"]]->query($sql);
    }

    public function accnoPading($number, $n, $l) {

//$result = substr($phone, 0, 4);
        $result = "****";
        $result .= substr($number, $n, $l);
        return $result;
    }

    public function loadImageorPDF($file) {

        if (!empty($file)) {
            $arr = explode('.', $file);
            $choise = $arr[count($arr) - 1];
            switch ($choise) {

                case "pdf":
                    return "<embed src='" . $file . "' type='application/pdf' width='100%' height='600px' />";

                case "jpg":
                    return "<img src='" . $file . "' />";

                case "JPG":
                    return "<img src='" . $file . "' />";

                case "JPEG":
                    return "<img src='" . $file . "' />";

                case "png":
                    return "<img src='" . $file . "' />";

                case "PNF":
                    return "<img src='" . $file . "' />";

                case "gif":
                    return "<img src='" . $file . "' />";

                case "GIF":
                    return "<img src='" . $file . "' />";

                default :
                    return "<img src='" . $file . "' />";
            }
        }
    }

    public function getDaysinMonth($i, $year) {
        $number = 0;
        switch ($i) {
            case 1:
                $number = 31;
                break;
            case 2:
                if ($year % 4 == 0) {
                    $number = 29;
                } else {
                    $number = 28;
                }
                break;
            case 3:
                $number = 31;
                break;
            case 4:
                $number = 30;
                break;
            case 5:
                $number = 31;
                break;
            case 6:
                $number = 30;
                break;
            case 7:
                $number = 31;
                break;
            case 8:
                $number = 31;
                break;
            case 9:
                $number = 30;
                break;
            case 10:
                $number = 31;
                break;
            case 11:
                $number = 30;
                break;
            case 12:
                $number = 31;
                break;
            default :
                break;
        }
        return $number;
    }

}
