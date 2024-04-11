<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role_User extends Model
{
     protected $table = "role_user";
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'user_id', 'role_id'
    ];
    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function roles(){
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
}