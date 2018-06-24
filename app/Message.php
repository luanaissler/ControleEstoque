<?php

namespace App;

use Estoque\Message as Estoque;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'text'];

    public function user(){
        return $this->belongsTo('\App\User');
    }
    public function index()
    {
        $messages = Message::orderBy('id', 'desc')->paginate(15);

        return view('message.index', ['messages' => $messages]);

    }



}
