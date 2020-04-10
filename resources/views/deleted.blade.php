@extends('layouts.app')

@section('content')

    @if (count($messages) > 0)
        <ul class="list-group">
            @foreach($messages as $message)
                <li class="list-group-item">
                    <strong>From: {{ $message->userFrom->name }}, {{ $message->userFrom->email }} |
                        Subject: {{ $message->subject }}
                    </strong>
                    <a href="{{ route('return', $message->id) }}" class="btn btn-sm btn-info float-right">Return message to inbox</a>
                </li>
            @endforeach
        </ul>
    @else
        No Messages
    @endif

@endsection
