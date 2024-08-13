<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_education_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'education_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'education' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('education_id', true);
        $this->forge->createTable('education', true, ['ENGINE' => 'MyISAM']);
    }

    public function down()
    {
        $this->forge->dropTable('education', true);
    }
}
