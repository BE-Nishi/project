<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Main_page extends CI_Controller{
    public function index()
	{
        $this->load->model('Contact_model');
        $this->load->view('partials/_header');
        $this->load->view('homepage/hero');
        $this->load->view('homepage/service');
        $this->load->view('homepage/subscribe');
        $this->load->view('homepage/logo');
        $this->load->view('homepage/prompbox');
        $this->load->view('homepage/testimonial');
        $this->load->view('homepage/video');
        $this->load->view('homepage/blog');

        // set form_validations
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        // $this->form_validation->set_rules('subject', 'Subject', 'required');
        // $this->form_validation->set_rules('message', 'Message', 'required');
       
        if($this->form_validation->run()==false){
            $this->load->view('homepage/contact');
        }
        
        $this->load->view('partials/_footer');
    }

    public function data_send_to_database()
    
    {

        $this->load->model('Contact_model');
       $formarray = array();
       $formarray['Name'] = $this->input->post('name');
       $formarray['Email'] =$this->input->post('email');
       $formarray['Subject'] =$this->input->post('subject');
       $formarray['Message'] =$this->input->post('message');
       
       $this->Contact_model->contact($formarray);
        $from = $this->input->post('email');
        $to = "nishikale2305@gmail.com";
        $subject = $this->input->post('subject');
        $emailContent =$this->input->post('message');
        $this->load->library('email');

        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);

        $this->email->message($emailContent);
        $this->email->set_newline('\r\n');
        $this->email->send();

        // $this->session->set_flashdata('msg', "Email send successfyully");
        // $this->session->set_flashdata('msg_class', "alert-success");
        // return redirect(base_url());
        if(!$this->email->send()){
            show_error($this->email->print_debugger());
            // echo "mail sent successfully";
            redirect(base_url().'/');
        }
        else{
            echo "Your mail has been sent";
            return redirect(base_url());
        }
    }
  
}

?>