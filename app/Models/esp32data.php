<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esp32data extends Model
{
    use HasFactory;
    protected $table = 'esp32data';
    protected $fillable = [
      'Power',
        'reading_time',
        'Current',
        'date'


    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

}
