<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Dashboard extends Auth_Controller {
		function __construct()
		{
			parent::__construct();
			$this->load->model('TV_shows_model');
		}
		
		public function index()
		{
			$this->render('dashboard/index_view');
		}
		public function new_review(){
			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->data['page_title'] = 'new review';
			$this->data['page_description'] = '';
			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('imdbrating', 'IMdb Rating', 'required');
			$this->form_validation->set_rules('pukksrating', 'Pukks Rating', 'required');
			$this->form_validation->set_rules('genre', 'Genre', 'required');
			$this->form_validation->set_rules('imdbreview', 'IMdb Review', 'required');
			$this->form_validation->set_rules('pukksreview', 'Pukks Review', 'required');
			if($this->form_validation->run()=== FALSE){
				$this->render('dashboard/new_show_view');
			}
			else
			{
				$this->TV_shows_model->post_show_review();
$this->render('dashboard/index_view');
			}
		}
	}