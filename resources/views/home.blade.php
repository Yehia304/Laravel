@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
           <img src="https://i1.sndcdn.com/avatars-000326709935-8bqnrw-t500x500.jpg" style="height: 155px" class="rounded-circle">
       </div>
       <div class="col-9 pt-5">
           <div class="d-flex justify-content-between align-items-baseline">
            <div><h1>{{$user->username}}</h1></div>
               <div><a href="#">Add a new post</a></div>
           </div>
           <div class="d-flex">
           <div class="pl-2"><strong>Followers</strong></div>
           <div class="pl-2"><strong>Likes</strong></div>

           <div class="pl-2"><strong>Whatever</strong></div></div>

           <div class="pl-2"><strong>{{$user->profile->Title}}</strong></div>
           <div class="pl-2">{{$user->profile->Description}}</div>


       </div>

   </div>


</div>
@endsection
