<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Shed_53a extends CI_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["shed_53a"]=$this->Chook_model->shed_53a();
       
        $this->load->view('templates/header');
        $this->load->view('shed_53a/index',$data);
        $this->load->view('templates/footer');
    }
}
?>