@extends('layouts.master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <h1>Control Structures</h1>
        @if(true)
        <p>display's when true</p>
        @else
        <p>Display's if false</p>
        @endif
        <hr>
        @for($i = 0; $i < 5; $i++)
        <p>{{ $i + 1 }} Iteration</p>
        @endfor
    </div>
</div>

@endsection