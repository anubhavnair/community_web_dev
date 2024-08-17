<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MatriMonialRegistrationModel extends CI_Model
{
    public function insert_matrimonial($formArray)
    {
        $matrimonialData = [
            // 'user_id' => $formArray['user_id'],
            'dob' => $formArray['dob'],
            'job_occupation' => $formArray['job_occupation'],
            'images' => $formArray['images'],
            'height' => $formArray['height'],
            'weight' => $formArray['weight'],
            'mother_tongue_id' => $formArray['mother_tongue'],
            'gotram' => $formArray['gotram'],
            'zodiac' => $formArray['zodiac'],
            'education_id' => $formArray['education'],
            'salary' => $formArray['salary'],
            'gender' => $formArray['gender'],
            'description' => $formArray['description'],
            'user_id' => $this->session->userdata('login'),

            // 'flag' => $formArray['flag'],
            // 'flag_admin' => $formArray['flag_admin'],
            // 'created_at' => NOW(),
        ];

        $q = $this->db->insert('matrimonial', $matrimonialData);
        if ($q) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllMatrimonialData()
    {
        $this->db->select('*');
        $this->db->from('matrimonial');
        $this->db->order_by('matrimonial_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getMatrimonialDataById($id)
    {
        try {
            // Select necessary fields
            $this->db->select('matrimonial.*, 
                (YEAR(CURDATE()) - YEAR(DATE(dob))) -   
                (DATE_FORMAT(CURDATE(), "%m-%d") < DATE_FORMAT(DATE(dob), "%m-%d")) AS age,
                user_registration.*, state.*, city.*, mother_tongue.mother_tongue, education.education');

            // Define the main table and join related tables
            $this->db->from('matrimonial');
            $this->db->join('user_registration', 'matrimonial.user_id = user_registration.uid', 'left');
            $this->db->join('state', 'user_registration.user_state = state.state_id', 'left');
            $this->db->join('city', 'user_registration.user_city = city.city_id', 'left');
            $this->db->join('mother_tongue', 'matrimonial.mother_tongue_id = mother_tongue.mother_tongue_id', 'left');
            $this->db->join('education', 'matrimonial.education_id = education.education_id', 'left');
            $this->db->join('employee_in', 'matrimonial.employee_in_id = employee_in.employee_in_id', 'left');

            // Apply the filter
            $this->db->where('matrimonial.user_id', $id);

            // Execute the query
            $query = $this->db->get();

            // Return a single row if expecting one result
            return $query->row_array();
        } catch (Exception $e) {
            log_message('error', 'Error in getMatrimonialDataById: ' . $e->getMessage());
            throw $e;
        }
    }

    public function get_matches($gender, $from_age, $to_age, $limit = 10, $offset = 0)
    {
        $this->load->library('pagination');
        $user_id = $this->session->userdata('login');


        $this->db->select('matrimonial.*, 
        (YEAR(CURDATE()) - YEAR(DATE(dob))) -   
        (DATE_FORMAT(CURDATE(), "%m-%d") < DATE_FORMAT(DATE(dob), "%m-%d")) AS age,
        user_registration.*,mother_tongue,education.education', false);

        $this->db->from('matrimonial');
        $this->db->join('user_registration', 'matrimonial.user_id = user_registration.uid', 'left'); // Join user_registration table
        $this->db->join('mother_tongue', 'matrimonial.mother_tongue_id = mother_tongue.mother_tongue_id', 'left');
        $this->db->join('education', 'matrimonial.education_id = education.education_id', 'left');

        $this->db->where('matrimonial.gender', $gender);
        $this->db->where('flag!=', 0);
        $this->db->where('flag_admin!=', 0);
        $this->db->where('user_registration.uid!=', $user_id);
        $this->db->having('age >=', $from_age);
        $this->db->having('age <=', $to_age);

        // Set limit and offset for pagination
        $this->db->limit($limit, $offset);

        $query = $this->db->get();
        return $query->result();
    }

    public function filter_members($criteria)
    {
        $user_id = $this->session->userdata('login');

        try {
            $this->db->select('matrimonial.*, 
                (YEAR(CURDATE()) - YEAR(DATE(dob))) -   
                (DATE_FORMAT(CURDATE(), "%m-%d") < DATE_FORMAT(DATE(dob), "%m-%d")) AS age,
                user_registration.*, state.*, city.*, mother_tongue.mother_tongue,education.education');

            $this->db->from('matrimonial');
            $this->db->join('user_registration', 'matrimonial.user_id = user_registration.uid', 'left');
            $this->db->join('state', 'user_registration.user_state = state.state_id', 'left');
            $this->db->join('city', 'user_registration.user_city = city.city_id', 'left');
            $this->db->join('mother_tongue', 'matrimonial.mother_tongue_id = mother_tongue.mother_tongue_id', 'left');
            $this->db->join('education', 'matrimonial.education_id = education.education_id', 'left');
            $this->db->join('employee_in', 'matrimonial.employee_in_id = employee_in.employee_in_id', 'left');
            // $this->db->join('complextion', 'matrimonial.complextion_id = complextion.complextion_id', 'left');
            $this->db->where('flag!=', 0);
            $this->db->where('flag_admin!=', 0);
            $this->db->where('user_registration.uid!=', $user_id);

            if (!empty($criteria['gender'])) {
                $this->db->where('matrimonial.gender', $criteria['gender']); // Added table prefix for clarity
            }
            if (!empty($criteria['from_age']) && !empty($criteria['to_age'])) {
                $this->db->where('TIMESTAMPDIFF(YEAR, dob, CURDATE()) >=', $criteria['from_age']);
                $this->db->where('TIMESTAMPDIFF(YEAR, dob, CURDATE()) <=', $criteria['to_age']);
            }
            if (isset($criteria['from_height']) && isset($criteria['to_height'])) {
                $this->db->where('matrimonial.height >=', $criteria['from_height']); // Added table prefix for clarity
                $this->db->where('matrimonial.height <=', $criteria['to_height']); // Added table prefix for clarity
            }
            if (!empty($criteria['state_ids'])) {
                $this->db->where_in('user_registration.user_state', $criteria['state_ids']);
            }
            if (!empty($criteria['city_ids'])) {
                $this->db->where_in('user_registration.user_city', $criteria['city_ids']);
            }
            if (!empty($criteria['motherTongue_ids'])) {
                $this->db->where_in('matrimonial.mother_tongue_id', $criteria['motherTongue_ids']);
            }
            if (!empty($criteria['Education_ids'])) {
                $this->db->where_in('matrimonial.education_id', $criteria['Education_ids']);
            }
            if (!empty($criteria['EmployeeIn_ids'])) {
                $this->db->where_in('matrimonial.employee_in_id', $criteria['EmployeeIn_ids']);
            }
            // if ($criteria['photo_search']) {
            //     $this->db->where('matrimonial.images IS NOT NULL AND matrimonial.images !=', '');
            // }
            // if (!empty($criteria['Complexion_ids'])) {
            //     $this->db->where_in('matrimonial.complexion_id', $criteria['Complexion_ids']);
            // }

            $query = $this->db->get();

            // Log the SQL query for debugging
            log_message('debug', 'SQL Query: ' . $this->db->last_query());

            return $query->result();
        } catch (Exception $e) {
            log_message('error', 'Error in filter_members: ' . $e->getMessage());
            throw $e;
        }
    }

    public function check_request_status($matrimonial_id)
    {
        $user_id = $this->session->userdata('login');
        // Query the database for the request status
        $this->db->select('status');
        $this->db->from('matrimonial_request');
        $this->db->where('user_id', $user_id);
        $this->db->where('requested_id', $matrimonial_id);

        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->status;
        } else {
            return null; // No request found
        }
    }

    public function saveMessage($data)
    {
        $this->db->insert('matrimonial_chat', $data);
        return $this->db->insert_id();
    }

    public function getMessages($receiver_id)
    {
        $limit = 50;
        $user_id = $this->session->userdata('login');

        $this->db->order_by('send_time', 'DESC');

        // Combine conditions for both cases
        $this->db->group_start();
        $this->db->where('sender_id', $user_id);
        $this->db->where('receiver_id', $receiver_id);
        $this->db->group_end();

        $this->db->or_group_start();
        $this->db->where('sender_id', $receiver_id);
        $this->db->where('receiver_id', $user_id);
        $this->db->group_end();

        $this->db->limit($limit);

        $query = $this->db->get('matrimonial_chat');

        return $query->result();
    }
    public function checkRequestStatus($user_id, $requested_id)
    {
        $this->db->where('user_id', $user_id);
        $this->db->where('requested_id', $requested_id);

        $query = $this->db->get('matrimonial_request');
        return $query->row_array();
    }

    public function createRequest($data)
    {
        $this->db->insert('matrimonial_request', $data);
        return $this->db->insert_id(); // Return the ID of the newly inserted request
    }

    public function isRegistered($user_id)
    {
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('matrimonial');
        return $query->num_rows() > 0; // Return true if the user is registered, false otherwise
    }


}
?>