<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // PELANGGAN
        DB::table('tb_pelanggan')->insert([
        	'nama_pelanggan' => 'Husnul Putri',
        	'email_pelanggan' => 'husnulputricandra@gmail.com',
        	'username_pelanggan' => 'HusnulPutri',
        	'password_pelanggan' => md5('12345678'),
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s")
        ]);

        // PEGAWAI
        DB::table('tb_pegawai')->insert([
        	'nama_pegawai' => 'Husnul Putri Candra Buana',
        	'email_pegawai' => 'husnulputricandra@gmail.com',
        	'username_pegawai' => 'HusnulPutri',
        	'password_pegawai' => md5('12345678'),
            'foto_pegawai' => 'husnul.jpg',
        	'created_at' => date("Y-m-d H:i:s"),
        	'updated_at' => date("Y-m-d H:i:s")
        ]);

        // RESTORAN
        DB::table('tb_restoran')->insert([
            'id_restoran' => '1',
            'nama_restoran' => '8-Stars Restaurant',
            'alamat_restoran' => 'Bali',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // HIDANGAN
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Spageti',
            'jenis_hidangan' => 'Makanan',
            'harga_hidangan' => 45000,
            'foto_hidangan' => 'spageti.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Beef',
            'jenis_hidangan' => 'Makanan',
            'harga_hidangan' => 100000,
            'foto_hidangan' => 'beef.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Pinneaple Juice',
            'jenis_hidangan' => 'Minuman',
            'harga_hidangan' => 12500,
            'foto_hidangan' => 'pinepple.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('tb_hidangan')->insert([
            'nama_hidangan' => 'Strawberry Juice',
            'jenis_hidangan' => 'Minuman',
            'harga_hidangan' => 15000,
            'foto_hidangan' => 'heart.jpg',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        // PEMESANAN
        DB::table('tb_pemesanan')->insert([
            'id_restoran' => '1',
            'id_pelanggan' => '1',
            'id_pegawai' => '1',
            'total_pemesanan' => 107500,
            'status_pemesanan' => 'Lunas',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        // DETIL PEMESANAN
        DB::table('tb_detil_pemesanan')->insert([
            'id_pemesanan' => '1',
            'id_hidangan' => '1',
            'jumlah_hidangan' => '1',
            'total_harga_hidangan' => 107500,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
       
    
    }
}
