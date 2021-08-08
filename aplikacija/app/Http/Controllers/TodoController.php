<?php

namespace App\Http\Controllers;

use App\Models\TodoItem;
use Illuminate\Http\Request;
use App\managers\TodoItemsManager;

class TodoController extends Controller
{
    public function __construct(private TodoItemsmanager $todoManager)
    {
    }

    /**
     * TodoController constructor.
     * @param TodoItemsmanager $todoManager
     */


    public function list(Request $request)
    {
        if ($request->get('new') === 'true') {
            $items = $this->todoManager->getNewAll();
        } else {
            $items = $this->todoManager->getDoneAll();
        }

        return view('list', ['list' => $items]);
    }


    public function edit(TodoItem $todoItem)
    {
        return view('todo-edit', $todoItem);
}
    public function done(TodoItem $todoItem)
    {
        $todoItem->update(['status' => TodoItem::STATE_DONE]);
        return redirect(route('todo.list'));
    }

    public function update(TodoItem $todoItem, Request $request)
    {
        $todoItem->update($request->toArray());
        return redirect(route('todo.list'));
    }

}
