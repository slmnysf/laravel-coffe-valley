<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Login extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Nama tabel yang terkait dengan model.
     *
     * @var string
     */
    protected $table = 'logins';

    /**
     * Kolom yang dapat diisi.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'password',
    ];

    /**
     * Kolom yang harus disembunyikan.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Kolom yang harus di-cast ke tipe data tertentu.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
};
