<?php
class Peoples extends CI_Controller {
    
    public function index(){
        
        $data['judul'] = 'List Of Peoples';
        $this->load->model('Peoples_model', 'peoples');
        
        // PAGINATION
        $this->load->library('pagination');

        //CONFIG
      
        $config['total_rows'] = $this->peoples->countAllPeoples();
        $config['per_page'] = 8;


       
                

        //INITIALIZE
        $this->pagination->initialize($config);
        
        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start']);
      
        
        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    } 
} 