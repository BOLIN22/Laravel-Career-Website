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
            <th>Base</th>
            <th>Date</th>
            <th>Interview_content</th>
            <th>Interview_feeling</th>
            <th>Creator</th>
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
            <td>{{ $idea->user->name }}</td>
            <td>
                <div class="action-buttons">
                    <a href="{{ route('ideas.comment', ['id' => $idea->id]) }}" class="btn btn-edit">Comment</a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
    
</table>

<div class="pagination">
    {{ $ideas->links() }}
</div>

</section>
@endsection