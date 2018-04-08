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
        $this->user->email = 'alecling@iu.edu';
        $this->user->role = 'user';

		$data = $this->user->getName();

		$this->load->view('view.php',$data);
	}
}

?>
