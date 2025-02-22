<?php

namespace App\Repositories;

use App\Contracts\Repositories\RepositoryInterface;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Task;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;

class TaskRepository implements RepositoryInterface
{
    protected $taskModel;

    public function __construct(Task $taskModel){
        $this->taskModel = $taskModel;
    }

    public function store(FormRequest $request): void
    {
        $this->taskModel->create($request->validated());
    }

    public function update(FormRequest $request, Model $model): void
    {
        $model->update($request->validated());
    }

    public function delete(Model $model): void
    {
       $model->delete();
    }

    public function all(): Collection
    {
        return $this->taskModel->all();
    }
}
