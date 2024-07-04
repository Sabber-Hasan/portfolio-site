<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * relationships between models
     */
    public function profile():HasOne
    {
        return $this->hasOne(Profile::class);
    }

    public function galleries():HasMany
    {
        return $this->hasMany(Gallery::class);
    }

    public function cvs():HasMany
    {
        /* might be hasMany or hasOne */
        return $this->hasMany(CV::class);
    }

    public function files():HasMany
    {
        return $this->hasMany(File::class);
    }

    public function links():HasMany
    {
        return $this->hasMany(Link::class);
    }

    public function projects():HasMany
    {
        return $this->hasMany(Project::class);
    }

    public function skills():HasMany
    {
        return $this->hasMany(Skill::class);
    }

    public function experiences():HasMany
    {
        return $this->hasMany(Experience::class);
    }

    public function educations():HasMany
    {
        return $this->hasMany(Education::class);
    }

    public function certifications():HasMany
    {
        return $this->hasMany(Certification::class);
    }

    public function trainings():HasMany
    {
        return $this->hasMany(Training::class);
    }

    public function languages():HasMany
    {
        return $this->hasMany(Language::class);
    }

    public function clients():HasMany
    {
        return $this->hasMany(Client::class);
    }

    public function setting():HasOne
    {
        return $this->hasOne(Setting::class);
    }

    public function contacts():HasMany
    {
        /* contact us  */
        return $this->hasMany(Contact::class);
    }

    public function achievements():HasMany
    {
        return $this->hasMany(Achievement::class);
    }

    public function references():HasMany
    {
        return $this->hasMany(Reference::class);
    }

    public function addresses():HasMany
    {
        return $this->hasMany(Address::class);
    }

    public function carousels():HasMany
    {
        return $this->hasMany(Carousel::class);
    }

    public function teams():HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function prices():HasMany
    {
        return $this->hasMany(Price::class);
    }

    public function categories():HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function blogs():HasMany
    {
        return $this->hasMany(Blog::class);
    }
}
