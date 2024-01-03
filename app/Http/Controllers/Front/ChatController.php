<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Repositories\Front\ChatRepository;

class ChatController extends Controller
{
    protected $chat;

    public function __construct(Chat $chat) {
        $this->chat = new ChatRepository($chat);
    }

    public function viewChat() {
        return $this->chat->viewChat();
    }

    public function getMessage($receiverId) {
        return $this->chat->getMessage($receiverId);
    }

    public function sendMessage() {
        return $this->chat->sendMessage();
    }

    public function getNotifications() {
        return $this->chat->getNotifications();
    }
}