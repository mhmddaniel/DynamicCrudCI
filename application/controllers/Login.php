<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct(){
        parent::__construct();
        $this->load->model('UserModel');
    }
	public function index()
	{
		return $this->load->view('login');
	}


    public function do_login()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $user=$this->UserModel->login($username,md5($password));
        if(!empty($user)){
            $userdata["userdata"] = $this->UserModel->login($username,md5($password));
            $userdata["logged_in"] = TRUE;

            $this->session->set_userdata($userdata);
            redirect('Dashboard');
        }else{
            redirect('Login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect("Login");
    }


}
