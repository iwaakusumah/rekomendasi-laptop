<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Laptop extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'product',
        'typename',
        'inches',
        'screenresolutions',
        'cpu_company',
        'cpu_type',
        'cpu_frequency',
        'ram',
        'memory',
        'gpu_company',
        'gpu_type',
        'os',
        'weight',
        'price'
    ];
}
