<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_occupation_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'occupation_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'occupation' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('occupation_id', true);
        $this->forge->createTable('occupation', true, ['ENGINE' => 'MyISAM']);
    }

    public function down()
    {
        $this->forge->dropTable('occupation', true);
    }
}
