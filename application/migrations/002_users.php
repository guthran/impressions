<?php defined('BASEPATH') or exit('NO ACCESS');

class Migration_users extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
            'id' => array(
                'type' => 'int',
                'constraint' => 10,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'username' => array(
                'type' => 'varchar',
                'constraint' => 255,
            ),
            'email' => array(
                'type' => 'varchar',
                'constraint' => 255
            ),
            'password' => array(
            	'type' => 'varchar',
            	'constraint' => 255
            ),
            'created_at' => array(
            	'type' => 'varchar',
            	'constraint' => 255
            ),
            'updated_at' => array(
            	'type' => 'varchar',
            	'constraint' => 255
            )
            
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('username');
        $this->dbforge->add_key('email');

        $this->dbforge->create_table('users');
        
        $this->dbforge->add_field(array(
        	'id' => array(
        		'type' => 'int',
        		'constraint' => 10,
        		'unsigned' => TRUE,
        		'auto_increment' => TRUE
        	),
        	'created_by' => array(
        		'type' => 'int',
        		'constraint' => 10,
        		'unsigned' => TRUE
        	),
        	'invitation' => array(
        		'type' => 'varchar',
        		'constraint' => 255,
        	)
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('invitation');
        $this->dbforge->create_table('invitations');

	}
	
	public function down()
	{
		$this->dbforge->drop_table('users');
		$this->dbforge->drop_table('invitations');
	}
}
