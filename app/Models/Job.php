<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    public function scopeOnline($query) {
        return $query->where('status', 1);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function proposals()
    {
        return $this->hasMany(Proposal::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class);
    }

    public function isLikes()
    {
        if(auth()->check())
        {
            return auth()->user()->likes->contains('id', $this->id);
        }
    }
}
