<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Harga_E extends Entity
{
    // Set Harga
    public function setHarga(int $harga){

        $this->attributes['harga'] = FLOOR(RAND()*($this->attributes['range_2'] - $this->attributes['range_1'] +1))+$this->attributes['range_1'];

        return $this->attributes['harga'];
    }
}