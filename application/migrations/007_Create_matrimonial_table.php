<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class CreateMatrimonialTable extends CI_Migration
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
            'status' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
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
