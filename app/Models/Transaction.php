<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable=['credit','debit','transfer','user_id' ];
    public function user()
    {
      $this->belongsTo(User::class);
    }

}
