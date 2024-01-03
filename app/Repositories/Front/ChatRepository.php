<?php

namespace App\Repositories\Front;

use App\Models\Chat;
use App\Models\User;
use Intervention\Image\Facades\Image;

class ChatRepository
{
    public function viewChat()
    {
        if (auth()->check()) {
            $users = User::where('is_active',1)->where('id','!=',auth()->id())->get();
        } else {
            $users = User::where('is_active',1)->get();
        }
        return view('front.pages.chat.index',compact('users'));
    }

    public function getMessage($receiverId) {
        $authUser = auth()->user();
        Chat::where([
            ['sender_id','=',$receiverId],
            ['receiver_id','=',$authUser->id],
            ['seen','=',0]
        ])->update(['seen' => 1]);

        $receiverRow = User::findOrFail($receiverId);

        $messages = Chat::where([
            ['sender_id','=',$receiverId],
            ['receiver_id','=',$authUser->id]
        ])->orWhere([
            ['receiver_id','=',$receiverId],
            ['sender_id','=',$authUser->id]
        ])->get();

        return view('front.pages.chat.messages', compact('messages','receiverRow','authUser'))->render();
    }

    public function sendMessage() {
        $request = request()->all();
        $request['sender_id'] = auth()->id();

        if (request()->hasFile('media')) {
            $request['media'] = $this->imageSave('media');
            $request['is_media'] = 1;
        } else {
            unset($request['media']);
        }

        $message = Chat::create($request);
        if (!empty($message)) {
            $newMessagePreview = view('front.pages.chat.new_message', compact('message'))->render();
            return response()->json([
                'status'  => 'success',
                'msg'     => 'Message has been sent successfully',
                'preview' => $newMessagePreview
            ], 200);
        }
        return response()->json([
            'status'  => 'warning',
            'msg' => 'Message has not been sent.'
        ], 400);
    }

    public function imageSave($fileName) {
        $image = request()->file($fileName);
        $extension = $image->getClientOriginalExtension();
        $imageName = rand(111, 99999).time(). '.' . $extension;
        $mainImage = public_path('assets/front/chat/' . $imageName);
        Image::make($image)->save($mainImage);
        return $imageName;
    }

    public function getNotifications() {
        return response()->json([
            'status'       => 'success',
            'notification' => view('front.layouts.notification')->render()
        ], 200);
    }
}
