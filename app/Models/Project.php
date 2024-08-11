<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory, Softdeletes;

    protected $fillable = [
    'title','overview','tipografi','content','color','id_service','client','date','imagePath','url','tag',
    ];

    public function toArray() {
        $toArray = parent::toArray();
        $toArray['imagePath'] = $this->imagePath;
        return $toArray;
    }


    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdateAtAttribute($value) {
        return Carbon::parse($value)->timestamp;
    }
}
