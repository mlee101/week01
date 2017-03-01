<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {

	public function getAll()
	{
		$query = $this->db->query('SELECT name, title, email FROM member');
        return $query->result();
        
        /*
		foreach ($query->result() as $row)
		{
		    echo $row->title;
		    echo $row->name;
		    echo $row->email;
		}

		echo 'Total Results: ' . $query->num_rows();
		*/
	}

	
}