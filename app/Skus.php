<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skus extends Model
{
    protected $table = 'skuses';
   	protected $primaryKey = 'id_code';

    protected $guarded = ['_token'];

    protected $fillable = ['id_code', 'description', 'family', 'peso', 'alt', 'lgr', 'cpm', 'cbg', 'paletization', 'qtdepallet', 'id_ocs'];

    public function ocs()
    {       
        return $this->belongsTo(Ocs::class, 'id_ocs', 'code');
    }
}
