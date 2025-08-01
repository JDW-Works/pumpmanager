<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pumpdata extends Model
{
    protected $table = 'pumpdatas';
    protected $primaryKey = 'pd_id';

    protected $fillable = [
        'pd_arg',
        'o_id',
        'pd_idno',
        'pd_name',
        'pd_proptyorg',
        'pd_mngorg',
    ];

    public $timestamps = true;
    const CREATED_AT = 'chCreateDate';
    const UPDATED_AT = 'chUpdateDate';
}
