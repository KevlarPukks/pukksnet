<?php
	/**
	 * Created by PhpStorm.
	 * User: sdbur
	 * Date: 30/06/2018
	 * Time: 17:26:24 PM
	 */
	
	class TV_shows_model extends CI_Model
	{
		public function __construct(){
			$this->load->database();
		}
		public function get_shows($show = FALSE)
		{
			if($show === FALSE)
			{
				$query = $this->db->get('shows');
				return $query->result_array();
			}
			$query = $this->db->get_where('shows',array('title'=>$show));
			return $query->row_array();
		}
	}