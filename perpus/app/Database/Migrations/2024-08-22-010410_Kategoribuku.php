<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kategoribuku extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'KategoriID' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'NamaKategori' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
        ]);

        $this->forge->addKey('KategoriID', true);
        $this->forge->createTable('Kategoribuku');
    }

    public function down()
    {
        //
    }
}
