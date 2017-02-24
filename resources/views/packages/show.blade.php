@extends('layouts.public')

@section('title')
    {{$package->package_name}}
@endsection

@section('body')
    {{$package->description}}

<hr>
<div class="comments">
    <ul class="list-group">
    @foreach($package->comments as $comment)
        <li class="list-group">
            <p>{{$comment->created_at->diffForHumans()}}</p>
            {{$comment->review}}
        </li>
        @endforeach
    </ul>
</div>
    @endsection