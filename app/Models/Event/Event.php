<?php

namespace App\Models\Event;

use App\Models\Speaker\Speaker;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description',
        'date', 'venue', 'image',
        'user_id'
    ];
    
    /**
     *  Relationships 
    **/

    public function speakers(){
        return $this->hasMany(Speaker::class, 'event_id', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
