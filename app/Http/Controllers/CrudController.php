<?php

namespace App\Http\Controllers;

use App\Http\Requests\CrudRequest;
use App\Models\User;
use App\Services\CrudService;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    protected $crudService;

    public function __construct(CrudService $crudService) 
    {
        $this->crudService = $crudService;        
    }

    public function store(CrudRequest $request)
    {
        $fromRequest = $request->validated();
        $user = $this->crudService->createUser($fromRequest);
        return redirect()->back();
    }

    public function index()
    {
        $users = $this->crudService->getUsers();
        return view('welcome', compact('users'));
    }

    public function show(User $user)
    {
        $user = $this->crudService->getUser($user);
        return view('show', compact('user'));
    }

    public function delete(User $user)
    {
        $user = $this->crudService->deleteUser($user);
        return redirect()->route('index');
    }

    

}
