<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

	protected $guarded = [];

	public function profileImage(){

		$imagePath = ($this->image) ?  $this->image : 'profile/zJ22kurCS7GV0R6kQpGc2zm1cbBfLQedsz1MjNAX.jpeg';
		return asset('/storage/' . $imagePath);
	}


    public function followers(){

    	return $this->belongsToMany(User::class);
    }
    
    public function user(){

    	return $this->belongsTo(User::class);
    }


}
