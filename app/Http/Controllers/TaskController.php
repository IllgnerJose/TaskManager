<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Services\TaskService;
use App\Http\Requests\StoreTaskRequest;

class TaskController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index() : View
    {
        $tasks = $this->taskService->getAllTasks();
        return view('tasks.index', compact('tasks'));
    }

    public function store(StoreTaskRequest $request) : RedirectResponse
    {
        $this->taskService->storeTask($request);
        return to_route('tasks.index');
    }

    public function edit()
    {

    }

    public function destroy()
    {

    }
}
