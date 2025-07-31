<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    protected $table = 'userdatas';

    protected $fillable = [
        'u_idno',
        'u_name',
        'u_passwd',
        'u_org',
        'u_auth',
        'u_mail',
        'c_name',
        'c_tel',
        'u_company',
        'u_status',
        'chCreateDate',
        'chUpdateDate',
        'nextAgency',
    ];

    public $timestamps = true;
    const CREATED_AT = 'chCreateDate';
    const UPDATED_AT = 'chUpdateDate';
}
