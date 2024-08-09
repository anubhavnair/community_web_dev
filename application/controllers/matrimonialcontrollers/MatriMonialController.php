<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * @property CI_Input $input
 * @property MatriMonialRegistrationModel $matrimonialmodel
 * @property CI_Upload $upload
 * @property CI_Session $session
 * @property CI_Form_validation $form_validation
 */

class MatrimonialController extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('matrimonial_views/matrimonial_form');
        $this->load->view('footer');
    }

    public function submit_form()
    {
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('MatriMonialRegistrationModel');
    
        // Set validation rules
        $this->form_validation->set_rules('dob', 'Date of Birth', 'required');
        $this->form_validation->set_rules('job_occupation', 'Job Occupation', 'required');
        $this->form_validation->set_rules('height', 'Height', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_rules('mother_tongue', 'Mother Tongue', 'required');
        $this->form_validation->set_rules('gotram', 'Gotram', 'required');
        $this->form_validation->set_rules('zodiac', 'Zodiac', 'required');
        $this->form_validation->set_rules('education', 'Education', 'required');
        $this->form_validation->set_rules('salary', 'Salary', 'required');
        $this->form_validation->set_rules('gender', 'Gender', 'required');
        $this->form_validation->set_rules('description', 'Description', 'required');
    
        if ($this->form_validation->run() == FALSE) {
            $this->index();
            return;
        }
    
        $formArray = $this->input->post();
    
        // File upload configuration
        $uploadPath = './uploads/matrimonial_img/user_images';
    
        // Check if directory exists
        if (!is_dir($uploadPath)) {
            if (!mkdir($uploadPath, 0755, true)) {
                $this->session->set_flashdata('error', 'Failed to create directory: ' . realpath($uploadPath));
                $this->load->view('header');
                $this->load->view('matrimonial_views/matrimonial_form');
                $this->load->view('footer');
                return;
            }
        }
    
        // Set upload configuration
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = '2048'; // 2MB
        $config['file_name'] = time() . '_' . $_FILES['images']['name'];
    
        $this->upload->initialize($config);
    
        // Attempt to upload file
        if ($this->upload->do_upload('images')) {
            $uploadData = $this->upload->data();
            $formArray['images'] = $uploadData['file_name'];
        } else {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error', 'Upload error : ' . $error);
            $this->load->view('header');
            $this->load->view('matrimonial_views/matrimonial_form');
            $this->load->view('footer');
            return;
        }
    
        // Insert data into the database
        $inserted = $this->MatriMonialRegistrationModel->insert_matrimonial($formArray);
    
        if ($inserted) {
            $this->session->set_flashdata('success', 'Registration successful.');
        } else {
            $this->session->set_flashdata('error', 'Registration failed. Please try again.');
        }
    
        $this->load->view('header');
        $this->load->view('matrimonial_views/matrimonial_form');
        $this->load->view('footer');
    }
    
    public function matrimonial(){
        $this->load->view('header');
        $this->load->view('matrimonial_views/matrimonial_link.php');
        $this->load->view('navbar');
        $this->load->view('matrimonial_views/matrimonial_section');
        $this->load->view('footer');
        $this->load->view('matrimonial_views/matrimonial_script');

    }
}
?>