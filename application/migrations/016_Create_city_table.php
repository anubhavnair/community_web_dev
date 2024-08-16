<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_city_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'city_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'city' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'state_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('city_id', true);
        $this->forge->createTable('city', true, ['ENGINE' => 'MyISAM']);
    }

    public function down()
    {
        $this->forge->dropTable('city', true);
    }
}
