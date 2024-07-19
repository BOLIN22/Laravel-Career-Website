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
   
<form action="{{ route('ideas.store') }}" method="POST" class="elegant-aero">
    @csrf
    <h1>Add New Interview Experiences
        <a href="/ideas"> Back</a>
        <span>Please add your interview experiences in the fields.</span>
    </h1>
    <label>
        <span>Title :</span>
        <input id="title" type="text" name="title" placeholder="Title">
    </label>
    <label>
        <span>Destination :</span>
        <input id="destination" type="text" name="destination"  placeholder="Destination">
    </label>
    <label>
        <span>Date :</span>
        <input type="date"  id="date" name="date" placeholder="Date">
    </label>
    <label>
        <span>Content :</span>
        <textarea id="interview_content" name="interview_content" placeholder="Interview_content"></textarea>
    </label>
    <label>
        <span>Feeling :</span>
        <textarea id="interview_feeling" name="interview_feeling" placeholder="Interview_feeling"></textarea>
    </label>
    <label>
        <button type="submit" class="button">Submit</button>
    </label>
   
</form>
@endsection