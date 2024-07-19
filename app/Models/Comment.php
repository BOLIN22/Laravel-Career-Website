<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;


class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = ['user_id', 'idea_id', 'content'];

    // define the relationshiip between comments and users
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // define the relationship between comments and ideas
    public function idea()
    {
        return $this->belongsTo(Idea::class);
    }

    protected $guarded = [];

}
