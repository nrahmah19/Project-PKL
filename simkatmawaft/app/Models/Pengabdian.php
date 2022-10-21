<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengabdian extends Model
{
    use HasFactory;
    protected $table = 'Pengabdian';
    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model){
            $model->id= IdGenerator::generate(['table' => 'pengabdian', 'length' => 5, 'prefix' =>'PM']);
        });
    }
}