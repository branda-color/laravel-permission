@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post

                    @role('writer|admin')

                    <a href="{{ route('post.create')}}" class="float-right">New</a>

                    @endrole
                </div>
                <div class="card-body">
                    @foreach($posts as $post)
                    <ul>
                        <li>
                            <a href="#">{{ $post->title }}</a>
                            @can('edit post')
                            <a href="{{route('post.edit',$post->id)}}" class="float-right">Edit</a>
                            @endcan
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @endsection