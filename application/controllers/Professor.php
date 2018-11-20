<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Professor extends CI_Controller {
		
		public function show_professor() {
			$this->load->view('list_professor');
		}
		
		public function detail_professor_ramos() {
			$this->load->view('detail_professor_ramos');
		}
		
		public function detail_professor_ashton() {
			$this->load->view('detail_professor_ashton');
		}
		
		public function detail_professor_wang() {
			$this->load->view('detail_professor_wang');
		}
		
		public function detail_professor_quinn() {
			$this->load->view('detail_professor_quinn');
		}
		
		public function linkedin_professor() {
			$this->load->view('linkedin_professor');
		}
	}
	
?>