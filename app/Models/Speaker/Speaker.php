<?php

namespace App\Models\Speaker;

use App\Models\Event\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'image', 'event_id', 
        'profession', 'topic'
    ];

    public function event(){
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }
}
