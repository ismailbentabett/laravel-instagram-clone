@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5 ">
        <img src="https://scontent-mrs2-1.cdninstagram.com/v/t51.2885-19/s320x320/128472527_836332226935935_1393335734751612313_n.jpg?_nc_ht=scontent-mrs2-1.cdninstagram.com&_nc_ohc=1RDIZ1T7fk0AX_qMTTo&tp=1&oh=37c515d9e014514576d1399dfc89d643&oe=600F047F" alt="" class="rounded-circle" style="width:120px;height:120px;">
        </div>
        <div class="col-9 pt-5 ">
        <div class="d-flex justify-content-between align-items-baseline">
            
        <h1>{{ $user->username }}</h1>
        <a href="/p/create">add new post</a>

        </div>
             <div class="d-flex">
             <div class="pr-5"><strong>{{$user -> posts ->count()}}</strong> posts</div>
             <div class="pr-5"><strong>1M</strong> Followes</div>
             <div class="pr-5"><strong>100</strong> Following</div>
             </div>
             <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
             <div>{{$user->profile->description}}</div>
            <div><a href="#" >{{$user->profile->url}}</a></div>
        </div>
    </div>
    <div class="row pt-4" >
        @foreach($user -> posts as $post)
        <div class="col-4 pb-4">
            <a href="/p/{{ $post->id }}">
    <img src="/storage/{{$post -> image}}" alt="" class="w-100 " >    
</a>
    <p>{{$post -> caption}}</p>
    </div>
 
        @endforeach
  
    
</div>
@endsection
