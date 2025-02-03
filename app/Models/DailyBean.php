<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyBean extends Model
{
    use HasFactory;

    protected $fillable = ['bean_id', 'sale_price', 'date'];

    protected $casts = [
        'date' => 'date', // Cast kolom `date` ke objek Carbon
    ];

    // Relationship ke Bean
    public function bean()
    {
        return $this->belongsTo(Bean::class);
    }
};
