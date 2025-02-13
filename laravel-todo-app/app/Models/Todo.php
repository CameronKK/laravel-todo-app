<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function goal() {
        return $this->belongsTo(Goal::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    protected $fillable = [
        'detail',
    ];
}
