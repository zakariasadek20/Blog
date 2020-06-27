<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramController extends Controller
{
    public function index()
    {
        $updates = Telegram::getUpdates();
        return json_encode($updates);
    }
    public function store(Request $request)
    {
        Telegram::sendMessage([
            'chat_id'=>$request->id,
            'text' => $request->text
        ]);
        // dd('store');
    }
}
