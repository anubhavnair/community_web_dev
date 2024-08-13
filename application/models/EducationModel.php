<?php
namespace App\Models;

use CodeIgniter\Model;

class EducationModel extends Model
{
    public function getAllEducation()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->order_by('education_id', 'DESC');
        $query = $this->db->get();
        return $query->getResultArray();
    }
}
