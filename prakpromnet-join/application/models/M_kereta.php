<?php
	class M_kereta extends CI_Model {

		public function __construct()
		{
		    parent::__construct();
		    //Codeigniter : Write Less Do More
		}
 
		  public function leftJoin()
		  {
		      $this->db->select('lokomotif.nama AS Nama, lokomotif.kd_kereta AS KodeKereta, kursi.kd_gerbong AS KodeGerbong, kursi.kd_kursi as KodeKursi');
		      $this->db->from('lokomotif');
		      $this->db->join('kursi', 'lokomotif.kd_kereta = kursi.kd_kereta','Left');
		   
		      $query = $this->db->get();
		      return $query->result();
		  }

		  public function rightJoin()
		  {
		      $this->db->select('gerbong.nama AS Nama, gerbong.kd_kereta AS KodeKereta, kursi.kd_gerbong AS KodeGerbong, kursi.kd_kursi as KodeKursi');
		      $this->db->from('gerbong');
		      $this->db->join('kursi', 'gerbong.kd_gerbong = kursi.kd_gerbong','Right');
		   
		      $query = $this->db->get();
		      return $query->result();
		  }

		  public function innerJoin()
		  {
		  	$this->db->select('lokomotif.nama AS NamaKereta,kursi.kd_kursi AS KodeKursi, gerbong.nama AS NamaGerbong, kursi.kd_gerbong AS KodeGerbong, kursi.kd_kereta AS KodeKereta' );
			$this->db->from('lokomotif');
			$this->db->join('kursi','kursi.kd_kereta=lokomotif.kd_kereta','inner');		
			$this->db->join('gerbong','gerbong.kd_gerbong=kursi.kd_gerbong','inner');

			  $query = $this->db->get();
		      return $query->result();
		  }

		  public function getLoko()
		  {

		  	$this->db->select('kd_kereta AS KodeKereta, nama AS NamaKereta');
			$this->db->from("lokomotif");

			$hasil = $this->db->get();
			return $hasil->result();
		  }

		   public function getGerbong()
		  {
		  	$this->db->select('kd_gerbong AS KodeGerbong, kd_kereta AS KodeKereta, nama AS NamaGerbong');
			$this->db->from("gerbong");

			$hasil = $this->db->get();
			return $hasil->result();
		  }

		  public function getKursi()
		  {
		  	$this->db->select('kd_kursi AS KodeKursi, kd_gerbong AS KodeGerbong, kd_kereta AS KodeKereta');
			$this->db->from("kursi");

			$hasil = $this->db->get();
			return $hasil->result();
		  }
	}
?>