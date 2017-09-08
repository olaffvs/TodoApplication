<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h2 class="header-text">A To-Do app for everyone</h2>
        <div class="container">
                <div class="workdivs">
                    <div class="headers">
                        <h3>To-Do List</h3>
                    </div>
                    <div class="workdivs-left">
                        @foreach ($tasks_todo as $task)
                            <div class="items">
                                <p class="items-title">
                                    {{ $task->title }}
                                </p>
                            <br>
                                <p class="items-desc">
                                    {{ $task->body }}
                                </p>
                                <form action="/update">
                                    <input type="hidden" name="id" value="{{ $task->id }}">
                                    <input type="submit" value="Done">
                                </form>
                                <form action="/delete">
                                    <input type="hidden" name="id" value="{{ $task->id }}">
                                    <button type="submit" class="delete-button" value="Delete">Delete</button>
                                </form>  
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="workdivs">
                    <div class="headers">
                        <h3>Done list</h3>
                    </div>
                    <div class="workdivs-center">
                    @foreach ($tasks_done as $task)
                            <div class="items">
                                <p class="items-title">
                                    {{ $task->title }}
                                </p>
                            <br>
                                <p class="items-desc">
                                    {{ $task->body }}
                                </p>
                                <form action="/update_reset">
                                    <input type="hidden" name="id" value="{{ $task->id }}">
                                    <input type="submit" value="Not done">
                                </form>
                                <form action="/delete">
                                    <input type="hidden" name="id" value="{{ $task->id }}">
                                    <button type="submit" class="delete-button" value="Delete">Delete</button>
                                </form>  
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="workdivs-add">
                    <div class="headers">
                        <h3>Add item</h3>
                    </div>
                    <div class="workdivs-right">
                        <form action="/insert" method="post">
                            {{ csrf_field() }}
                            <label for="titleframe">Title</label><br>
                            <input type="text" id="titleframe" name="titleframe" placeholder="Title...">
                            <br><br>
                            <label for="descframe">Description</label><br>
                            <textarea rows="4" cols="50" id="descframe" name="descframe" placeholder="Description..."></textarea>
                            <br><br>
                            <input type="submit" value="Add item">
                        </form>
                    </div
                </div>
            </div>
        </div>
    </body>
</html>
