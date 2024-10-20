<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    // List all items
    public function index()
    {
        return view('welcome', ['ListItems' => TodoList::all()]);
    }

    // Add a new Todo item
    public function saveItem(Request $request)
    {
        $request->validate([
            'listItem' => 'required|string|max:255',
        ]);

        $newTodoList = new TodoList;
        $newTodoList->name = $request->listItem;
        $newTodoList->is_complete = 0;
        $newTodoList->save();

        return back()->with('success', 'Item created successfully!');
    }

    // Edit an existing Todo item
    public function editItem(Request $request, $id)
    {
        $item = TodoList::findOrFail($id);
        return view('edit', ['item' => $item]);
    }

    // Update the Todo item
    public function updateItem(Request $request, $id)
    {
        $request->validate([
            'listItem' => 'required|string|max:255',
        ]);

        $item = TodoList::findOrFail($id);
        $item->name = $request->listItem;
        $item->save();

        return redirect('/')->with('success', 'Item updated successfully!');
    }

    // Delete a Todo item
    public function deleteItem($id)
    {
        $item = TodoList::findOrFail($id);
        $item->delete();

        return back()->with('success', 'Item deleted successfully!');
    }

    // Mark a Todo item as completed
    public function toggleComplete($id)
    {
        $item = TodoList::findOrFail($id);
        $item->is_complete = !$item->is_complete; // Toggle the completion status
        $item->save();

        return back()->with('success', 'Item status updated successfully!');
    }
}
