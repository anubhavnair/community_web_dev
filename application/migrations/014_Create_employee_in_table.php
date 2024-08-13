<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_employee_in_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'employee_in_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'employee_in' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('employee_in_id', true);
        $this->forge->createTable('employee_in', true, ['ENGINE' => 'MyISAM']);
    }

    public function down()
    {
        $this->forge->dropTable('employee_in', true);
    }
}
