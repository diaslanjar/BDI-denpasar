<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pegawai extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" =>"INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nama" => [
                "type" =>"VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "jenis_kelamin" => [
                "type" =>"ENUM",
                "constraint" => ["L", "P"],
                "null" => true
            ],
            "alamat" => [
                "type" =>"VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "telpon" => [
                "type" =>"VARCHAR",
                "constraint" => 15,
                "null" => false
            ],
            "email" => [
                "type" =>"VARCHAR",
                "constraint" => 100,
                "null" => false
            ],

        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("pegawai", true);

    }

    public function down()
    {
        $this->forge->dropTable("pegawai");
    }
}
