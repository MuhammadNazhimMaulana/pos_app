<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Harga_E extends Entity
{
    
     //Set Harga
     public function setHargaAsli(int $harga_asli){

         $this->attributes['harga_asli'] = mt_rand($this->attributes['range_1'],  $this->attributes['range_2']);

         return $this->attributes['harga_asli'];
     }
    
}