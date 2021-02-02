<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'director', 'imageUrl', 'duration', 'release_date', 'genre'];
}

// Str::random(10)
// $table->bigIncrements('id');
// $table->string('title');
// $table->string('director');
// $table->string('imageUrl');
// $table->integer('duration');
// $table->date('release_date');
// $table->string('genre');
// $table->timestamps();