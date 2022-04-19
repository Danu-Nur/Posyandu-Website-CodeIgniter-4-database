<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Uploads extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'ID_ARTIKEL'            => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			],
			'JUDUL'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'FOTO_ARTIKEL'    => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'ISI_ARTIKEL'    => [
				'type'           => 'TEXT',
				'constraint'     => '65535',
			],
		]);
		$this->forge->addKey('ID_ARTIKEL', TRUE);
		$this->forge->createTable('artikel');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
