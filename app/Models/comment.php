<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
	
	   protected $fillable=
        [
		    'id',
            'text',
            'name',
			'article_id' ,
			'mode'
        ];
		
    use HasFactory;
}
