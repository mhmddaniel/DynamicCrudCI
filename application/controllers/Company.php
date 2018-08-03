<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

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

        $this->load->model('CompanyModel');
        $this->load->model('ApplicantModel');
        $this->load->model('WilayahModel');
    }

    public function index()
    {

        $header_data['title'] = "Industri Wisata";
        $content_data['user'] = $this->CompanyModel->get();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('company/view',$content_data);
        $this->load->view('footer');
    }

    public function Create()
    {
        $content_data['title'] = "Data Industri Wisata";
        $header_data['title'] = "Data Industri Wisata";
        $content_data['nik'] = $this->ApplicantModel->get_all_primary_key();
        $content_data['districs'] = $this->WilayahModel->get_areas("16.71",8);
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('company/add',$content_data);
        $this->load->view('footer');
    }

    public function Add()
    {
        $data = $this->input->post();

        $this->CompanyModel->insert($data);

        redirect("company");
    }
}