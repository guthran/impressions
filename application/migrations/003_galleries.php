<?php defined('BASEPATH') or die('NO ACCESS');

class Migration_galleries extends CI_Migration
{

	public function up()
	{
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'int',
				'constraints' => 10,
				'auto_increment' => true
			),
			'owner_id' => array(
				'type' => 'int',
				'constraint' => 10,
			),
			'name' => array(
				'type' => 'text',
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
		$this->dbforge->add_key('owner_id');
		$this->dbforge->create_table('galleries');
		
		$this->dbforge->add_field(array(
			'id' => array(
				'type' => 'int',
				'constraint' => 10,
				'auto_increment' => true
			),
			'gallery_id' => array(
				'type' => 'int',
				'constraint' => 10
			),
			'user_id' => array(
				'type' => 'int',
				'constraint' => 10
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('gallery_id');
		$this->dbforge->add_key('user_id');
		$this->dbforge->create_table('visible_galleries');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('galleries');
		$this->dbforge->drop_table('visible_galleries');
	}

}
