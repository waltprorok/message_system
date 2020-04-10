@extends('layouts.app')

@section('content')

    @if (count($messages) > 0)
        <ul class="list-group">
            @foreach($messages as $message)
                <li class="list-group-item">To: {{ $message->userTo->name }}, {{ $message->userTo->email }} |
                    Subject: {{ $message->subject }}
                    @if ($message->read)
                        <span class="badge badge-success float-right">READ</span></li>
                @endif
            @endforeach

        </ul>
    @else
        No Messages
    @endif

@endsection
