<ul class="list-group">
    @forelse($tasks as $task)
        <li class="list-group-item d-flex justify-content-between">
            <div>
                <input class="form-check-input" type="checkbox" name="task" id="task">
                <label for="task">{{$task->description}}</label>
            </div>
            <div class="d-flex gap-2">
                <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                </form>
                <i class="btn btn-outline-primary bi bi-pencil-fill"></i>
            </div>
        </li>
    @empty
        <li>Add a task!</li>
    @endforelse
</ul>

<ul class="list-group">
    <li class="list-group-item" role="button"><i class="bi bi-plus-circle-dotted"></i> Adicionar nova tarefa</li>
</ul>

<form action="{{route('tasks.store')}}" method="POST" class="p-3 d-flex gap-2">
    @csrf
    <input class="form-control" name="description" type="text" placeholder="Task description...">
    <button class="btn btn-outline-success">Save</button>
    <button class="btn btn-outline-danger">Cancel</button>
</form>
