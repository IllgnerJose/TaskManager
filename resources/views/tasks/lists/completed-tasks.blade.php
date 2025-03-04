<h3>Completed Tasks</h3>
<ul class="list-group py-3">
    @foreach($tasks as $task)
        @if($task->completed)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <input class="form-check-input disable" type="checkbox" name="completed" id="completed" checked disabled>
                    <label class="px-2" for="completed"><s>{{$task->description}}</s></label>
                </div>
            </li>
        @endif
    @endforeach
</ul>
