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
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'position', // Added 'position' to mass assignable attributes
        'profile_photo_path',
        'custom_attribute',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean', // Example casting for a boolean attribute
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Boot function to add custom logic when a user is created or updated.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            // Custom logic when a new user is created
        });

        static::updating(function ($user) {
            // Custom logic when a user is updated
        });
    }

    /**
     * Example accessor for the custom_attribute attribute.
     */
    public function getCustomAttributeAttribute($value)
    {
        return strtoupper($value);
    }

    /**
     * Example mutator for the custom_attribute attribute.
     */
    public function setCustomAttributeAttribute($value)
    {
        $this->attributes['custom_attribute'] = strtolower($value);
    }
}
