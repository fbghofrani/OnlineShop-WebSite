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

    public function get_user_by_id($id) {
        $query = $this->db->get_where('users', ['id' => $id]);
        return $query->row_array(); // Return a single user's data as an array
    }
    
    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data); // Update the user's information
    }
    
}
