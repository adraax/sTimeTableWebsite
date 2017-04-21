<?php

namespace App\Http\Controllers;

use App\Bug;
use App\Comment;
use App\Http\Requests\CommentCreateRequest;
use App\Mail\CommentCreated;
use App\Repositories\CommentRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;

class CommentController extends Controller
{
    protected $commentRepository;

    protected $nbrPerPage = 10;

    public function __construct(CommentRepository $commentRepository)
    {
        //$this->commentRepository = $commentRepository;
        $this->middleware('auth');
        Carbon::setLocale(Config::get('app.locale'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommentCreateRequest $request)
    {
        $comment = new Comment();
        $comment->fill($request->all());
        $comment->save();

        $bug = Bug::find($comment->bug->id);
        $users = [];
        $users[] = $bug->user;
        $users[] = $request->user();

        if ($request->user()->admin && ($request->user() != $comment->bug->user)) {
            Mail::to($comment->bug->user)->queue(new CommentCreated($comment));
        } elseif ($bug->user->notifyBug) {
            Mail::to($bug->user)->queue(new CommentCreated($comment));
        }

        foreach ($bug->commentsNoTrash as $com) {
            if (!in_array($com->user, $users)) {
                $users[] = $com->user;
                if ($com->user->notifyComment) {
                    Mail::to($com->user)->queue(new CommentCreated($comment));
                }
            }
        }

        return redirect('bug/' . $request->input('bug_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$comment = $this->commentRepository->getById($id);
        $comment = Comment::withTrashed()->find($id);

        return view('comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comment = Comment::withTrashed()->find($id);
        $comment->fill($request->all());
        $comment->save();
        return redirect('bug');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Comment::withTrashed()->find($id)->delete();
        return redirect()->back();
    }

    public function hardDestroy($id)
    {
        Comment::withTrashed()->find($id)->forceDelete();
        return redirect()->back();
    }
}
