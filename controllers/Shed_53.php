<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Shed_53 extends CI_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["shed_53"]=$this->Chook_model->shed_53();
       
        $this->load->view('templates/header');
        $this->load->view('shed_53/index',$data);
        $this->load->view('templates/footer');
    }
}
?>