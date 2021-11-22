<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailLevel extends Migration
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
            "user_id" => [
                "type" =>"INT",
                "constraint" => 11,
                "mull" => false
            ],
            "level_id" => [
                "type" =>"INT",
                "constraint" => 11,
                "null" => false
            ],
        ];

        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("detail_level", true);

    }

    public function down()
    {
        $this->forge->dropTable("detail_level");
    }
}
