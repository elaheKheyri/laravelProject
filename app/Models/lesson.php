<?php

namespace App\Models;
use App\Models\Article;
use App\Models\lesson ;
use App\Models\user ;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lesson extends Model
{
	protected $fillable = ['name'] ;
	
	
   public function articles(){
        return $this->hasMany('App\Models\Article');
    }
	    use HasFactory;

}