<?php defined('BASEPATH') or exit('NO ACCESS');

class Migration_initialize extends CI_Migration
{
	public function up()
	{
	    $this->dbforge->add_field(array(
            'session_id' => array(
                'type' => 'VARCHAR',
                'constraint' => 40,
                'default' => '0',
            ),
            'ip_address' => array(
                'type' => 'VARCHAR',
                'constraint' => 45,
                'default' => '0'
            ),
            'user_agent' => array(
                'type' => 'VARCHAR',
                'constraint' => 120
            ),
            'last_activity' => array(
                'type' => 'int',
                'constraint' => 10,
                'unsigned' => TRUE,
                'default' => '0'
            ),
            'user_data' => array(
                'type' => 'text'
            )
        ));
        $this->dbforge->add_key('session_id', TRUE);
        $this->dbforge->add_key('last_activity');

        $this->dbforge->create_table('ci_sessions');

	}

    public function down()
    {
        $this->dbforge->drop_table('ci_sessions');
    }
}
