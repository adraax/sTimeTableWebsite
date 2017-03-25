<?php

namespace App\Http\Controllers;

use App\Bug;
use App\Http\Requests\BugCreateRequest;
use App\Http\Requests\BugUpdateRequest;
use App\Repositories\BugRepository;

class BugController extends Controller
{
    protected $nbrPerPage = 10;
    private $bugRepository;

    public function __construct(BugRepository $bugRepository)
    {
        $this->bugRepository = $bugRepository;
        $this->middleware('auth');
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
        $bugs = $this->bugRepository->getPaginate($this->nbrPerPage);
        $links = $bugs->render();

        $open = Bug::where('status', '<>', 'close')->count();
        $close = Bug::where('status', 'close')->count();

        return view('bug.index', compact('bugs', 'links', 'open', 'close'));
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
        return redirect('bug')->withOk("Le bug " . $bug->title . " a été créé.");
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
        //
    }

    public function update(BugUpdateRequest $request, $id)
    {

        $this->bugRepository->update($id, $request->all());
        return redirect('bug');

        //dd($request);
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
