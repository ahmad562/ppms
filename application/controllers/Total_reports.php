<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total_reports extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Total_reports_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu');
       $flag=1;
        $data['reports'] = $this->Total_reports_model->get_reports($flag);
        $this->load->view('total_reports/enviromental', $data);
        $this->load->view('footer');
    }
/////////////////////////////////////////////////////////////////
public function social() {
    $this->load->view('header');
    $this->load->view('menu');
   $flag=2;
    $data['reports'] = $this->Total_reports_model->get_reports($flag);
    $this->load->view('total_reports/social', $data);
    $this->load->view('footer');
}

public function mande() {
    $this->load->view('header');
    $this->load->view('menu');
   $flag=2;
    $data['reports'] = $this->Total_reports_model->get_reports($flag);
    $this->load->view('total_reports/mande', $data);
    $this->load->view('footer');
}

////////////////////////////////////////////////////////
   

    public function store() {
        extract($_POST);
        $this->load->helper('inflector');
        $this->load->library('upload');
        $config['upload_path'] = 'img/total_reports/';
       $config['file_name'] = underscore($_FILES["Pict_upload"]['name']);
       /// $config['file_name'] = url_title($_FILES["Pict_upload"]['name'], '_', TRUE);
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
		/////////////////////////////////////////
/*
        $config['upload_path'] = 'img/total_reports/';
        $config['file_name'] = url_title($_FILES["Pict_upload"]['name'], '_', TRUE); // Replace spaces with underscores
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';

*/


        ///////////////////////////////////////////
        if ($this->upload->do_upload("Pict_upload")) {

                $data = array(
                'title' => $this->input->post('title'),
                'period' => $this->input->post('period'),
                'file_attached' => $file_picture, // Save the file name in the database
                'flag_id' => $this->input->post('flag_id'),
                'type' => $this->input->post('type'),
                'period_type' => $this->input->post('period_type')
            );

            $report_id = $this->Total_reports_model->insert_report($data);
if($flag_id==1){
        redirect('total_reports/index');
}else if($flag_id==2){
    redirect('total_reports/social');
}else if($flag_id==3){
    redirect('total_reports/mande');
}
    
}
    }

    public function edit($report_id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data['report'] = $this->Total_reports_model->get_report($report_id);
        $this->load->view('total_reports/edit_enviromental', $data);
        $this->load->view('footer');
    }

    public function edit_social($report_id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data['report'] = $this->Total_reports_model->get_report($report_id);
        $this->load->view('total_reports/edit_social', $data);
        $this->load->view('footer');
    }
    public function edit_mande($report_id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data['report'] = $this->Total_reports_model->get_report($report_id);
        $this->load->view('total_reports/edit_mande', $data);
        $this->load->view('footer');
    }

    public function update($report_id) {
        extract($_POST);
       
        $this->load->library('upload');
        $config['upload_path'] = 'img/total_reports/';
        $config['file_name'] = $_FILES["Pict_upload"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
		
        if ($this->upload->do_upload("Pict_upload")) {


        $data = array(
            'title' => $this->input->post('title'),
            'period' => $this->input->post('period'),
            'file_attached' => $file_picture,
            'flag_id' => $this->input->post('flag_id'),
            'type' => $this->input->post('type'),
            'period_type' => $this->input->post('period_type')
        );

        $this->Total_reports_model->update_report($report_id, $data);
        redirect('total_reports/index');

    }else{

        $data = array(
            'title' => $this->input->post('title'),
            'period' => $this->input->post('period'),
            'flag_id' => $this->input->post('flag_id'),
            'type' => $this->input->post('type'),
            'period_type' => $this->input->post('period_type')
        );

        $this->Total_reports_model->update_report($report_id, $data);


    }
    if($flag_id==1){
        redirect('total_reports/index');
}else if($flag_id==2){
    redirect('total_reports/social');
}else if($flag_id==3){
    redirect('total_reports/mande');
}

    }

    public function delete($report_id) {
        $this->Total_reports_model->delete_report($report_id);
        redirect('total_reports/index');
    }








}
