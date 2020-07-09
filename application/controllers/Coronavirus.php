<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Coronavirus extends CI_Controller {

    public function index()
    {
        $this->load->view('layout/header');
       // $this->load->view('layout/ajaxpagination');
        $this->load->view('cases');
        $this->load->view('layout/footer');
    }
    public function caseupdate()
    {
        $this->load->view('layout/header');
        //$this->load->view('layout/ajaxpagination');
        $this->load->view('caseupdate');
        $this->load->view('layout/footer');
       
    }
    public function viewcountrycase()
    {
        $this->load->view('layout/header');
        $this->load->view('viewcountrycase');
        $this->load->view('layout/footer');
       
    }
    public function about()
    {
        $this->load->view('layout/header');
        $this->load->view('about');
        $this->load->view('layout/footer');
       
    }
    public function symptoms()
    {
        $this->load->view('layout/header');
        $this->load->view('symptoms');
        $this->load->view('layout/footer');
       
    }
    public function prevention()
    {
        $this->load->view('layout/header');
        $this->load->view('prevention');
        $this->load->view('layout/footer');
       
    }
    
    
}

/* End of file Coronavirus.php */
