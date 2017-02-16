@extends('layouts.public')

@section('title')
    {{$package->package_name}}
@endsection

@section('body')
    {{$package->description}}
    @endsection