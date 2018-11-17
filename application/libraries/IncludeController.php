<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );
	

	class IncludeController extends CI_Controller
	{
		
		protected $global = array();
		
		
		function loadThis()
		{
			$this->load->view('includes/header', $this->global);
			
		}
	}