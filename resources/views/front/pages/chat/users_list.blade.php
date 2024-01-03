<h4 class="In-box-text">INBOX</h4>
@forelse($users as $user)
    <li class="nav-item">
        <a onclick="showMessage(this,'{{route('get.messages',$user->id)}}');" class="nav-link chatter-signle chatter-signle{{$user->id}}" href="javascript:void(0)">
            <div class="main-img-inbox">
                <div class="inbox-cont">
                    <div class="inbox-content-img">
                        <img src="{{$user->profile_image}}" alt="image" class="img-fluid">
                    </div>
                    <div class="inbox-content-txt">
                        <h6>{{$user->full_name}}</h6>
                        <p>Last Message</p>
                    </div>
                </div>
                <div class="content-inbox-time">
                    <span>21h</span>
                </div>
            </div>
        </a>
    </li>
@empty
    <li class="nav-item">
        <div class="alert alert-danger">
            No users found.
        </div>
    </li>
@endforelse