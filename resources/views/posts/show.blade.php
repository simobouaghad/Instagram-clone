@include('layouts.navigation')

<div class="container" style="width: 75%; margin-top: 10px;">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}">
        </div>
        <div class="col-4">
            <h3 style="font-size: 30px;">{{$post->user->username}}</h3>
            <p>{{$post->caption}}</p>
        </div>
    </div>
</div>
