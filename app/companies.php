<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employer extends Model
{
    protected $table = 'companies';
    protected $fillable = [
        'company_name',
        'address',
        'website',
        'email',
        'fax',
        'mail_box',
        'postal_code',
        'phone1',
        'phone2',
        'mobile1',
        'mobile2',
        'employer',
        'employer_phone',
        'employer_mobile',
    ];
}
