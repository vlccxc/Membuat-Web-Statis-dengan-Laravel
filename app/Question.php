<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	//insert menggunakan orm
    protected $table = "questions";

    //insert menggunakan mass assignment -> terdapat $fillable yaitu bagian mana saja yg mau diisi
    // 												 $guarded yaitu bagian mana yang tidak mau diisi 
    // protected $fillable = ["judul", "isi"];
    protected $guarded = [];
}
