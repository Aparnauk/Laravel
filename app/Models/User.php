<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    //  overrinding
    protected $primaryKey = 'user_id';

    protected $hidden = [
        'password',
        'remember_token'
    ];

    // tabililekk datas ellam list aavunna portion, CRUD Operation

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    // protected $table = 'customers';

    // protected $fillable = [
    //     'name',
    //     'email',
    //     'date_of_birth',
    //     'status',
    //     'password'
    // ];

    
    protected $fillable = [
        'name','email','date_of_birth','status'
    ];

    protected $dates = ['date_of_birth'];


    public function scopeActive($query){
        return $query->where('status',1);
    }

    public function getDateOfBirthAttribute($value){
        return date('d-M-y',strtotime($value));
    }

    // Accessor
    public function getDateOfBirthFormatedAttribute(){
        return date('d-M-y',strtotime($this->date_of_birth));
    }

    // Appending
    public function getStatusTextAttribute(){
        if($this->status ==1) return "Active";
        else return "inactive";
    }

    protected $appends = ['date_of_birth_formated','status_text'];
}
