<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Applicant extends CI_Controller {

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

        $this->load->model('ApplicantModel');
        $this->load->model('WilayahModel');
    }

    public function GetData($primary_key)
    {
        echo json_encode($this->ApplicantModel->get_by_primary_key($primary_key));
    }

    public function index()
    {

        $header_data['title'] = "Pelaku Usaha";
        $content_data['provinces'] = $this->WilayahModel->get_provinces();
        $content_data['user'] = $this->ApplicantModel->get();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('applicant/view',$content_data);
        $this->load->view('footer');
    }

    public function Create()
{
    $content_data['title'] = "Isi Data Pelaku Usaha";
    $header_data['title'] = "Isi Data Pelaku Usaha";
    $content_data['provinces'] = $this->WilayahModel->get_provinces();
    $this->load->view('header',$header_data);
    $this->load->view('sidenav');
    $this->load->view('applicant/add',$content_data);
    $this->load->view('footer');
}

    public function Add()
    {
        $data = $this->input->post();

        $this->ApplicantModel->insert($data);

        redirect("applicant");
    }

    public function Update()
    {

        $id = $this->input->post('id');

        $content_data['title'] = "Data Pelaku Usaha";
        $header_data['title'] = "Data Pelaku Usaha";
        $content_data['applicant'] = $this->ApplicantModel->get_by_secondary_key($id);
        $content_data['provinces'] = $this->WilayahModel->get_provinces();
        $content_data['cities'] = $this->WilayahModel->get_areas($content_data['applicant']->provinsi,5);
        $content_data['districts'] = $this->WilayahModel->get_areas($content_data['applicant']->kota,8);
        $content_data['areas'] = $this->WilayahModel->get_areas($content_data['applicant']->kecamatan,13);
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('applicant/update',$content_data);
        $this->load->view('footer');
    }

    public function Edit()
    {

        $data = $this->input->post();


        $this->ApplicantModel->deactivate_data($data['nik']);
        $this->ApplicantModel->insert($data);
        redirect("applicant");
    }

    public function Delete()
    {

        $id = $this->input->post('id');

        $this->ApplicantModel->delete($id);

        redirect("applicant");

    }

    public function Filter()
    {
        $fieldid = $this->input->post('fieldid');
        $value = $this->input->post('value');

        $result = $this->ApplicantModel->filter_by($fieldid,$value);

        echo json_encode($result);

    }

    public function Age()
    {
        $fieldid = 'tanggal_lahir';
        $value = explode(",",$value = $this->input->post('value'));

        $result = $this->ApplicantModel->calc_age($fieldid,$value);

        echo json_encode($result);
    }

    public function GetPrimary()
    {

    }
}
