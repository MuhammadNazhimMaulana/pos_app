<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;
use App\Entities\Harga_E;

class Barang_E extends Entity
{
    // Logika untuk menyimpan File gambar
    public function setFotoBarang($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './upload/Foto Barang';

        // Save ke folder uploads
        $file->move($writePath, $fileName);

        // Simpan nama file
        $this->attributes['foto_barang'] = $fileName;
        return $this;
    }

}