<?php

class TodoController
{

    public function index()
    {
        $taskList = App::get('query')->selectAll('todo');

        include "views/todo.view.php";
    }

    public function add()

    {
        if ($_POST['task']) {
            $title = $_POST['task'];

            App::get('query')->insert('todo', [
                'title' => $title,
            ]);

        }
        Request::goBack();
    }

    public function update()
    {
        if ($_POST['select']&&$_POST['complete']) {
            $id = "checked";
            App::get('query')->update('todo', $_POST, [
                'id' => $id

                // $_POST['select'];  удалить или сохранить
                // $_POST['complete']; массив ID

            ]);
        }

        Request::goBack();
    }
}