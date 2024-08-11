<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','company','position','rating','imagePath','review','tag',
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
