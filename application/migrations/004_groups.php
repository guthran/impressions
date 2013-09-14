<?php defined('BASEPATH') or die('NO ACCESS');

class Migration_groups extends CI_Migration
{


	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'int',
				'constraint' => 10,
				'auto_increment' => true
			),
			'name' => array(
				'type' => 'varchar',
				'constraint' => 255
			),
			'owner_id' => array(
				'type' => 'int',
				'constraint' => 10
			),
			'is_public' => array(
				'type' => 'int',
				'constraint' => 1,
				'default' => 0
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
		$this->dbforge->add_key('name');
		$this->dbforge->create_table('groups');
		
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'int',
				'constraint' => 10,
				'auto_increment' => true
			),
			'user_id' => array(
				'type' => 'int',
				'constraint' => 10,
			),
			'group_id' => array(
				'type' => 'int',
				'constraint' => 10
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('user_id');
		$this->dbforge->add_key('group_id');
		$this->dbforge->create_table('user_groups');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('groups');
		$this->dbforge->drop_table('user_groups');
	
	}
}	
