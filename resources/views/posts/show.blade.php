@include('layouts.navigation')

<div class="container" style="width: 75%; margin-top: 10px;">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}">
        </div>
        <div class="col-4">
            <div>
                <div style="display: flex; align-items: center; margin-bottom: 10px;">
                    <div>
                        <img src="{{$post->user->profile->profileImage()}}" style="width: 40px; border-radius: 50%;">
                    </div>
                    <div style="margin-left: 15px;">
                        <div style="font-size: 15px; font-weight: bold;">
                            <a href="/profile/{{$post->user->id}}" style="text-decoration: none; color:black;">{{$post->user->username}}</a>
                            <a href="#" style="color: blue; margin-left: 20px; font-size: 13px; text-decoration: none;">Follow</a>
                        </div>
                    </div>
                </div>

                <hr>

                <p>
                    <span style="font-size: 15px; font-weight: bold;">
                        <a href="/profile/{{$post->user->id}}" style="text-decoration: none; color:black;">{{$post->user->username}}</a>
                    </span> {{$post->caption}}</p>
            </div>
        </div>
    </div>
</div>
