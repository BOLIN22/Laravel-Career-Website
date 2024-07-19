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

<section class="shell">
<table class="table-useridea">
    <thead>
        <tr>
            
            <th>Title</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Interview_content</th>
            <th>Interview_feeling</th>
            <th width="280px">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ideas as $idea)
        <tr>
            
            <td>{{ $idea->title }}</td>
            <td>{{ $idea->destination }}</td>
            <td>{{ $idea->date }}</td>
            <td>{{ $idea->interview_content }}</td>
            <td>{{ $idea->interview_feeling }}</td>
            <td>
                <div class="action-buttons">
                    <a href="{{ route('ideas.edit', $idea->id) }}" class="btn btn-edit">Edit</a>
                    <form action="{{ route('ideas.destroy', $idea->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this idea?')">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</section>
@endsection
