<?php defined('BASEPATH') OR exit('No direct script access allowed');

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
class Home extends MY_Controller
{

    public function index()
    {
        $data['title'] = 'home';
	    $this->data['page_title'] = 'Home';
	    $this->data['page_description'] = 'The Home Page';
	    $this->data['before_closing_head'] = '';
	    $this->data['before_closing_body'] = '';
$this->render('home/index_view');
    }

}
