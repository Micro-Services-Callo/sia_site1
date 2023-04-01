<?php
 namespace App\Models;;
 use App\Models\User;
 class User extends Model{
 protected $table = 'tbluser';
 // column sa table
 protected $fillable = [
 'username', 'password'
 ];
 }