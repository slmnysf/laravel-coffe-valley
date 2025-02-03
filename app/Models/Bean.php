<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bean extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price'];

    // Relationship ke DailyBean
    public function dailyBeans()
    {
        return $this->hasMany(DailyBean::class);
    }
};
