<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
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
            "nama_user" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "password" => [
                "type" => "VARCHAR",
                "constraint" => 255,
                "null" => false
            ],
            "level" => [
                "type" => "INT",
                "constraint" => 11,
                "null" => false
            ],
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->addUniqueKey("email");
        $this->forge->createTable("user", true);
    }

    public function down()
    {
        $this->forge->dropTable("user");
    }
}
