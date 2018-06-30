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
	}