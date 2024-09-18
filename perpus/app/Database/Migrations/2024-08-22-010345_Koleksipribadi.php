<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Koleksipribadi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KoleksiID' => [
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
        ]);

        $this->forge->addKey('KoleksiID', true);
        $this->forge->createTable('Koleksipribadi');
    }

    public function down()
    {
        //
    }
}
