<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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

        if(!isset($_SESSION['logged_in'])){
            redirect(base_url('Login'));
        };

        $this->load->model('UserModel');
    }

    public function index()
    {

        $header_data['title'] = "User";
        $content_data['user'] = $this->UserModel->get();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('user/view',$content_data);
        $this->load->view('footer');
    }

    public function Create()
    {
        $content_data['title'] = "User";
        $header_data['title'] = "User";
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('user/add',$content_data);
        $this->load->view('footer');
    }

    public function Add()
    {
        $data['username'] = $this->input->post('username');//str_replace(' ', '_',strtolower ($this->input->post('form_name')));
        $data['password'] = md5($this->input->post('password'));
        $data['category'] = $this->input->post('category');

        $this->UserModel->insert($data);

        redirect("user");
    }
}
