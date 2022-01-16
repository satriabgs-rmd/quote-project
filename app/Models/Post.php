<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    protected $guarded = ["id"];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeSearch($query)
    {
    	if(request('search')) {
    		return $query->where('body', 'like', '%' . request('search') . '%')
    					->orWhere('hastag', 'like', '%' . request('search') . '%');
    	}
    }
}
