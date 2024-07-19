<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    protected $table = 'ideas';

    protected $fillable = [
        'user_id','title', 'destination', 'date', 'interview_content', 'interview_feeling',
    ];
  
    protected $guarded = [];
}
