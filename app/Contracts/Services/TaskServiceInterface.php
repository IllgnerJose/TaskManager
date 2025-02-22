<?php

namespace App\Contracts\Services;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface TaskServiceInterface
{
    public function createTask(FormRequest $request) : void;

    public function updateTask(FormRequest $request, Model $model) : void;

    public function deleteTask(Model $model) : void;

    public function finishTask(Model $model) : void;

    public function getAllTasks() : void;

}
