<?php

use App\Models\Task;

test("can create a task", function() {
    $task = [
        "description" => "wake up",
    ];

    $this->post(route("tasks.store", $task))
        ->assertRedirect();

    $lastTask = Task::latest()->first();
    expect($lastTask)
        ->description->toBe($task["description"])
        ->completed->toBe(0);
});

test("can load the task list page", function () {
    $this->get(route("tasks.index"))
        ->assertStatus(200);
});
