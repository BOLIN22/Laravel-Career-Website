@extends('Ideas.layout')

@section('content')

    <div class="container">
        <h1 class="idea-title">{{ $idea->title }}</h1>
            <p class="idea-display"><strong>Base:</strong> {{ $idea->destination }}</p>
            <p class="idea-display"><strong>Interview Date:</strong> {{ date('d/m/Y', strtotime($idea->date)) }} </p>
            <p class="idea-display"><strong>Content:</strong> {{ $idea->interview_content }}</p>
            <p class="idea-display"><strong>Feeling:</strong> {{ $idea->interview_feeling }}</p>
            <p class="idea-display"><strong>Author:</strong> {{ $idea->user->name }}</p>

        <div id="wrapper">
            <div id="menu">
                <p class="welcome">Welcome </p>
            </div>
            <div id="chatbox">
                @foreach ($comments as $comment)
                    <div class="comment">
                        <p><strong>{{ $comment->user->name }}</strong>: {{ $comment->content }}</p>
                        <p class="comment-time">Published at: {{ $comment->created_at }}</p>
                        <!-- <p class="comment-time">{{ $comment->created_at->format('Y-m-d H:i:s') }}</p> -->
                    </div>
                @endforeach
            </div>
                <form class="commentform" id="commentForm" >
                <!-- method="post" action="{{ route('comments.store', ['id' => $idea->id]) }}" -->
                @csrf
                    <input name="idea_id" type="hidden" value="{{ $idea->id }}">
                    <input name="content" type="text" id="usermsg" placeholder="Enter your comments here" />
                    <button type="submit" id="submitmsg">Send</button>
                </form>
        </div>

    </div>


    <script>
        var ideaId = {{ $idea->id }};
        var destination = "{{ $idea->destination }}"; //Use the Blade template engine to inject server-side destination names into JavaScript variables
    </script>
    <script src="{{ asset('js/comment.js') }}"></script>
    
@endsection


    




