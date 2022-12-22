
<?php
include ('header.php');
?>
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertproduct.php" method="POST" enctype="multipart/form-data">

<!------forign Key------------>
<select name="category_id"  class="form-control" style="height:50px;" >
            <option value="0" >Select category    </option>
            <?php
            
            if(isset($_SERVER['PHP_SELF']))
            {
                $sql = "select * from beauty_category where status=0";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<option value = '$row[0]'>$row[1]</option>";
                }
            }
            ?>
            </select>
<!----------end forign key---->

                    <div class="modal-body">
                        <div class="form-group">
                            <label> Product  Name </label>
                            <input type="text" name="product_name" class="form-control" placeholder="Enter product name">
                        </div>
                    </div>




<div class="form-group">
   

<input type="file" class="form-control" name="image1" placeholder="Image1" style="height: 70px;  padding-top:5px;">
</div>
<div class="form-group" >
<input type="file" class="form-control" name="image2" placeholder="Image2" style="height: 70px;  padding-top:5px;">
</div>
<div class="form-group">
<input type="text" class="form-control" name="price" placeholder="Price">
</div>
<div class="form-group">
<input type="text" class="form-control" name="discount" placeholder="Discount">
</div>
<div class="form-group">
<input type="text" class="form-control" name="total_price" placeholder="Total Price">
</div>
<div class="form-group">
<textarea class="form-control" name="description" placeholder="Description"></textarea>
</div>
<div class="form-group">
<textarea class="form-control" name="ingredients" placeholder="Ingredients"></textarea>
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

                <form action="updateproduct.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label> product Name </label>
                            <input type="text" name="product_name" id="product_name" class="form-control"
                                placeholder="Enter product Name">
                        </div>



                        


<div class="form-group">
    <label> image1 </label>
    <input type="file" name="image1" id="image1" class="form-control"placeholder="Enter First Name">
    <img id="oldimage1" src="" style="height:70px;width:70px;">
    <input type="hidden" name="oldimagename1" id="oldimagename1" class="form-control" />
</div>

<div class="form-group">
    <label> image2 </label>
    <input type="file" name="image2" id="image2" class="form-control"placeholder="Enter Second Name">
    <img id="oldimage2" src="" style="height:70px;width:70px;">
    <input type="hidden" name="oldimagename2" id="oldimagename2" class="form-control" />
</div>


<div class="form-group">
<input type="text" class="form-control" id="price" name="price" placeholder="Price">
</div>
<div class="form-group">
<input type="text" class="form-control" id="discount" name="discount" placeholder="Discount">
</div>
<div class="form-group">
<input type="text" class="form-control" id="total_price" name="total_price" placeholder="Total Price">
</div>
<div class="form-group">
<textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
</div>
<div class="form-group">
<textarea class="form-control" id="ingredients" name="ingredients" placeholder="Ingredients"></textarea>
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
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Product Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deleteproduct.php" method="POST" enctype="multipart/form-data">

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
                    <h5 class="modal-title" id="exampleModalLabel"> View product Data </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="deleteproduct.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="text" name="view_id" id="view_id">

                        <!-- <p id="fname"> </p> -->
                        <h4 id="product_name"> <?php echo ''; ?> </h4>
                        <h4 id="image1"> <?php echo ''; ?> </h4>
                        <h4 id="image2"> <?php echo ''; ?> </h4>
                        <h4 id="price"> <?php echo ''; ?> </h4>
                        <h4 id="discount"> <?php echo ''; ?> </h4>
                        <h4 id="total_price"> <?php echo ''; ?> </h4>
                        <h4 id="description"> <?php echo ''; ?> </h4>
                        <h4 id="ingredients"> <?php echo ''; ?> </h4>
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
        <div class="jumbotron" style="width:1300px;">
            <div class="card">
                
            </div>
            <div class="card">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
                        ADD Product
                    </button>
                </div>
            </div>

            <div class="card">
                <div class="card-body" style="overflow: scroll;">

                    <?php
               

                $query = "SELECT * FROM  beauty_product where status=0";
                $query_run = mysqli_query($con, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-white">
                        <thead>
                            <tr>
                            
                                <th scope="col">product name</th>
                                <th scope="col">image1</th>
                                <th scope="col">image2</th>
                                <th scope="col">price</th>
                                <th scope="col">discount</th>
                                <th scope="col">total price</th>
                                <th scope="col">description</th>
                                <th scope="col">ingredients</th>
                                
                                <th scope="col"> EDIT </th>
                                <th scope="col"> DELETE </th>
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
                                <td hidden> <?php echo $row['category_id']; ?> </td>
                                <td hidden> <?php echo $row['product_id']; ?> </td>
                                <td> <?php echo $row['product_name']; ?> </td>
                                <td hidden><?php echo $row['image1']; ?></td>
     <td><img src="productimage/<?php echo $row['image1'];?>" style="height:70px;width:70px;"></td>
                                <td hidden><?php echo $row['image2']; ?></td>
     <td><img src="productimage/<?php echo $row['image2'];?>" style="height:70px;width:70px;"></td>
                                
                                <td> <?php echo $row['price']; ?> </td>
                                <td> <?php echo $row['discount']; ?> </td>
                                <td> <?php echo $row['total_price']; ?> </td>
                                <td > <?php echo $row['description']; ?> </td>
                                <td> <?php echo $row['ingredients']; ?> </td>

                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
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
                $('#product_name').val(data[2]);
                $('#image1').attr("src","productimage/"+data[3]);
                $('#oldimage1').attr("src","productimage/"+data[3]);
                $('#oldimagename1').attr("value",data[3]);
                $('#image2').attr("src","productimage/"+data[5]);
                $('#oldimage2').attr("src","productimage/"+data[5]);
                $('#oldimagename2').attr("value",data[5]);
                $('#price').val(data[7]);
                $('#discount').val(data[8]);
                $('#total_price').val(data[9]);
                $('#description').val(data[10]);
                $('#ingredients').val(data[11]);
                           
            });
        });
    </script>

<?php
include ('footer.php');
?>
</body>
</html>