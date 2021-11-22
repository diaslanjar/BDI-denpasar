<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Paket extends Migration
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
			'nama_paket'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'harga_paket'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'kota_wisata'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
			'fasilitas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '100'
			],
		]);
        $this->forge->addKey('id', TRUE);
    
        $this->forge->createTable('paket', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('paket');
    }
}
