<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    //utilizzando fill() nel controller imposto questo array con tutti le caratteristiche per proteggere l'inserimento di un nuovo comic
    protected $fillable = [
        'title',
        'description',
        'image',
        'price',
        'series',
        'sale_date',
        'type'
    ];
}
