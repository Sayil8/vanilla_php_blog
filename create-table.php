<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;

Manager::schema()->dropIfExists('entry');
Manager::schema()->create('entry',function($table){
    $table->increments('id');
    $table->string('title');
    $table->string('content');
    $table->integer('user_id');
    $table->timestamps();
});

Manager::schema()->dropIfExists('users');
Manager::schema()->create('users', function($table){
    $table->increments('id');
    $table->string('user');
    $table->string('pass');
    $table->string('email');
    $table->timestamps();
});
Manager::schema()->dropIfExists('comments');
Manager::schema()->create('comments',function($table){
    $table->increments('id');
    $table->integer('user_id');
    $table->integer('entry_id');
    $table->string('content');
    $table->timestamps();
});