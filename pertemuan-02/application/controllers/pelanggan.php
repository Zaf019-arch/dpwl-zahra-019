<?php

class Pelanggan
{
    public function index($id_pelanggan = null)
    {
        // Contoh data dummy (dapat diganti dengan query database)
        $data = [
            'title'        => 'Profil Pelanggan',
            'id_pelanggan' => $id_pelanggan ?? 'P001',
            'nm_pelanggan' => 'Budi Santoso',
            'no_telp'      => '081234567890'
        ];

        // Ekstrak array agar variabel $title, $id_pelanggan, dll. dapat diakses di view
        extract($data);

        // Panggil file view
        require_once APPPATH . 'views/pelanggan.php';
    }

    public function detail($id_pelanggan = null)
    {
        $data = [
            'title'        => 'Detail Pelanggan',
            'id_pelanggan' => $id_pelanggan,
            'nm_pelanggan' => 'Siti Rahma',
            'no_telp'      => '089876543210'
        ];

        extract($data);
        require_once APPPATH . 'views/pelanggan.php';
    }
}