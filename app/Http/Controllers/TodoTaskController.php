<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoTaskController extends Controller
{
    public function index()
    {
        $tasks = [
            [
                'task' => 'Task1',
                'tanggal' => '2022-01-01',
            ],
            [
                'task' => 'Task2',
                'tanggal' => '2022-01-02',
            ]
        ];

        return view('home', [
            'tasks' => $tasks,
        ]);
    }

    public function tambah(Request $request)
    {
        $tasks = [
            [
                'task' => 'Task1',
                'tanggal' => '2022-01-01',
            ],
            [
                'task' => 'Task2',
                'tanggal' => '2022-01-02',
            ]
        ];

        $tasks[] = [
            'task' => $request->task,
            'tanggal' => '2024-03-14'
        ];

        return view('home',[
            'tasks' => $tasks,
        ]);
    }
}
