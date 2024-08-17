<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_matrimonial_chat_table extends CI_Migration {

    public function up() {
        $this->dbforge->add_field(array(
            'matrimonial_chat_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'sender_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'receiver_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
            ),
            'message' => array(
                'type' => 'TEXT',
                'null' => FALSE,
            ),
            'send_time' => array(
                'type' => 'DATETIME',
                'null' => FALSE,
            ),
        ));
        
        $this->dbforge->add_key('matrimonial_chat_id', TRUE);
        $this->dbforge->create_table('matrimonial_chat');
    }

    public function down() {
        $this->dbforge->drop_table('matrimonial_chat');
    }
}
