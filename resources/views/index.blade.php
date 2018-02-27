@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<div class="row"> 
    @foreach($response as $item)
    <p>BITCOIN: {{ $item }}</p>
    <p id="bitcoin"></p>
    @endforeach
</div>

@endsection


