@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>

                    @endif

                    @if (Auth::user()->type >= 1)
                    <button type="button" class="btn btn-primary">Admin Dashboard</button>
                    <br>
                    <br>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>


        <h1 style="margin-top: 5%;"> All Events</h1>

        @foreach ($events as $event)

        <div class="col-md-20" style="margin-top: 10px;">
            <div class="card">

                <div class="card-body">
                    <h5 class="card-title"><a href="{{ route('events.show',$event->id) }}"> {{ $event->name }}</a></h5>
                    <p class="card-text">{!! $event->detail!!}</p>
                </div>
            </div>
        </div>

        @endforeach


        {!! $events->links() !!}

    </div>
</div>
@endsection
