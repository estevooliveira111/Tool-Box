<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\Telegram;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index(string $contact)
    {
        Telegram::SendMessage("$contact");
        return response()->json('ok', 201);
    }
    
}
