<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
class ChookData extends CI_Controller{
       function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Chook_model'); // load model
}
    public function index(){
        $this->load->model("Chook_model");
        $data["fetch_data"]=$this->Chook_model->fetch_data();
       
        $this->load->view('templates/header');
        $this->load->view('chookdata/index',$data);
        $this->load->view('templates/footer');
    }
}
?>