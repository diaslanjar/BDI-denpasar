<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penugasan extends Migration
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
            "user_id" => [
                "type" =>"INT",
                "constraint" => 11,
                "mull" => false
            ],
            "unit_id" => [
                "type" =>"INT",
                "constraint" => 11,
                "mull" => false
            ],
        ];
        $this->forge->addField($fields);
        $this->forge->addPrimaryKey("id");
        $this->forge->createTable("penugasan", true);
    }

    public function down()
    {
        $this->forge->dropTable("penugasan");
    }
}
