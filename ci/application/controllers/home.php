<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

	public function index(){
		$data['title'] = 'I am the title';
		$data['name'] =array(
			'wangwu',
			'maliu',
			'xiaosi'

			);

        $this->load->helper('url');
        //redirect('home/hh');//跳转
        echo site_url();
        echo '<hr />';
        echo base_url();
        echo '<hr />';

		$this->load->view('head.html', $data);
		//$this->load->view('index/head');
		//$this->load->view('index/head');

	}

	public function hh(){

		echo 'hello sushuangpeng';

	}

}