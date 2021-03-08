<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    use HasFactory;

    protected $table = 'country_lang';

    public $timestamps = false;

    protected $fillablee = [
        'id',
        'alias',
        'name',
        'name_en'
    ];
}
