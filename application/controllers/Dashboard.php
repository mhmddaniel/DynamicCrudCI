<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php /welcome
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
        $this->load->model('FormModel');
        $this->load->model('SubformModel');
        $this->load->model('ApplicantModel');
        $this->load->model('CompanyModel');
    }
    public function index()
    {
        $header_data['title'] = "Dashboard";
        $content_data['applicant_count'] = $this->ApplicantModel->count();
        $content_data['company_count'] = $this->CompanyModel->count();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('dashboard/dashboard',$content_data);
        $this->load->view('footer');
    }
}
