<div class="user">
    <div class="user__info" data-toggle="dropdown">
        {{--<img class="user__img" src="{{asset('demo/img/profile-pics/8.jpg')}}" alt="">--}}
        <div>
            <div class="user__name">{{auth()->user()->name}}</div>
            <div class="user__email">{{auth()->user()->email}}</div>
        </div>
    </div>

    {{--<div class="dropdown-menu">--}}
        {{--<a class="dropdown-item" href="">View Profile</a>--}}
        {{--<a class="dropdown-item" href="">Settings</a>--}}
        {{--<a class="dropdown-item" href="">Logout</a>--}}
    {{--</div>--}}
</div>