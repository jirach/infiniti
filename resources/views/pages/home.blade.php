@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent
    <h1>This is pages.home</h1>
    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <p>This is my body content.</p>
@stop