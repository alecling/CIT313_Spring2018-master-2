<?php
class Controller {

    public $load;
    public $user;


    function __construct() {

        $this->load = new Load();
        $this->user = new User();

        $this->home();

    }

    function home() {

        $this->user->userID = 'alecling';
        $this->user->firstname = 'Alexa';
        $this->user->lastname = 'Clingerman';
        $this->user->email = 'alecling@umail.iu.edu';
        $this->user->role = 'admin';


        $data = $this->user->getName();
        $this->load->view('view.php',$data);

    }





}

?>
