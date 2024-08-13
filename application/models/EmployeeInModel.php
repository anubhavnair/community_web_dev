<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeInModel extends Model
{
    public function getAllEmployeeIn()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('employee_in_id', 'DESC');
        $query = $this->db->get();
        return $query->getResultArray();
    }
}
