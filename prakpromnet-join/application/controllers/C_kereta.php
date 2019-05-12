<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kereta extends CI_Controller {
	public function __construct()
	{
			parent::__construct();
			$this->load->model(array('m_kereta'));
	}	
	
	public function index()
	{
		$data['lokomotif'] = $this->m_kereta->getLoko();
		$data['gerbong'] = $this->m_kereta->getGerbong();
		$data['kursi'] = $this->m_kereta->getKursi();
		$this->load->view('awal', $data);
	}
	public function leftjoin()
	{
		$data['kereta'] = $this->m_kereta->leftJoin();
		$this->load->view('tampil', $data);
	}
	public function rightjoin()
	{
		$data['kereta'] = $this->m_kereta->rightJoin();
		$this->load->view('tampil', $data);
	}
	public function innerjoin()
	{
		$data['kereta'] = $this->m_kereta->innerJoin();
		$this->load->view('tampilInner', $data);

	}
}
