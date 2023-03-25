<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends MY_Controller 
{
	private $id;

	public function __construct()
	{
		parent::__construct();
		$is_login	= $this->session->userdata('is_login');
		$this->id	= $this->session->userdata('id');

		if (! $is_login) {
			redirect(base_url());
			return;
		}
	}

	public function index()
	{
		$data['title']		= 'Kritik Dan Saran';
		$data['content']	= $this->komentar->select([
			'id', 'id_user', 'komentar',
		 	'image'
		])
		->get();
		$data['page']		= 'pages/komentar/index';

		$this->view($data);
	}

	public function add()
	{
		$input				= (object) $this->input->post(null, true);

		$data = [
			'id_user'	=> $input->id_user,
			'image'		=> $input->image,
			'komentar'	=> $input->komentar,
		];

		if ($this->komentar->create($data)) {
			$this->session->set_flashdata('success', 'Komentar berhasil ditambahkan!');
		} else {
			$this->session->set_flashdata('error', 'Oops! Terjadi kesalahan.');
		}

		redirect(base_url('/komentar'));
		
	}
}

/* End of file Myorder.php */
