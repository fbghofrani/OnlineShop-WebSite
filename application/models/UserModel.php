<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Insert user data into the database
    public function insertUser($data) {
        // Insert the data into the 'users' table
        // Make sure 'users' table exists with the appropriate structure
        $this->db->insert('users', $data);  // 'users' is your table name
        
        // Check if the insert was successful
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
