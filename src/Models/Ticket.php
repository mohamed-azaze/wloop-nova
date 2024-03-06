<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'subject',
        'departments_id',
        'statuses_id',
        'priorities_id',
        'body',
        'labels_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function departments()
    {
        return $this->belongsTo(Department::class);
    }

    public function statuses()
    {
        return $this->belongsTo(Statuses::class);
    }

    public function priorities()
    {
        return $this->belongsTo(Priorities::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Labels::class);
    }

    public function CannedReplies()
    {
        return $this->belongsToMany(CannedReplies::class);
    }
}