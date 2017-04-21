<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    protected $nbrPerPage = 10;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbrPerPage);
        $links = $users->render();

        return view('user.index', compact('users', 'links'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(UserCreateRequest $request)
    {
        $this->setAdmin($request);

        $user = $this->userRepository->store($request->all());

        return redirect('user')->withOk("L'utilisateur " . $user->name . " a été créé.");
    }

    private function setAdmin($request)
    {
        if (!$request->has('admin')) {
            $request->merge(['admin' => 0]);
        }
    }

    public function show($id)
    {
        $user = $this->userRepository->getById($id);

        return view('user.show', compact('user'));
    }

    public function edit($id)
    {
        $user = $this->userRepository->getById($id);

        return view('user.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $id)
    {
        $this->setAdmin($request);
        $this->setBug($request);
        $this->setComment($request);
        $this->setNews($request);

        $this->userRepository->update($id, $request->all());

        return redirect('user')->withOk("L'utilisateur " . $request->input('name') . " a été modifié.");
    }

    private function setBug($request)
    {
        if (!$request->has('notifyBug')) {
            $request->merge(['notifyBug' => 0]);
        }
    }

    private function setComment($request)
    {
        if (!$request->has('notifyComment')) {
            $request->merge(['notifyComment' => 0]);
        }
    }

    private function setNews($request)
    {
        if (!$request->has('receiveNews')) {
            $request->merge(['receiveNews' => 0]);
        }
    }

    public function destroy($id)
    {
        $this->userRepository->destroy($id);

        return redirect()->back();
    }

}