<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Agency extends Model
{
    protected $fillable = [
        'name', 'address', 'country','city','postalcode','fax','phone','Licence','mf','Registre','userid',
    ];
}
