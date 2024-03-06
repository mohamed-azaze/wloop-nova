<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'all_agent', 'Visibility', 'user_id'];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}