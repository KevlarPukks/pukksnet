<?php
	/**
	 * Created by PhpStorm.
	 * User: sdbur
	 * Date: 30/06/2018
	 * Time: 17:31:12 PM
	 */
	
	class TV_shows extends MY_Controller
	{
		public function __construct()
		{
			parent::__construct();
			$this->load->model('TV_shows_model');
			$this->load->helper('url_helper');
		}
		public function index(){
			$this->data['shows'] = $this->TV_shows_model->get_shows();
			$this->data['page_title'] = 'TV Shows';
			$this->data['page_description'] = 'Here are some of the top TV show/series reviews by Pukks.net';
			$this->render('tv_shows/index_view');
		}
		public function show($show = NULL){
			$this->data['show'] = $this->TV_shows_model->get_shows($show);
		if(empty($this->data['show'])){
				show_404();
			}
			$this->data['shows'] = $this->TV_shows_model->get_shows();
			$this->data['page_title'] = $this->data['show']['title'];
			$this->data['page_description'] = $this->data['show']['genre'];
			$this->render('tv_shows/tv_show_view');
	
		}
	}