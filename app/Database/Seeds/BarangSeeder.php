<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
	public function run()
        {
                $data = [[
                        'nama_barang' => 'Buah Naga',
                        'jenis_barang'    => 'Buah-buahan',
						'harga_barang'    => '30000'
				],		
				[
					'nama_barang' => 'Alpukat Mentega',
					'jenis_barang'    => 'Buah-buahan',
					'harga_barang'    => '21500'
				],
			[
				'nama_barang' => 'Sayur Bayam',
				'jenis_barang'    => 'Sayur-sayuran',
				'harga_barang'    => '35000'
			],
		[
			'nama_barang' => 'Buah Naga',
			'jenis_barang'    => 'Buah-buahan',
			'harga_barang'    => '30000'
	]		
                ];

               

                // Using Query Builder
                $this->db->table('barang')->insertBatch($data);
        }
}
