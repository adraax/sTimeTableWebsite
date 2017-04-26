<?php

namespace App\Http\Controllers;

use App\Bug;
use App\Http\Requests\BugCreateRequest;
use App\Http\Requests\BugUpdateRequest;
use App\Mail\BugCreated;
use App\Repositories\BugRepository;
use App\User;
use Illuminate\Support\Facades\Mail;

class BugController extends Controller
{
    protected $nbrPerPage = 10;
    private $bugRepository;

    public function __construct(BugRepository $bugRepository)
    {
        $this->bugRepository = $bugRepository;
        $this->middleware('auth')->except(['index', 'show']);
        /*setlocale(LC_TIME, 'French');
        Carbon::setLocale(Config::get('app.locale'));
        Carbon::setToStringFormat('d/m/Y à H:i:s');*/
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bugs = Bug::where('status', '<>', 'close')->paginate(10);

        $open = Bug::where('status', '<>', 'close')->count();
        $close = Bug::where('status', 'close')->count();

        return view('bug.index', compact('bugs', 'open', 'close'));
    }

    public function closed()
    {
        $bugs = Bug::where('status', '=', 'close')->paginate(10);

        $open = Bug::where('status', '<>', 'close')->count();
        $close = Bug::where('status', 'close')->count();

        return view('bug.index', compact('bugs', 'open', 'close'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bug.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BugCreateRequest $request)
    {
        $bug = $this->bugRepository->store($request->all());
        $users = User::where('admin', '1')->get();

        foreach ($users as $user) {
            Mail::to($user)->queue(new BugCreated($bug));
        }

        return redirect('/bug')->withOk("Le bug " . $bug->title . " a été créé.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bug = $this->bugRepository->getById($id);

        return view('bug.show', compact('bug'));
    }

    public function edit($id)
    {
        $bug = $this->bugRepository->getById($id);

        return view('bug.update', compact('bug'));
    }

    public function update(BugUpdateRequest $request, $id)
    {

        $this->bugRepository->update($id, $request->all());
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
        //
    }
}
