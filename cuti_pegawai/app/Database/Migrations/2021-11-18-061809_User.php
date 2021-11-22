<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            "username" => [
                "type" =>"VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "password" => [
                "type" =>"VARCHAR",
                "constraint" => 100,
                "null" => false
            ],
            "pegawai_id" => [
                "type" =>"INT",
                "constraint" => 11,
                "null" => false
            ],
            "level_aktif" => [
                "type" =>"INT",
                "constraint" => 11,
                "null" => false
            ],
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->addUniqueKey("username");
        $this->forge->createTable("user", true);

    }

    public function down()
    {
        $this->forge->dropTable("user");
    }
}
