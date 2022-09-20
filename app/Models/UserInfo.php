<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    // protected $table = 'user_infos';

    protected $fillable=[
        'users_id',
        'lastname',
        'firstname',
        'sex',
        'description',
        'choice1',
        'choice2',
        'choice3',
        'choice5',
        'choice6',
        'choice7',
        'choice8',
        'choice9',
        'choice10',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
