@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://instagram.fkul10-1.fna.fbcdn.net/vp/c8b597b64a33dc793372dc47620c0b6b/5DF066C8/t51.2885-19/s320x320/22709172_932712323559405_7810049005848625152_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net" class="rounded-circle" style="max-height: 150px">
        </div> 
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>{{ $user->username }}</h1>
                <a href=""> Add New Post</a>
            </div>


            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> follower</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fkul10-1.fna.fbcdn.net/vp/e93fc26ea2ab55f8027c43d3997396ed/5DE7A35D/t51.2885-15/sh0.08/e35/c0.107.925.925a/s640x640/61555594_471501460067844_6848849947845320953_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fkul10-1.fna.fbcdn.net/vp/f1680066b6e76f9490ed175f09954f02/5E14F912/t51.2885-15/sh0.08/e35/c0.81.887.887/s640x640/66420383_162375928225341_762635906960426989_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fkul10-1.fna.fbcdn.net/vp/ceae56d61ee3784002378aeccfafda58/5DCF224D/t51.2885-15/sh0.08/e35/c2.0.746.746a/s640x640/67509038_1248999178602698_5250499905248656732_n.jpg?_nc_ht=instagram.fkul10-1.fna.fbcdn.net" class="w-100">
        </div>
    </div>      
</div>
@endsection
