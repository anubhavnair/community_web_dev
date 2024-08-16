<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Create_complexion_table extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'complexion_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'complexion' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('complexion_id', true);
        $this->forge->createTable('complexion', true, ['ENGINE' => 'MyISAM']);
    }

    public function down()
    {
        $this->forge->dropTable('complexion', true);
    }
}
