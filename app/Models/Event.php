<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'start_time', 'end_time', 'user_id'];
    
    //public function user(): BelongsTo {
	public function user() {
	    return $this->belongsTo(User::class);
    }

    //public function attendees(): HasMany {    
    public function attendees() {
	    return $this->hasMany(Attendee::class);
    }
}
