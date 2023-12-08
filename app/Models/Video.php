<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'video_url','count_rep','count_search'];


    public function roles()
    {
        return $this->belongsToMany(Roles::class, 'role_id');
    }
}
