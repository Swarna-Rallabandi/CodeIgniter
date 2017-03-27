<?php
class Posts extends CI_Controller{
    function __Construct(){
  parent::__Construct ();
   $this->load->database(); // load database
   $this->load->model('Post_model'); // load model
}

    public function index(){
        //$data['title']='Letests Posts';
           $this->data['posts'] = $this->Post_model->get_posts(); // calling Post model method getPosts()

        $this->load->view('templates/header');
        $this->load->view('posts/index',$this->data); //load the view file , we are passing $data array to view file
        $this->load->view('templates/footer');
    }
}
?>