<?php

namespace App\Models;

use CodeIgniter\Model;

class CityModel extends Model
{

    public function getAllCities()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('city_id', 'DESC');
        $query = $this->db->get();
        return $query->getResultArray();
    }

    public function getCitiesByState($state_id)
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where('state_id', $state_id);
        // $this->db->order_by('city_id', 'DESC');
        $query = $this->db->get();
        return $query->getResultArray();
    }
}
