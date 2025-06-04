<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
    use HasFactory;

    protected $primaryKey = 'file_id';

    protected $fillable = [
        'file_path',
        'file_type',
        'hash',
        'size',
        'date_created',
    ];

    public $timestamps = false;
}
