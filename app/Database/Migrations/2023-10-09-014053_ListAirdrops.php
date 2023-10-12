<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ListAirdrops extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 255,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name_project' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'slug' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'image' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'value' => [
                'type'       => 'INT',
                'constraint' => 100
            ],
            'description' => [
                'type'  => 'VARCHAR',
                'constraint'  => 255,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('list_airdrops');
    }

    public function down()
    {
        $this->forge->dropTable('list_airdrops');
    }
}
