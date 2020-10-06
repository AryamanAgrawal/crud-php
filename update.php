<!DOCTYPE html>

<?php 

    include 'db.php'; 
    $id = (int) $_GET['id'];
    $sql = "select * from task where id='$id'";
    $rows = $db->query($sql);
    $row = $rows->fetch_assoc();    
    if(isset($_POST['send'])){
        $task = htmlspecialchars($_POST['task']);        
        $sql2 = "update task set name='$task' where id = '$id'";
        $db->query($sql2);
        header('location: index.php');
    }
    
?>

<html>
    <head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>CRUD App</title>
    </head>
    <body>
    
    <div class="container">
        <div class="row" style="margin-top: 70px;">
            <center><h1>Update TODO List</h1></center>
            <div class="col-md-10 col-md-offset-1">
                <table class="table">                
                <hr><br>                           
                    <form method="post">
                        <div class="form-group">
                            <label>Task Name</label>
                            <input type="text" value="<?php echo $row["name"]?>" required name="task" class="form-control">
                        </div>
                        <input type="submit" name="send" value="Update Task" class="btn btn-success">
                    </form>                                
            </div>
        </div>
    </div>

    </body>
</html>