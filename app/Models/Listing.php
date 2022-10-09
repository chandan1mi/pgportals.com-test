<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Listing extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table= 'listings';
    protected $primaryKey='id';
    
    protected $fillable = [
        'user_id',
        'title',
        'address',
        'description',
        'district',
        'state',
        'country',
        'pincode',
        'neighborhood',
        'car_parking',
        'two_whealer_parking',
        'rooms',
        'listing_coolant',
    ];
    public function user(){   
        return $this->belongsTo(User::class, 'foreign_key');
    }
}
