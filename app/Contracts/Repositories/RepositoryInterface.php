<?php

namespace App\Contracts\Repositories;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface RepositoryInterface
{
    public function create(FormRequest $request) : void;

    public function update(FormRequest $request, Model $model) : void;

    public function delete(Model $model) : void;

    public function all() : Collection;
}
