<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Create_matrimonial_request_table extends CI_Migration {

    public function up()
    {
        $this->dbforge->add_field(array(
            'matrimonial_request_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'user_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
            ),
            'requested_id' => array(
                'type' => 'INT',
                'unsigned' => TRUE,
            ),
            'request_status' => array(
                'type' => 'INT',
                'default' => 0,
            ),
        ));
        $this->dbforge->add_key('matrimonial_request_id', TRUE);
        $this->dbforge->create_table('matrimonial_request');
    }

    public function down()
    {
        $this->dbforge->drop_table('matrimonial_request');
    }
}
