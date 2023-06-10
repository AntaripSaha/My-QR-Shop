<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class PlanSubscription extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function restaurant()
    {
        return $this->hasOne(\App\Restorant::class,'user_id','user_id');
    }
    public function plan()
    {
        return $this->hasOne(\App\Plans::class,'id','plan_id');
    }
}
