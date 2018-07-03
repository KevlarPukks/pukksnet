<?php
	/**
	 * Created by PhpStorm.
	 * User: sdbur
	 * Date: 03/07/2018
	 * Time: 03:12:42 AM
	 */
	
	class Contact extends MY_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->library('email');
			$this->load->library('form_validation');
		}
		public function index(){
			$this->data['page_title'] = 'Contact';
			$this->data['page_description'] = 'Feel free to leave a message about anything ';
			$this->render('contact/index_view');
		}
		
		public function send(){
			$this->load->library('form_validation');
			// field name, error message, validation rules
			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('contact_no', 'Phone', 'trim|required');
			$this->form_validation->set_rules('message', 'Messages', 'trim|required');
			
			if($this->form_validation->run() == FALSE) {
				$this->index();
			}else {
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$contact_no = $this->input->post('contact_no');
				$comment = $this->input->post('comment');
				if(!empty($email)) {
					// send mail
					$config = array (
						'mailtype' => 'html',
						'charset'  => 'utf-8',
						'priority' => '1'
					);
					$message='';
					$bodyMsg = '<p style="font-size:14px;font-weight:normal;margin-bottom:10px;margin-top:0;">'.$comment.'</p>';
					$delimeter = $name."<br>".$contact_no;
					$dataMail = array('topMsg'=>'Hi Team', 'bodyMsg'=>$bodyMsg, 'thanksMsg'=>'Best regards,', 'delimeter'=> $delimeter);
					$this->email->initialize($config);
					$this->email->from($email, $name);
					$this->email->to('sdburke2006@yahoo.co.uk');
					$this->email->subject('Contact Form');
					$message = $this->load->view('mailTemplate/contact_form_view', $dataMail, TRUE);
					$this->email->message($message);
					$this->email->send();
					
					// confirm mail
					$bodyMsg = '<p style="font-size:14px;font-weight:normal;margin-bottom:10px;margin-top:0;">Thank you for contacting us.</p>';
					$dataMail = array('topMsg'=>'Hi '.$name, 'bodyMsg'=>$bodyMsg, 'thanksMsg'=>'Best regards,', 'delimeter'=> 'Team TechArise');
					
					$this->email->initialize($config);
					$this->email->from(TO_MAIL, FROM_TEXT);
					$this->email->to($email);
					$this->email->subject('Contact Form Confimation');
					$message = $this->load->view('mailTemplate/contact_form_view', $dataMail, TRUE);
					$this->email->message($message);
					$this->email->send();
				}
				$this->session->set_flashdata('msg', 'Thank you for your message. It has been sent.');
				redirect('/');
			}
				}
	

	}