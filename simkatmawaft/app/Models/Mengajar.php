<?php

namespace App\Models;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mengajar extends Model
{
    protected $table = 'mengajar';
    protected $primaryKey = 'id';
    protected$fillable = ['id','nim','nama','jenis_program','nama_program','dataskl_id','tanggal_mulai','tanggal_selesai','dokumen','status','keterangan'];

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