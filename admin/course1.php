
<?php
include ('header.php');
include ('sidebar.php');

?>
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Course Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertcourse.php" method="POST" enctype="multipart/form-data">



                    <div class="modal-body">
                        <div class="form-group">
                            <label> Course  Name </label>
                            <input type="text" name="course_name" class="form-control" placeholder="Enter course name" required>
                        </div>
                    </div>




<div class="form-group">
   

<input type="file" class="form-control" name="image" placeholder="Image" style="height: 70px;  padding-top:5px;" required>
</div>

<div class="form-group">
<input type="text" class="form-control" name="price" placeholder="Price" required>
</div>

<div class="form-group">
<textarea class="form-control" name="description" placeholder="Description" required></textarea>
</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Edit Product Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatecourse.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> course Name </label>
                            <input type="text" name="course_name" id="course_name" class="form-control"
                                placeholder="Enter course Name">
                        </div>



                        


<div class="form-group">
    <label> image </label>
    <input type="file" name="image" id="image" class="form-control"placeholder="Enter First Name">
    <img id="oldimage" src="" style="height:70px;width:70px;">
    <input type="hidden" name="oldimagename" id="oldimagename" class="form-control" />
</div>
<div class="form-group">
<input type="text" class="form-control" id="price" name="price" placeholder="Price">
</div>
<div class="form-group">
<textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
</div>                 
      </div>          
                    
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Course Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecourse.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Data ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- VIEW POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> View Course Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecourse.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="course_name"> <?php echo ''; ?> </h4>
                        <h4 id="image"> <?php echo ''; ?> </h4>
                        <h4 id="price"> <?php echo ''; ?> </h4>
                        <h4 id="description"> <?php echo ''; ?> </h4>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="jumbotron" style="width:1250px; float: right;  margin-right: -120px; background-color: cadetblue;">
            <div class="card">
                
            </div>
            <div class="card">
                <div class="card-body"style="background-color: lightgrey;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD Course
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body" style="overflow: scroll;background-color: lightgrey;">

                    <?php
               

                $query = "SELECT * FROM  course where status=0";
                $query_run = mysqli_query($con, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-white">
                        <thead>
                            <tr>
                            
                                <th scope="col">Course Name</th>
                                <th scope="col">Image</th>
                                <th scope="col">Price</th>
                                <th scope="col">Description</th>
                                                
                                <th colspan="2">Action</th>
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {

            ?>
                        <tbody>
                            <tr>
                                <td hidden> <?php echo $row['course_id']; ?> </td>
                                <td> <?php echo $row['course_name']; ?> </td>
                                <td hidden><?php echo $row['image']; ?></td>
     <td><img src="courseimage/<?php echo $row['image'];?>" style="height:70px;width:70px;"></td>
                                                            
                                <td> <?php echo $row['price']; ?> </td>
                                <td > <?php echo $row['description']; ?> </td>
                                <td rowspan="2" >
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                    <button type="button" class="btn btn-danger deletebtn"> DELETE </button>
                                </td>
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    


    

    <script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);

            });
        });
    </script>

    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
                $('#course_name').val(data[1]);
                $('#image').attr("src","courseimage/"+data[2]);
                $('#oldimage').attr("src","courseimage/"+data[2]);
                $('#oldimagename').attr("value",data[2]);
                $('#price').val(data[4]);
                $('#description').val(data[5]);
                                       
            });
        });
    </script>

<?php
include ('footer.php');
?>
</body>
</html>