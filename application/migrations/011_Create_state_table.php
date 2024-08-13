<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_state_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'state_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'state' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('state_id', true);
        $this->forge->createTable('state', true, ['ENGINE' => 'MyISAM']);
    }

    public function down()
    {
        $this->forge->dropTable('state', true);
    }
}
