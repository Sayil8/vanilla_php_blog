<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{

    protected $table = 'comments';
    protected $fillable = ['user_id','entry_id','content'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function entry(){
        return $this->belongsTo(Entry::class);
    }
}