<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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

        $this->load->model('FormModel');
        $this->load->model('SubformModel');
        $this->load->model('InputModel');
        $this->load->model('VariableModel');
    }
	public function index()
	{

        $header_data['title'] = "Form";
        $content_data['form'] = $this->FormModel->get();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('form/view',$content_data);
        $this->load->view('footer');
	}

	public function Create()
    {
        $content_data['title'] = "Form";
        $header_data['title'] = "Form";
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('form/add',$content_data);
        $this->load->view('footer');
    }

	public function Add()
    {
        $data['form_name'] = $this->input->post('form_name');//str_replace(' ', '_',strtolower ($this->input->post('form_name')));
        $data['subform_count'] = $this->input->post('subform_count');

        $this->FormModel->insert($data);

        redirect("form/subform");
    }

    public function Subform()
    {
        $content_data['title'] = "Subform";
        $content_data['primary_key'] = $this->FormModel->get_last_primary_key();
        $content_data['form_name'] = $this->FormModel->get_from_primary_key("form_name",$content_data['primary_key']);
        $content_data['subform_count'] = $this->FormModel->get_from_primary_key("subform_count",$content_data['primary_key']);
        $this->load->view('header');
        $this->load->view('sidenav');
        $this->load->view('form/addsubform',$content_data);
        $this->load->view('footer');
    }

    public function Subformadd($primary_key)
    {
        $content_data['title'] = "Subform";
        $content_data['primary_key'] = $primary_key;
        $content_data['form_name'] = $this->FormModel->get_from_primary_key("form_name",$content_data['primary_key']);
        $content_data['subform_count'] = 1;
        $this->load->view('header');
        $this->load->view('sidenav');
        $this->load->view('form/addsubform',$content_data);
        $this->load->view('footer');
    }

    public function Subformedit($primary_key)
    {
        $content_data['title'] = "Subform";
        $content_data['primary_key'] = $primary_key;
        $content_data['form_name'] = $this->FormModel->get_from_primary_key("form_name",$content_data['primary_key']);
        $content_data['subform_count'] = $this->FormModel->get_from_primary_key("subform_count",$content_data['primary_key']);
        $this->load->view('header');
        $this->load->view('sidenav');
        $this->load->view('form/addsubform',$content_data);
        $this->load->view('footer');
    }

    public function Viewsubform($form_id)
    {
        $data['form_name'] = $this->input->post('form_name');
        $header_data['title'] = "Sub Form";
        $content_data['form'] = $this->SubformModel->get_all_from_foreign_key($form_id);
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('form/viewsubform',$content_data);
        $this->load->view('footer');
    }

    public function Addsubform()
    {
        $form_id= $this->input->post('form_id');
        $names = $this->input->post('subform_name');

        $counts = $this->input->post('variable_count');

        for($i=0;$i<count($names);$i++)
        {
            $data['form_id'] = $form_id;
            $data['subform_name'] = $names[$i];//str_replace(' ', '_',strtolower ($this->input->post('form_name')));
            $data['variable_count'] = $counts[$i];

            $this->SubformModel->insert($data);
        }

        redirect("form");
    }

    public function Variable($subform_id)
    {
        $header_data['title'] = "Inputan";
        $content_data['title'] = "Inputan";
        $content_data['subform_id'] = $subform_id;
        $content_data['subform'] = $this->SubformModel->get_all_from_primary_key($subform_id);
        $content_data['input_type'] = $this->InputModel->get();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('form/variable',$content_data);
        $this->load->view('footer');
    }

    public function ViewVariable($subform_id)
    {
        $header_data['title'] = "Inputan";
        $content_data['title'] = "Inputan";
        $content_data['subform_id'] = $subform_id;
        $content_data['subform'] = $this->SubformModel->get_all_from_primary_key($subform_id);
        $content_data['input'] = $this->VariableModel->get_all_from_foreign_key($subform_id);
        $content_data['input_type'] = $this->InputModel->get();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('form/viewvariable',$content_data);
        $this->load->view('footer');
    }

    public function EditVariable($subform_id)
    {
        $header_data['title'] = "Inputan";
        $content_data['title'] = "Inputan";
        $content_data['subform_id'] = $subform_id;
        $content_data['subform'] = $this->SubformModel->get_all_from_primary_key($subform_id);
        $content_data['input_type'] = $this->InputModel->get();
        $this->load->view('header',$header_data);
        $this->load->view('sidenav');
        $this->load->view('form/variable',$content_data);
        $this->load->view('footer');
    }


    public function AddVariable()
    {
        $subform_id= $this->input->post('subform_id');
        $names = $this->input->post('input_name');
        $types = $this->input->post('input_type');

        for($i=0;$i<count($names);$i++)
        {
            $data['subform_id'] = $subform_id;
            $data['variable_name'] = $names[$i];//str_replace(' ', '_',strtolower ($this->input->post('form_name')));
            $data['variable_type'] = $types[$i];

            $this->VariableModel->insert($data);
        }

        redirect("form/Viewvariable/".$subform_id);
    }
}
