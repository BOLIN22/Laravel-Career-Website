@extends('Ideas.layout')

@section('content')
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('ideas.update', $idea->id) }}" method="POST" class="elegant-aero">
    @csrf
    @method('PUT')

    <h1>Edit My Interview Experiences
        <a href="{{ route('ideas.show') }}"> Back</a>
        <span>Please use this form to edit your interview experiences.</span>
    </h1>
    <label>
        <span>Title :</span>
        <input id="title" type="text" name="title" placeholder="Title" value="{{ $idea->title }}">
    </label>
    <label>
        <span>Destination :</span>
        <input id="destination" type="text" name="destination"  placeholder="Destination" value="{{ $idea->destination }}">
    </label>
    <label>
        <span>Date :</span>
        <input type="date"  id="date" name="date" placeholder="Date" value="{{ $idea->date}}">
    </label>
    <label>
        <span>Content :</span>
        <textarea id="interview_content" name="interview_content" placeholder="Interview_content">{{ $idea->interview_content }}</textarea>
    </label>
    <label>
        <span>Content :</span>
        <textarea id="interview_feeling" name="interview_feeling" placeholder="Interview_feeling">{{ $idea->interview_feeling }}</textarea>
    </label>
    <label>
        <button type="submit" class="button">Submit</button>
    <label>
   
</form>
@endsection
