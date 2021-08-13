<?php

class Search extends CI_Controller
{
	public function index()
	{
		$data["keyword"] = $this->input->get("keyword");

		// do search and render result to view
		$this->load->view('search', $data);
	}
}
