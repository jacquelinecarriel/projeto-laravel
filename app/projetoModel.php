<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projetoModel extends Model
{
    public $table = "produtos";
    public $primaryKey = "id";
    public $timestamp = false;
    public $guarded = [];
}