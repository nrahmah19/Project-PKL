<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;
    protected $table = 'penelitian';
    protected $guarded = [];

    public $incrementing = false;
    protected $keyType = 'string';

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model){
            $model->id= IdGenerator::generate(['table' => 'penelitian', 'length' => 5, 'prefix' =>'KP']);
        });
    }
}