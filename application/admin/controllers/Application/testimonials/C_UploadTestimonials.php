<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CI_Register
 *
 * @author asksoft
 */
require_once controller;

class C_UploadTestimonials extends CAaskController {

    //put your code here
    public $visState = false;

    public function __construct() {
        parent::__construct();
        if (!isset($_SESSION["login"])) {
            redirect(ASETS . "/?r=" . $this->encript->encdata("login"));
        }
    }

    public function create() {
        parent::create();
        
        return;
    }

    public function initialize() {
        parent::initialize();

        return;
    }

    public function execute() {
        parent::execute();
        try {
            if (!empty($_FILES)) {
                //print_r($_FILES);
                $uploadDir = "assets/upload/logo";
                $tmpFile = $_FILES['uploadImage']['tmp_name'];
                $filename = $uploadDir . '/' . time() . '-' . $_FILES['uploadImage']['name'];
                $path = getcwd() . "/" . $filename;
                move_uploaded_file($tmpFile, $path);
                $sql = $this->insert("testimonials", $_SESSION["db_1"], array("logo" => $filename, "logopath" => $path,"name"=>$this->filterPost("name"),"testimonials"=>$this->filterPost("testimonials"), "ip" => $_SERVER["REMOTE_ADDR"]));
                $this->adminDB[$_SESSION["db_1"]]->query($sql);
                echo "<h1>Success</h1>";
                echo "<img src='".HOSTURL . $filename."' style='width:100px; height:auto;'>";
            }
        } catch (Exception $ex) {
            
        }
        return;
    }

    public function finalize() {
        parent::finalize();
        return;
    }

    public function reader() {
        parent::reader();
        return;
    }

    public function distory() {
        parent::distory();
        return;
    }

}
