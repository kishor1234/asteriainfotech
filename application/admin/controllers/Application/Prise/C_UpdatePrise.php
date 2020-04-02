<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require_once controller;
class C_UpdatePrise extends CAaskController {

    //put your code here
    public function __construct() {
        parent::__construct();
        if(!isset($_SESSION["login"])){redirect(HOSTURL);}
    }

    public function create() {
        parent::create();
        
        return;
    }

    public function initialize() {
        parent::initialize();
        try{
            if($this->adminDB[$_SESSION["db_1"]]->query($this->update($_POST, "price").$this->whereSingle(array("id"=>$_SESSION["priceid"]))))
            {
                $_SESSION["msg"]=$this->printMessage("Update success!", "success");
            }
            else{
                $_SESSION["msg"]=$this->printMessage("Delete failed!", "danger");
            }
        } catch (Exception $ex) {

        }
        return;
    }

    public function execute() {
        parent::execute();
        $this->isLoadView("VListofBranches", FALSE, array());
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
    function isValidate()
    {
        return true;
    }
   
}
