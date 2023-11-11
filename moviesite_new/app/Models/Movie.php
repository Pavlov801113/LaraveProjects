<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Leadactor;
use App\Models\Director;
use App\Models\Movietype;

class Movie extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function leadactor(){
        return $this->belongsTo(Leadactor::class);
    }

    public function director(){
        return $this->belongsTo(Director::class);
    }

    public function movietype(){
        return $this->belongsTo(Movietype::class);
    }

}
