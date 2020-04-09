@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.flhr2-2.fna.fbcdn.net/v/t51.2885-19/s320x320/83213956_3360255157381124_5752385570823208960_n.jpg?_nc_ht=instagram.flhr2-2.fna.fbcdn.net&_nc_ohc=8EAnBgzIl20AX8QboP5&oh=8e59ef2a003f5715991e682b1346173f&oe=5EB65EBE" style="width: 150px;" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href="/p/create">Ann New Post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">

        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{$post->id}">
                    <img src="/storage/{{ $post->image }}" class="w-100"/>
                </a>
            </div>
        @endforeach



    </div>
</div>
@endsection
