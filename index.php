<!DOCTYPE html>

<?php 

    include 'db.php'; 
    $sql = "select * from task";
    $rows = $db->query($sql);    

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
            <center><h1>Todo List</h1></center>
            <div class="col-md-10 col-md-offset-1">
                <table class="table">
                <button type="button" data-target="#myModal" data-toggle="modal" class="btn btn-success">Add Task</button>
                <button type="button" class="btn btn-default pull-right">Print</button>
                <hr><br>
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Task</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="add.php">
                                    <div class="form-group">
                                        <label>Task Name</label>
                                        <input type="text" required name="task" class="form-control">
                                    </div>
                                    <input type="submit" name="send" value="Add Task" class="btn btn-success">
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>

                        </div>
                    </div>
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Task Name</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <?php 
                            while($row = $rows->fetch_assoc()):                            
                        ?>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td class="col-md-10"><?php echo $row['name'] ?></td>     
                        <td><a href="" class="btn btn-success">Edit</a></td>
                        <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>              
                        <?php endwhile; ?>          
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </body>
</html>