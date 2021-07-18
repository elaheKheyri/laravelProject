<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{  protected $fillable= [

            'text',
            'user_id',
            'title',
            'lesson_id',
			'picture',
			'mode' ,
			'view_counter'
        ];
	
public function user()
{
       return $this->belongsTo('App\Models\user');
}

  public function lesson(){
        return $this->belongsTo('App\Models\lesson');
    }

 public function comments(){
        return $this->hasMany('App\Models\comment');
    }

	
	
    use HasFactory;
}
