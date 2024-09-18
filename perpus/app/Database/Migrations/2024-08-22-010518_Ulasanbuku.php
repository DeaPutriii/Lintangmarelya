<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ulasanbuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'UlasanID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'UserID' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'       => true,
            ],
            'BukuID' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'       => true,
            ],
            'Ulasan' => [
                'type'       => 'TEXT',
            ],
            'Rating' => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'       => true,
            ],
        ]);

        $this->forge->addKey('UlasanID', true);
        $this->forge->createTable('Ulasanbuku');
    }

    public function down()
    {
        //
    }
}
