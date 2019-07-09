<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikli extends Model
{
   protected $table = "distributeri_artikli";

   public $primaryKey = "sifra_art";

   protected $fillable=['eancode_art','naziv','jmj','jmj2','cijena1','cijena2','pdv','slika','sifra_art'];

   public function distributer()
   {
       return $this->hasOne('App\Distributer' , 'id_dp' , 'dp');
   }
}
