<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distributer extends Model
{
    public $table = "distributeri" ;

    public $primaryKey="id_dp";

    protected $fillable = [
       'naziv' , 'adresa' , 'adresa_kb' , 'ptt' , 'oib','tel','fax','mobitel','email','user_id'
    ];
    public function artikli()
    {
        return $this->hasMany('App\Artikli' , 'dp' , 'id_dp');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
