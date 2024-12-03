<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the necessary model
        $this->load->model('UserModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    // public function register() {
    //     // Check if form is submitted via POST
    //     if ($this->input->post()) {
    //         // Form validation rules
    //         $this->form_validation->set_rules('full_name', 'Full Name', 'required');
    //         $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.Email]');
    //         $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
    //         $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

    //         if ($this->form_validation->run() == FALSE) {
    //             // Validation failed, reload the form with validation errors
    //             $this->load->view('register');
    //         } else {
    //             // Validation passed, prepare data for database
    //             $user_data = array(
    //                 'FullName' => $this->input->post('full_name'),
    //                 'Email' => $this->input->post('email'),
    //                 'Password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT) // Encrypt password
    //             );

    //             // Insert user into the database
    //             if ($this->UserModel->insertUser($user_data)) {
    //                 // Success: Set a flash message and redirect to login
    //                 $this->session->set_flashdata('message', 'Registration successful! Please log in.');
    //                 redirect('AuthController/login');
    //             } else {
    //                 // Failure: Set error flash message
    //                 $this->session->set_flashdata('error', 'There was an error with the registration. Please try again.');
    //                 redirect('AuthController/register');
    //             }
    //         }
    //     } else {
    //         // If no POST data, load the register page
    //         $this->load->view('register');
    //     }

    
    // }

    
    public function register() {
        // Check if form is submitted via POST
        if ($this->input->post()) {
            // Form validation rules
            $this->form_validation->set_rules('full_name', 'Full Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.Email]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

            if ($this->form_validation->run() == FALSE) {
                // Validation failed, reload the form with validation errors
                $this->load->view('register');
            } else {
                // Validation passed, prepare data for database
                $user_data = array(
                    'FullName' => $this->input->post('full_name'),
                    'Email' => $this->input->post('email'),
                    'Password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT) // Encrypt password
                );

                // // Insert user into the database
                // if ($this->UserModel->insertUser($user_data)) {
                //     // Success: Set a flash message and redirect to login
                //     $this->session->set_flashdata('message', 'Registration successful! Please log in.');
                //     redirect('AuthController/login');
                // } else {
                //     // Failure: Set error flash message
                //     $this->session->set_flashdata('error', 'There was an error with the registration. Please try again.');
                //     redirect('AuthController/register');
                // }
            }
        } else {
            // If no POST data, load the register page
            $this->load->view('register');
        }

    
    }

    
        


    public function regi() {
        // Your code for the login function
        $this->load->view('register');
    }

    public function login() {
        // Your code for the login function
        $this->load->view('login');
    }

}










// <?php
// class AuthController extends CI_Controller {

//     public function __construct() {
//         parent::__construct();
//         $this->load->library('session');  // Load session library
//         $this->load->model('UserModel');  // Load the model
//     }

//     public function register() {
//         // Check if form is submitted
//         if ($this->input->post()) {
//             // Collect form data
//             $full_name = $this->input->post('full_name');
//             $email = $this->input->post('email');
//             $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
//             $confirm_password = $this->input->post('confirm_password');

//             // Check if passwords match
//             if ($password === $confirm_password) {
//                 // Prepare data for insertion
//                 $data = array(
//                     'full_name' => $full_name,
//                     'email' => $email,
//                     'password' => $password
//                 );

//                 // Insert data using model
//                 if ($this->UserModel->insert_user($data)) {
//                     // Redirect or show success message
//                     $this->session->set_flashdata('message', 'Registration successful!');
//                     redirect('AuthController/login');
//                 } else {
//                     // Show error message if insertion failed
//                     $this->session->set_flashdata('error', 'Registration failed. Please try again.');
//                     redirect('AuthController/register');
//                 }
//             } else {
//                 // Passwords do not match
//                 $this->session->set_flashdata('error', 'Passwords do not match.');
//                 redirect('AuthController/register');
//             }
//         }

//         // Load the registration page
//         $this->load->view('register');
//     }
// }