<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class Chook_Times extends CI_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["chook_times"]=$this->Chook_model->chook_times();
       
        $this->load->view('templates/header');
        $this->load->view('chook_times/index',$data);
        $this->load->view('templates/footer');
    }
}
?>