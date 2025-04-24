@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>New Events</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert" style="margin-bottom: 20px; margin-top: 20px;">
        {{ $message }}
    </div>
    @endif




    @foreach ($events as $event)
    <div class="card " style="margin-top: 10px;">
        <div class="card-body">
            <h5 class="card-title">{{ $event->name }}</h5>
            <p class="card-text">{!! $event->detail!!}</p>

            <form action="{{ route('events.destroy',$event->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('events.show',$event->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>

    @endforeach



</div>

{!! $events->links() !!}

@endsection
