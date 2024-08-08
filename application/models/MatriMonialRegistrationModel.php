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
            'mother_tongue' => $formArray['mother_tongue'],
            'gotram' => $formArray['gotram'],
            'zodiac' => $formArray['zodiac'],
            'education' => $formArray['education'],
            'salary' => $formArray['salary'],
            'gender' => $formArray['gender'],
            'description' => $formArray['description'],
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
}
