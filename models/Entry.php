<?php

namespace Models;

use  Illuminate\Database\Eloquent\Model;

Class Entry extends Model{
    protected $table = 'entry';
    protected $fillable = ['title', 'content', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}