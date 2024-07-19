<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\HTTP\Response;
use Illuminate\View\View;
use Illuminate\HTTP\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class CareerController extends Controller
{

    public function index()
    {
        $ideas = Idea::with('user')->paginate(5); // use with method to load user

        return view('ideas.index', compact('ideas'));
    }

  

    public function create()
    {
        return view('Ideas.create');
    }

   

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'destination' => 'required|string',
            'date' => 'required|date',
            'interview_content' => 'required|string',
            'interview_feeling' => 'required|string',
        ]);
        
        $user_id = Auth::id();

        $idea=Idea::create([
            'title' => $request->title,
            'destination' => $request->destination,
            'date' => $request->date,
            'interview_content' => $request->interview_content,
            'interview_feeling' => $request->interview_feeling,
            'user_id' => $user_id,
        ]);
         
        return redirect()->route('ideas.comment',['id'=>$idea->id])
                        ->with('idea', $idea);
       
        }   



    public function show()
    {
        $ideas = Auth::user()->ideas;
        return view('ideas.show', ['ideas' => $ideas]);
    }

    

    public function edit($id)
    {
        $idea = Auth::user()->ideas()->findOrFail($id);
        // $idea = Idea::findOrFail($id);
        return view('ideas.edit', compact('idea'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'destination' => 'required|string',
            'date' => 'required|date',
            'interview_content' => 'required|string',
            'interview_feeling' => 'required|string',
        ]);

        $idea = Auth::user()->ideas()->findOrFail($id);

        // make sure the idea belongs to logged user
        if ($idea->user_id !== Auth::id()) {
            abort(403); // if not, return 403 Forbidden error
        }
        
        $idea->update([
            'title' => $request->title,
            'destination' => $request->destination,
            'date' => $request->date,
            'interview_content' => $request->interview_content,
            'interview_feeling' => $request->interview_feeling,
        ]);

        return redirect()->route('ideas.show', $idea->id)->with('success', 'Idea updated successfully.');
    }
    


    public function destroy(string $id)
    {
        $idea = Idea::findOrFail($id);

        $idea->delete();

        return redirect()->route('ideas.show')
                        ->with('success', 'Idea deleted successfully');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function comment(Request $request, $id)
    {
        $idea = Idea::findOrFail($id);
        $comments = Comment::where('idea_id', $id)->latest()->get();

        // Check if the request expects a JSON response
        if ($request->expectsJson()) {
            $html = '<div id="chatbox">';
            foreach ($comments as $comment) {
                $html .= '<div class="comment">';
                $html .= '<p><strong>' . $comment->user->name . '</strong>: ' . $comment->content . '</p>';
                $html .= '<p class="comment-time">Published at: ' . $comment->created_at->format('Y-m-d H:i:s') . '</p>';
                $html .= '</div>';
            }
            $html .= '</div>';

            return response()->json(['html' => $html]);
        }

        return view('Ideas.comment', compact('idea', 'comments'));
    }

    public function storeComment(Request $request, $id)
    {
        $request->validate([
            'content' => 'required|string|max:255',
        ]);

        $idea = Idea::findOrFail($id);

        $comment = new Comment();
        $comment->idea_id = $idea->id;
        $comment->content = $request->content;
        $comment->user_id = Auth::id();
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }

    public function showComments($id)
    {
        $idea = Idea::findOrFail($id);
        $comments = $idea->comments()->latest()->get();

        $html = '<div id="chatbox">';
        foreach ($comments as $comment) {
            $html .= '<div class="comment">';
            $html .= '<p><strong>' . $comment->user->name . '</strong>: ' . $comment->content . '</p>';
            $html .= '<p class="comment-time">Published at: ' . $comment->created_at->format('Y-m-d H:i:s') . '</p>';
            $html .= '</div>';
        }
        $html .= '</div>';

        // Return the HTML content
        return Response::json(['html' => $html]);
    }

    public function search(Request $request)
    {
        // Get the search comdition and keywords
        $criteria = $request->input('criteria');
        $keyword = $request->input('q');

        // do the search
        if ($criteria === 'destination') {
            $ideas = Idea::where('destination', 'like', "%{$keyword}%")->get();
        } elseif ($criteria === 'title') {
            $ideas = Idea::where('title', 'like', "%{$keyword}%")->get();
        } else {
            $ideas = Idea::where('destination', 'like', "%{$keyword}%")->get();
        }

        // Count the number of matching records
        $totalMatches = $ideas->count();

        // Return the result view and transmit the data
        return view('ideas.search', compact('ideas', 'keyword', 'totalMatches'));
    }
}