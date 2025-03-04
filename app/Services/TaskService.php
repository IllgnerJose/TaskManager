<?php

namespace App\Services;
use App\Contracts\Services\TaskServiceInterface;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Support\Collection;
use App\Repositories\TaskRepository;

class TaskService implements TaskServiceInterface
{
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository)
    {
        $this->taskRepository = $taskRepository;
    }

    public function storeTask(StoreTaskRequest $request): void
    {
        $this->taskRepository->store($request);
    }

    public function updateTask(StoreTaskRequest $request, Task $task): void
    {
        $this->taskRepository->update($request, $task);
    }

    public function deleteTask(Task $task): void
    {
        $this->taskRepository->delete($task);
    }

    public function completeTask(StoreTaskRequest $request, Task $task): void
    {
        $this->taskRepository->update($request, $task);
    }

    public function getAllTasks(): Collection
    {
        return $this->taskRepository->all();
    }
}
