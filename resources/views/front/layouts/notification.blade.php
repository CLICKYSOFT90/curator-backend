@php
$notifications = getUnreadMessages();
@endphp

@forelse($notifications as $notification)
    <li class='option'>
        <a href="{{route('view.chat')}}">
            <div class="not-flex">
                <div class="not-img">
                    <img src="{{$notification->getSenderCustomer->profile_image}}" alt="image" class="img-fluid">
                </div>
                <div class="not-cont">
                    <p>{{$notification->getSenderCustomer->full_name}}
                        <span>{{$notification->message}}</span>
                    </p>
                </div>
            </div>
        </a>
    </li>
@empty
    <li class='option'>
        <a href="javascript:void(0)">
            <div class="not-flex">
                No Notification Found*
            </div>
        </a>
    </li>
@endforelse