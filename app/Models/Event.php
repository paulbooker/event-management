<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    public function user(): BelongsTo {
	    return $this->belongsTo(User::class);
    }
    
    public function attendees(): HasMany {
	    return $this->hasMany(Attendee:class);
    }
}
