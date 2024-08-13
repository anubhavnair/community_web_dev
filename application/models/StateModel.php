<?php

namespace App\Models;

use CodeIgniter\Model;

class StateModel extends Model
{
    public function getAllState()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('state_id', 'DESC');
        $query = $this->db->get();
        return $query->getResultArray();
    }
}
