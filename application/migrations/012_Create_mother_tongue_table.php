<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_mother_tongue_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'mother_tongue_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'mother_tongue' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('mother_tongue_id', true);
        $this->forge->createTable('mother_tongue', true, ['ENGINE' => 'MyISAM']);
    }

    public function down()
    {
        $this->forge->dropTable('mother_tongue', true);
    }
}
