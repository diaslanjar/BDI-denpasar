<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Unit extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "unsigned" => true,
                "auto_increment" => true
            ],
            "nama_unit" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "kode_unit" => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ],
            "provinsi_unit" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "kota_unit" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "alamat_unit" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("unit", true);
    }

    public function down()
    {
        $this->forge->dropTable("unit");
    }
}
