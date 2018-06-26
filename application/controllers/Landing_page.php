<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LandingPage
 *
 * @author sdbur
 */
class Landing_page extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Pukks.net';
        $this->load->view('mdbheader', $data);
        $this->load->view('landing_page');
        $this->load->view('footer');
    }

}
