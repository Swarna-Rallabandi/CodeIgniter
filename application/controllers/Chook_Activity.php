<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Chook_Activity extends CI_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["chook_activity"]=$this->Chook_model->chook_activity();
       
        $this->load->view('templates/header');
        $this->load->view('chook_activity/index',$data);
        $this->load->view('templates/footer');
    }
}
?>