<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Message extends Model
{
    protected $fillable = ['name', 'email', 'messages'];

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('H:i:s / d.m.Y');
    }

    public function messageDelete($id)
    {
        DB::table('messages')->where('id', $id)->delete();
    }
}
