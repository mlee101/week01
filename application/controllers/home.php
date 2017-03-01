<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		echo "hello home";
			//$this->load->view('welcome_message');
	}

	public function getdata( )
	{
		$this->load->model('member');
		$rows = $this->member->getAll();

		foreach ($rows as $row)
		{
			//echo $row->id; echo '<br>';
			$data['title']=$row->title;
			$data['name']=$row->name;
			$data['email']=$row->email;
		    //echo $row->title; echo '<br>';
		    //echo $row->name; echo '<br>'; 
		    //echo $row->email; echo '<br>';
		    //echo '<br>';
		}

		$this->load->view('post', $data);
	}

}