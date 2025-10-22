<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip',
    ];

    public function todayVisits()
    {
        return Visit::whereDate('created_at', today())->count();
    }

    public function totalVisits()
    {
        return Visit::count();
    }
}
