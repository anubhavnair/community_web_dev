<?php

namespace App\Models;

use CodeIgniter\Model;

class MotherTongueModel extends Model
{
    public function getAllMotherTongues()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('mother_tongue_id', 'DESC');
        $query = $this->db->get();
        return $query->getResultArray();
    }
}
