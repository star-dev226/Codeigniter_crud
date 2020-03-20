<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('navigation');
		$this->load->view('home');
		$this->load->view('footer');
	}

	public function login()
	{
		// $data['username'] = $this->input->post('username');
		// $data['password'] = $this->input->post('password');

		$data['username'] = $_POST['username'];
		$data['password'] = $_POST['password'];

		return "success";

		// $result = $this->login_model->get_user($data);
	}

	public function show($page)
	{
		$this->load->view('header');
		$this->load->view('navigation');

		if ( $page == 'about_us' ) {

			$this->load->view('about');

		} elseif ( $page == 'contact' ) {

			$this->load->view('contact');

		} elseif ( $page == 'login_view' ) {

			$this->load->view('login_view');

		} elseif ( $page == 'register_view' ) {

			$this->load->view('register_page');

		} elseif ( $page == 'student_list' ) {

			$result['student_lists'] = $this->login_model->get_student_list();

			$this->load->view('student_list', $result);

		} elseif ( $page == 'new_student' ) {

			$this->load->view('add_student_view');

		}


		$this->load->view('footer');
	}

	public function edit($id)
	{
		$this->load->view('header');
		$this->load->view('navigation');

		$result['edit_data'] = $this->login_model->get_student_list($id);
		$this->load->view('edit_view', $result);

		$this->load->view('footer');
	}

	public function save($id)
	{
		$this->load->view('header');
		$this->load->view('navigation');

		// $data['name'] = $_POST['name'];
		// $data['age'] = $_POST['age'];
		// $data['sex'] = $_POST['sex'];
		// $data['address'] = $_POST['address'];

		$data['name']    =   $this->input->post('name');
		$data['age']     =   $this->input->post('age');
		$data['sex']     =   $this->input->post('sex');
		$data['address'] =   $this->input->post('address');

		$this->login_model->get_update_list($data, $id);

		$this->load->view('footer');
	}

	public function delete($id) 
	{
		$this->load->view('header');
		$this->load->view('navigation');

		$result['student_lists'] = $this->login_model->delete_student_list($id);
		$this->load->view('student_list', $result);

		$this->load->view('footer');
	}

	public function create()
	{
		$this->load->view('header');
		$this->load->view('navigation');

		// $data['name'] = $_POST['name'];
		// $data['age'] = $_POST['age'];
		// $data['sex'] = $_POST['sex'];
		// $data['address'] = $_POST['address'];

		$data['name']    =   $this->input->post('name');
		$data['age']     =   $this->input->post('age');
		$data['sex']     =   $this->input->post('sex');
		$data['address'] =   $this->input->post('address');

		$this->login_model->create_student_data($data);
		// $this->load->view('student_list', $result);

		$this->load->view('footer');
	}

}
