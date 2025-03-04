<h3>Uncompleted Tasks</h3>
<ul class="list-group py-3">
    @foreach($tasks as $task)
        @if(!$task->completed)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <form action="{{route('tasks.complete', $task->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input onclick="form.submit()" value="1" class="form-check-input" type="checkbox" name="completed" id="completed" @checked($task->completed)>
                        <label class="px-2" for="completed">{{$task->description}}</label>
                    </form>
                </div>
                <div class="d-flex gap-2">
                    <form action="{{route('tasks.destroy', $task->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                    </form>
                    <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-outline-primary bi bi-pencil-fill"></a>
                </div>
            </li>
        @endif
    @endforeach
</ul>
