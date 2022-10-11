<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Chat extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function contacts()
    {
        return $this->hasManyThrough(Contact::class, User::class);
    }

    public function name(): Attribute
    {
        return new Attribute(
            get: function () {
               $user = $this->users->where('id', '!=', auth()->user()->id)->first();
               $contact = auth()->user()->contacts()->where('user_id', $user->id)->first();
               return $contact ? $contact->name : $user->name;
            }
        );
    }

    public function image(): Attribute
    {
        return new Attribute(
            get: function () {
                $user = $this->users->where('id', '!=', auth()->user()->id)->first();
                return $user->profile_photo_url;
            }
        );
    }
}
