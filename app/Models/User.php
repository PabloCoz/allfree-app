<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name', 'country', 'email', 'password', 'phone', 'external_id', 'external_auth', 'slug', 'description',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function posts_emit()
    {
        return $this->hasMany(Post::class);
    }

    public function posts_recived()
    {
        return $this->belongsToMany(Post::class);
    }

    public function reactions()
    {
        return $this->hasMany(Reaction::class);
    }

    public function complaints()
    {
        return $this->hasMany(Complaint::class);
    }

    public function contacts_created()
    {
        return $this->hasMany(Contact::class);
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    public function chats()
    {
        return $this->belongsToMany(Chat::class)->withPivot('active')->withTimestamps();
    }
}
