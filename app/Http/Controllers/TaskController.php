<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Models\Task;
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

    public function create() : View
    {
        return view("tasks.create");
    }

    public function store(StoreTaskRequest $request) : RedirectResponse
    {
        $this->taskService->storeTask($request);
        return to_route('tasks.index');
    }

    public function edit(Task $task) : View
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(StoreTaskRequest $request, Task $task) : RedirectResponse
    {
        $this->taskService->updateTask($request, $task);
        return to_route('tasks.index');
    }

    public function complete(StoreTaskRequest $request, Task $task) : RedirectResponse
    {
        $this->taskService->completeTask($request, $task);
        return to_route('tasks.index');
    }

    public function destroy(Task $task) : RedirectResponse
    {
        $this->taskService->deleteTask($task);
        return to_route('tasks.index');
    }
}
