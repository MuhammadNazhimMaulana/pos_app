<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Kategori_E extends Entity
{
    // Logika untuk menyimpan File gambar
    public function setFotoKategori($file)
    {
        $fileName = $file->getRandomName();
        $writePath = './upload/Foto Kategori';

        // Save ke folder uploads
        $file->move($writePath, $fileName);

        // Simpan nama file
        $this->attributes['foto_kategori'] = $fileName;
        return $this;
    }
}