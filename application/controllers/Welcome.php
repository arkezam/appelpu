<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;
use Restserver\Libraries\REST_controller;
require APPPATH.'libraries/RestController.php';
require APPPATH.'libraries/Format.php';


class Welcome extends RestController {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Mmodel');	
	}
	public function index_get()
	{
		$this->load->view('welcome_message');
	}



	public function cont1_post()
	{

		$value = array(
			'idSede' => $this->input->post('idSede'),
			'nomSede' => $this->input->post('nomSede'),
		);
		$this->response($this->Mmodel->insertar2($value));
		// $data  = $this->input->post('something');
		
		// $a=$this->Mmodel->insertar($data);

		// $this->load->view('json',compact($a));

	}
	
	public function dni_post()
	{

		$value = array(
			'dni' => $this->input->post('dni'),
			'pass' => $this->input->post('pass'),
		);

		$this->response($this->Mmodel->getdni($value));

	}
	public function recibo_post()
	{

		$value = array(
			'recibo' => $this->input->post(''),
		);

		$this->response($this->Mmodel->getdni($value));

	}
	
	public function cont2_post()
	{
		$value = array(
			'nomUsuario' => $this->input->post('nomUsuario'),
			'pass' => $this->input->post('pass'),
		);
		
		$this->response($this->Mmodel->insertar($value));
		// $data  = $this->input->post('something');
		
		// $a=$this->Mmodel->insertar($data);

		// $this->load->view('json',compact($a));

	}
}
