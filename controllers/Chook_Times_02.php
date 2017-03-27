<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Chook_Times_02 extends CI_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["chook_times_02"]=$this->Chook_model->chook_times_02();
       
        $this->load->view('templates/header');
        $this->load->view('chook_times_02/index',$data);
        $this->load->view('templates/footer');
    }
}
?>