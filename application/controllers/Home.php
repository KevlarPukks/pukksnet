<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author sdbur
 */
class Home extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'home';
        $this->load->view('mdbheader', $data);

        $this->load->view('footer');
    }

}
