<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_matrimonial_table extends CI_Migration
{
    public function up()
    {
        $this->forge->addField([
            'matrimonial_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'user_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'dob' => [
                'type' => 'DATETIME',
            ],
            'job_occupation' => [
                'type' => 'TEXT',
            ],
            'images' => [
                'type' => 'TEXT',
            ],
            'height' => [
                'type' => 'TEXT',
            ],
            'weight' => [
                'type' => 'TEXT',
            ],
            'mother_tongue' => [
                'type' => 'TEXT',
            ],
            'gotram' => [
                'type' => 'TEXT',
            ],
            'zodiac' => [
                'type' => 'TEXT',
            ],
            'education' => [
                'type' => 'TEXT',
            ],
            'salary' => [
                'type' => 'TEXT',
            ],
            'gender' => [
                'type' => 'TEXT',
            ],
            'description' => [
                'type' => 'TEXT',
            ],
            'flag' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default' =>1,
            ],
            'flag_admin' => [
                'type'       => 'INT',
                'constraint' => 11,
                'default' =>0,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'default' => 'CURRENT_TIMESTAMP',
            ],
            'updated_at' => [
                'type' => 'DATETIME',
            ],
        ]);

        $this->forge->addKey('matrimonial_id', true);
        $this->forge->createTable('matrimonial');
    }

    public function down()
    {
        $this->forge->dropTable('matrimonial');
    }
}
