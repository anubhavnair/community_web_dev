<?php

namespace App\Models;

use CodeIgniter\Model;

class ComplexionModel extends Model
{

    public function getAllComplexions()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('complexion_id', 'DESC');
        $query = $this->db->get();
        return $query->getResultArray();
    }
}
