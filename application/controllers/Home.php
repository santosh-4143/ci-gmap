<?php

class Home extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        //$this->load->library('googlemaps');
    }

    function index() {

        $all['place'] = $this->User_model->getplace();


        $this->load->view('home_content', $all);
    }

    function search() {
       // echo "jdjkdhjd";die;
        $data['place'] = $this->User_model->getplace();
       // print_r($data['place']);die;

        if (($this->input->post('search'))) {
            if($this->input->post('source')==""){
                $this->session->set_flashdata('message', 'Please select source.');
                redirect(base_url());
            }else if($this->input->post('destination')==""){
                $this->session->set_flashdata('message', 'Please select destination.');
                redirect(base_url());
            }else{           
            $data['source'] = $this->input->post('source');
            $data['destination'] = $this->input->post('destination');
            $data['date'] = $this->input->post('date');
            //echo $data['source'] . $data['destination']; die;
            $data['bus'] = $this->User_model->getbus($data['source'], $data['destination']);
            // print_r($data['bus']); die;
            }
        }
        
       
        //echo $this->input->post('source').$this->input->post('destination');die;
        $pos = $this->User_model->getmap($this->input->post('source'),$this->input->post('destination'));
        //print_r($pos);die;
        $source =  implode(",", $pos[0]);
        $desti = implode(",", $pos[1]);
        $config['center'] = 'kolkata';
        $config['zoom'] = '10';
        $config['directions'] = TRUE;
        $config['directionsStart'] = $source;
        $config['directionsEnd'] = $desti;
        $config['directionsDivID'] = 'directionsDiv';
        $this->googlemaps->initialize($config);
        $data['map'] = $this->googlemaps->create_map();
        $data['name']=$this->User_model->getname($this->input->post('source'),$this->input->post('destination'));
        

    

        $this->load->view('search', $data);
    }

}
