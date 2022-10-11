<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function transmitter()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function receivers()
    {
        return $this->belongsToMany(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function resources()
    {
        return $this->morphMany(Resource::class, 'resourceable');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }
}
