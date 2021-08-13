<?php

class Jobvacancy extends CI_Controller
{
	public function addjob()
	{
		$this->load->library('form_validation');
		if ($this->input->method() === "post") {
			$data["job"] = $this->input->post();

			$rules = [
				[
					'field' => 'name',
					'label' => 'Name',
					'rules' => ''
				],
				[
					'field' => 'job_image_url',
					'label' => 'Image URL',
					'rules' => 'valid_url'
				],
				[
					'field' => 'job_url',
					'label' => 'Job URL',
					'rules' => 'valid_url'
				],
			];

			$this->form_validation->set_rules($rules);
			if ($this->form_validation->run() == FALSE) {
				return $this->load->view('add_job_form');
			}

			// di sini biasanya dilakukan penyimpanan ke database

			return $this->load->view("list_job", $data);
		}

		$this->load->view('add_job_form');
	}
}
