@extends('layouts.app')

@section('content')

    @if (count($messages) > 0)
        <ul class="list-group">
            @foreach($messages as $message)
                <a href="{{ route('read', $message->id) }}">
                    <li class="list-group-item">
                        <strong>@if (isset($message->created_at)) {{$message->created_at->format('M d')}} @endif - From: {{ $message->userFrom->name }}, {{ $message->userFrom->email }} |
                            Subject: {{ $message->subject }}
                        </strong>
                    </li>
                </a>
            @endforeach
        </ul>
    @else
        No Messages
    @endif

@endsection
