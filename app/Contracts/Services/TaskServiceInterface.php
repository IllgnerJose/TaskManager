<?php

namespace App\Contracts\Services;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use Illuminate\Support\Collection;

interface TaskServiceInterface
{
    public function storeTask(StoreTaskRequest $request) : void;

    public function updateTask(StoreTaskRequest $request, Task $task) : void;

    public function deleteTask(Task $task) : void;

    public function completeTask(StoreTaskRequest $request, Task $task) : void;

    public function getAllTasks() : Collection;

}
