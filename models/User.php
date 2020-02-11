<?php

namespace Models;

use  Illuminate\Database\Eloquent\Model;

Class User extends Model{
    protected $table = 'users';
    protected $fillable = ['user', 'email', 'pass'];
    
    public function entries(){
        return $this->hasMany(Entry::class);
    }
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}