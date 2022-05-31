<!DOCTYPE html>
<html lang='ar' dir="rtl">

<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.rtl.min.css" integrity="sha384-dc2NSrAXbAkjrdm9IYrX10fQq9SDG6Vjz7nQVKdKcJl3pC+k37e7qJR5MVSCS+wR" crossorigin="anonymous">
    <script src=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        .todo-item {
            display: flex !important;
            margin: 8px 0;
            border-radius: 0;
            background: #f7f7f7;
        }

        .todo-item.completed div {
            text-decoration: line-through;
        }

        .todo-item-remove {
            visibility: hidden;
        }

        .todo-item:hover .todo-item-remove {
            visibility: visible;
        }
    </style>
    <title>Tasks</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card mt-3">
                    <div class="card-header p-3">
                        <form action="task/create" method="POST">
                            <div class="input-group">
                                <input type="text" name="description" class="form-control" placeholder="مهمة جديدة......" required />
                                <button class="btn btn-success" type="submit">حفظ</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body p-3">
                        <ul class="nav nav-pills justify-content-center mb-3">
                            <li class="nav-item">
                               <a href="<?= home() ?>" class="nav-link">الكل</a>
                            </li>

                            <li class="nav-item">
                               <a href="?completed=0" class="nav-link">قيد التنفيذ</a>
                            </li>

                            <li class="nav-item">
                               <a href="?completed=1" class="nav-link">مكتملة</a>
                            </li>
                        </ul>
                        <?php foreach ($tasks as $task) : ?>
                            <div class="todo-item p-2 <?= !$task->completed ?: 'completed' ?>">
                                <div class="p-1">
                                    <a href="task/update?id=<?= $task->id ?>&completed=<?= $task->completed ? '0' : '1' ?>">
                                        <i class="bi fs-5 <?= $task->completed ? 'bi-check-square' : 'bi-clock text-secondary' ?>"></i></a>
                                </div>
                                <div class="flex-fill m-auto p-2">
                                    <?= $task->description ?>
                                </div>
                                <div class="mb-2">
                                    <a href="task/delete?id=<?= $task->id ?>" class="todo-item-remove">
                                        <i class="bi bi-trash text-danger fs-4"></i>
                                    </a>
                                </div>

                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>