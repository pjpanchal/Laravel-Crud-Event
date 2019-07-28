<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Event;

class Event extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','name', 'description', 'image','startdate','invited_users',
    ];

    public function getInvitedUsersAttribute($value)
    {
    	$users = [];
    	$datas = unserialize($value);
        foreach ($datas as $key => $data) {
        	$username = User::find($data);
        	$users[] = $username->name;
        }

        return implode(', ', $users);
    }

	public function creator()
	{
        return $this->belongsTo(User::class, 'user_id');
	}    

}
