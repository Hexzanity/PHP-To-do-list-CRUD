<?php 
    require('config/db.php');
    require("style/style-add.css");

    if(isset($_POST['submit'])){
        $task_name = mysqli_real_escape_string($db, $_POST['task_name']);
        $task_description = mysqli_real_escape_string($db, $_POST['task_description']);
        $task_due_date = mysqli_real_escape_string($db, $_POST['task_due_date']);
        $task_status = mysqli_real_escape_string($db, $_POST['task_status']);

        $query = "INSERT INTO tasks (task_name, task_description, task_due_date, task_status) 
                    VALUES ('$task_name', '$task_description', '$task_due_date', '$task_status')";

        if (mysqli_query($db, $query)){
            header('Location: index.php');
            exit;
        }else{
            echo 'ERROR:'. mysqli_error($db);
        }
    }
?>
<body>
</body>
<h2 class="card-title">ADD NEW TASK</h2>
<div class="card-body">
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <div class="row">
        <div class="form-group">
            <label>TASK NAME</label>
            <input name="task_name" type="text" class="form-control" placeholder="Input Name Task">
        </div>
        <div class="form-group">
            <label>TASK DESCRIPTION </label>
            <input name="task_description" type="text" class="form-control" placeholder="Input Descrption">
        </div>
        <div class="form-group">
            <label>TASK DUE DATE</label>
            <input name="task_due_date" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label>TASK STATUS</label>
            <select class="form-control" name="task_status">
                <option>Select...</option>
                <option>incomplete</option>
                <option>in progress</option>
                <option>complete</option>
            </select>
        </div>
        <div class="row">
            <button type="submit" name="submit" value="submit" class="btn btn-info btn-fill pull-right">Save</button>
            <div class="clearfix"></div>
        </div>
    </form> 
</div>