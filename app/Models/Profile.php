<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Profile extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table= 'profiles';
    protected $primaryKey='id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'address',
        'city',
        'state'
    ];
    public function user(){
        
        return $this->belongsTo(User::class, 'foreign_key');

    }

}
