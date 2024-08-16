<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_caste_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'caste_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'caste' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('caste_id', true);
        $this->forge->createTable('caste', true, ['ENGINE' => 'MyISAM', 'DEFAULT CHARSET' => 'utf8mb4', 'COLLATE' => 'utf8mb4_0900_ai_ci']);
    }

    public function down()
    {
        $this->forge->dropTable('caste', true);
    }
}
