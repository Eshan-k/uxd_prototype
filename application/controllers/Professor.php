<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Professor extends CI_Controller {
		
		public function show_professor() {
			$this->load->view('list_professor');
		}
		
		/* ----working------ */
		public function detail_professor_ramos() {
			$this->load->view('detail_professor_ramos');
		}
		
		public function detail_professor_ashton() {
			$this->load->view('detail_professor_satou');
		}
		
		public function detail_professor_samantha() {
			$this->load->view('detail_professor_samantha');
		}
		
		public function detail_professor_greer() {
			$this->load->view('detail_professor_greer');
		}
		/* -------working------ */
		
		public function detail_professor_quinn() {
			$this->load->view('detail_professor_quinn');
		}
		
		public function linkedin_professor() {
			$this->load->view('linkedin_professor');
		}
	}
	
?>