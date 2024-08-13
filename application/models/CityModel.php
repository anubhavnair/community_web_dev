<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CityModel extends CI_Model
{

    public function getAllCities()
    {
        $this->db->select('*');
        $this->db->from('city');
        $this->db->order_by('city_id', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getCitiesByState($state_id)
    {
        $this->db->select('*');
        $this->db->from("city");
        $this->db->where('state_id', $state_id);
        // $this->db->order_by('city_id', 'DESC'); // Uncomment if needed
        $query = $this->db->get();
        return $query->result_array();
    }
}
