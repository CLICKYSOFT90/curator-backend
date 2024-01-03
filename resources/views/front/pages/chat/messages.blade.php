<div class="first-chat-box first-chat-box-{{$receiverRow->id}}">
    <div class="img-chat-flex">
        <img src="{{asset('assets/front/images/profile-images/'.$receiverRow->profile_image)}}" alt="{{$receiverRow->full_name}}" class="img-fluid">
        <div class="sholpub-text">
            <h6>{{$receiverRow->full_name}}</h6>
            <p>Spotify Playlister |  Gemany</p>
            <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i> 4.6</li>
                <li><span class="curator-bar">|</span></li>
                <li>Joined 3y ago</li>
            </ul>
        </div>
    </div>
    <div class="new-scollbarbar-hide chat-messages" id="chat-messages">
        @foreach($messages as $message)
            @if($message->sender_id==$authUser->id)
                <div class="chat-data chat-data-sec">
                    <div class="chat-data-img">
                        <img src="{{asset('assets/front/images/profile-images/'.$authUser->profile_image)}}" alt="{{$authUser->full_name}}" class="img-fluid">
                    </div>
                    <div class="chat-data-title">
                        <h6>{{$authUser->full_name}}</h6>
                    </div>
                    <div class="chat-data-time">
                        <span>{{date('M d, Y, h:i A', strtotime($message->created_at))}}</span>
                    </div>
                </div>
            @else
                <div class="chat-data chat-data-sec">
                    <div class="chat-data-img">
                        <img src="{{asset('assets/front/images/profile-images/'.$receiverRow->profile_image)}}" alt="{{$receiverRow->full_name}}" class="img-fluid">
                    </div>
                    <div class="chat-data-title">
                        <h6>{{$receiverRow->full_name}}</h6>
                    </div>
                    <div class="chat-data-time">
                        <span>{{date('M d, Y, h:i A', strtotime($message->created_at))}}</span>
                    </div>
                </div>
            @endif
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
        @endforeach
    </div>
    <div class="main-chat-text-box">
        <div class="ppaper-clip">
            <a onclick="openFileInput()" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="16.949" height="19.2" viewBox="0 0 16.949 19.2"><path d="M11.249,4.5l-7.81,7.94a1.5,1.5,0,1,0,2.121,2.121l9.31-9.44A3,3,0,0,0,10.628.879l-9.31,9.44a4.5,4.5,0,1,0,6.364,6.364L15.374,9" transform="translate(0.6 0.6)" fill="none" stroke="#919191" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.2"/></svg>
            </a>
        </div>
        <div class="write-text">
            <textarea name="message" cols="1" rows="1" class="form-control"></textarea>
        </div>
        <div class="send-paper-plane">
            <a onclick="sendMessage()" href="javascript:void(0)">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path d="M11.319.33,3.794,2.83c-5.058,1.692-5.058,4.45,0,6.133l2.233.742.742,2.233C8.452,17,11.219,17,12.9,11.939L15.41,4.422C16.527,1.047,14.694-.795,11.319.33Zm.267,4.483L8.419,8a.624.624,0,0,1-.883,0,.629.629,0,0,1,0-.883L10.7,3.93a.625.625,0,1,1,.883.883Z" transform="translate(2.131 2.136)" fill="#fff"/><path d="M0,0H20V20H0Z" transform="translate(20 20) rotate(180)" fill="none" opacity="0"/></svg>
            </a>
        </div>
        <input type="file" name="media" id="file-input" accept="image/*" style="display: none;" onchange="previewFile()">
        <input type="hidden" name="receiver_id" value="{{$receiverRow->id}}">
    </div>
    <div id="file-preview-container" style="display: none;">
        <img src="" id="file-preview" alt="File Preview">
    </div>
</div>