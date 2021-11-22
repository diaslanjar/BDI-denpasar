<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusan extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 10,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama_jurusan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
		]);
        $this->forge->addKey('id', TRUE);
    
        $this->forge->createTable('jurusan', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jurusan');
    }
}
