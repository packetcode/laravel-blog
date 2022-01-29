@extends('layouts.default')

@section('content')
<div class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="container text-center text-white">
        <div>
            <img src="{{ asset('images/blog-post.svg') }}" class="img-fluid w-50">
        </div>
        <h1 class="mt-5">Packetcode</h1>
        <h6>Coding made Easy</h6>
        <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque quisquam ratione adipisci omnis necessitatibus accusamus cum architecto dignissimos soluta magni sed pariatur placeat officia, iusto voluptatem vel exercitationem ipsa tempora ullam fugit cupiditate sint repellendus ipsam deleniti. Adipisci, aspernatur similique?</em></p>
        <a href="{{ route('posts') }}" class="btn btn-warning btn-lg mt-3">Show Blogs <i class="fas fa-long-arrow-alt-right"></i></a>
    </div>
</div>
@endsection