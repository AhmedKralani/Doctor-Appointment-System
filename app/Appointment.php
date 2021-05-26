<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Time;
class Appointment extends Model
{
	protected $guarded = [];

	public function doctor(){
		return $this->belongsTo(User::class,'user_id','id');
	}
	public function times(){
    	return $this->hasMany(Time::class);
    }	
}