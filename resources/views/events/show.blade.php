@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Details about {{ $event->name }}</h2>
            </div>
            <div class="pull-right">
            </div>
        </div>
    </div>

    <div class="card" style="margin-top: 2%;">
        <div class="card-body">
            <h5 class="card-title">{{ $event->name }}</h5>

            {!! $event->detail!!}

            <br />
            <br />
            <br />

            <a class="btn btn-primary" href="{{ route('events.index') }}"> Go Back </a>
        </div>
    </div>
</div>
@endsection
