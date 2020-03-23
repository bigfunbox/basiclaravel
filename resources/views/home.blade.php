@extends('layouts.app')

@section('content')
<div class="container">

    <header class="row">
        <div class="col-3 p-5"><img src="/img/badge.jpg" class="rounded-circle" alt=""></div>
        <div class="col-9 pt-5">
            <div class="d-flex">
                <h2>{{ $user->username }}</h2>
                <a href="/login"><button class="btn btn-primary btn-sm mt-1 ml-5">Follow</button></a>
            </div>
            <div class="d-flex">
                <div class="pr-3"><strong>555</strong> posts</div>
                <div class="pr-3"><strong>40.7k</strong>  followers</div>
                <div class="pr-3"><strong>237</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </header><!-- end row -->
    <section id="posts" class="row pt-4">
        <article class="col-4"><img class="w-100" src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/e35/c95.0.560.560a/90344301_211031316652445_7269604846886049147_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&_nc_cat=105&_nc_ohc=Xyp22mZzBakAX9on9MG&oh=be5c629853ec5effd2dbf7cebf832c66&oe=5EA2238E" alt=""></article>
        <article class="col-4"><img class="w-100" src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/e35/c33.0.558.558a/89485502_198087498118276_8717397081789116228_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&_nc_cat=104&_nc_ohc=SmJS9y65pAQAX-CG64a&oh=d7233e1372409998131e220a257a2741&oe=5EA45387" alt=""></article>
        <article class="col-4"><img class="w-100" src="https://scontent-lga3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/88374782_543733416501650_6638052850750298038_n.jpg?_nc_ht=scontent-lga3-1.cdninstagram.com&_nc_cat=102&_nc_ohc=CnsfGm2y3SMAX81khES&oh=804a5f641c8b0fc488426bd9e5084c7a&oe=5E9ABE49" alt=""></article>

    </section>
</div><!-- end container -->
@endsection
