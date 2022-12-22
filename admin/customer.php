
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
                    <h5 class="modal-title" id="exampleModalLabel">Add  Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    

    <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
   
    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Customer Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecustomer.php" method="POST" enctype="multipart/form-data">

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
                    <h5 class="modal-title" id="exampleModalLabel"> View Student Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deletecustomer.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->

                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> CLOSE </button>
                        <!-- <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button> -->
                    </div>
                </form>

            </div>
        </div>
    </div>


    <div class="container" >
        <div class="jumbotron" style="width:1250px; float: right;  margin-right: -120px; background-color: cadetblue;">
        <?php
        $q = "SELECT *FROM  customer where status=0";
        $result_of_customer = mysqli_query($con, $q);
        $row=mysqli_num_rows($result_of_customer);

        echo '<p  style="color: white; ">Total Customer: ' .$row.'</p>';
        ?>
        <div class="card">
                
            </div>
           

            <div class="card">
                <div class="card-body" style="overflow: scroll;background-color: lightgrey;">

                    <?php
               

                $query = "SELECT *FROM  customer where status=0";
                $query_run = mysqli_query($con, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-white">
                        <thead>
                            <tr>
                                <th scope="col" hidden>Custmer id</th>
                                <th scope="col">Custmer Name</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Email Id</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Address</th>
                                <th scope="col">City</th>
                                <th scope="col">Pincode</th>
                                <th scope="col">Date Of Birth</th>
                                <th scope="col">Create Date</th>
                                
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
                                <td hidden> <?php echo $row['customer_id']; ?> </td>

                                <td> <?php echo $row['cust_fullname']; ?> </td>
                                <td> <?php echo $row['mob_number']; ?> </td>
                                <td> <?php echo $row['email_id']; ?> </td>
                                <td> <?php echo $row['gender']; ?> </td>
                                <td> <?php echo $row['address']; ?> </td>
                                <td> <?php echo $row['city']; ?> </td>
                                <td> <?php echo $row['pin_code']; ?> </td>
                                <td> <?php echo $row['dob']; ?> </td>
                                <td> <?php echo $row['create_date']; ?> </td>
                       
                                
                                
                                <td>
                                    
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
                
                $('#cust_fullname').val(data[1]);
                $('#mob_number').val(data[2]);
                $('#email_id').val(data[3]);
                $('#gender').val(data[4]);
                $('#address').val(data[5]);
                $('#city').val(data[6]);
                $('#pin_code').val(data[7]);
                $('#dob').val(data[8]);
                $('#create_date').val(data[11]);

                
                           
            });
        });
    </script>

<?php
include ('footer.php');
?>
</body>
</html>