<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocs extends Model
{
    protected $table = 'ocs';
   	protected $primaryKey = 'code';

    protected $guarded = ['_token'];

    protected $fillable = ['code','description','qtdesolic','lote', 'ua', 'street', 'family', 'id_skus'];

    public function skus()
    {          
        return $this->hasMany(Skus::class, 'id_skus', 'id_code');
    }

    

}
