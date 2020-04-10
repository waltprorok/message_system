@extends('layouts.app')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('send') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="to">To</label>
            <select class="form-control" name="to" id="to">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}, {{$user->email }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" id="subject" name="subject"
                   placeholder="Enter subject" value="{{ $subject }}">
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
