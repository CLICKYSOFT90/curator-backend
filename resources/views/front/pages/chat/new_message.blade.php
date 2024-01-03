<div class="chat-data chat-data-sec">
    <div class="chat-data-img">
        <img src="{{auth()->user()->profile_image}}" alt="{{auth()->user()->full_name}}" class="img-fluid">
    </div>
    <div class="chat-data-title">
        <h6>{{auth()->user()->full_name}}</h6>
    </div>
    <div class="chat-data-time">
        <span>{{date('M d, Y, h:i A', strtotime($message->created_at))}}</span>
    </div>
</div>

<div class="new-chat-border">
    <div class="msg-content-data msg-content-data-sec">
        @if($message->is_media==1)
            <img src="{{asset('assets/front/chat/'.$message->media)}}" alt="Media" width="150px">
        @endif
        <p>
            {{$message->message}}
        </p>
    </div>
</div>