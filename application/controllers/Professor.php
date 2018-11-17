<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Professor extends CI_Controller {
		
		public function show_professor() {
			$this->load->view('list_professor');
		}
		
		public function detail_professor() {
			$this->load->view('detail_professor');
		}
		
		public function linkedin_professor() {
			$this->load->view('linkedin_professor');
		}
	}
	
?>