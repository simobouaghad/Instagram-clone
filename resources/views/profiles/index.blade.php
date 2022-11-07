
<x-app-layout>

    <div class="container" style="width: 70%;">
        <div class="row" style="display: flex;">
            <div style="display: flex; justify-content: center; padding: 10px; width: 35%;">
                <img src="/imgs/insta.png" style="width: 60%; border-radius: 50%;">
            </div>
            <div style="padding: 21px; width: 65%;">
                <div style="display: flex; align-items: center;">
                    <h1 style="font-size: 25px;">{{ $user->name }}</h1>
                    <a href="/p/create" style="margin-left: 250px; color: blue;">New Post</a>
                </div>
                <div style="display: flex">
                    <div style="padding-right: 30px;"><strong>{{ $user->posts->count()}} </strong>posts</div>
                    <div style="padding-right: 30px;"><strong>200k </strong>followers</div>
                    <div style="padding-right: 30px;"><strong>190 </strong>following</div>
                </div>
                <div class="pt-4" style="font-weight: bold">{{ $user->profile->title ?? ''}} </div>
                <div>{{ $user->profile->description ?? '' }}.</div>
                <div><a href="#" style="color: blue">{{ $user->profile->url ?? '' }}</a></div>
            </div>
        </div>
        <div style="display:grid; grid-template-columns: repeat(3, 1fr);">
            @foreach ($user->posts as $post)
                <div style="margin-bottom: 10px;">
                    <img src="/storage/{{ $post->image }}" style="width: 95%;">
                </div>
            @endforeach
        </div>
    </div>


</x-app-layout>
