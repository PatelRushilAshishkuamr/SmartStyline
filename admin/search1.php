
<?php
include ('header.php');
include ('sidebar.php');
?>
    <!-- Modal -->
    <div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" 
        aria-hidden="true" >
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                   
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


            </div>
        </div>
    </div>


    <div class="container" >
        <div class="jumbotron" style="width:1250px; float: right;  margin-right: -120px;background-color: cadetblue;">
            <div class="card">
                
            </div>
            

            <div class="card">
                <div class="card-body" style="overflow: scroll;background-color: lightgrey;">

                    <table id="datatableid" class="table table-bordered table-white">
                        <thead>
                            <tr>
                                <th scope="col">Category Name</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Image1</th>
                                <th scope="col">Image2</th>
                                <th scope="col">Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Total price</th>
                                <th scope="col">Description</th>
                                <th scope="col">Ingredients</th>
                                
                            </tr>
                        </thead>
               <?php

if(isset($_GET['search']))
      {
          $search_query=$_GET['query'];

$sql="select * from beauty_product where status=0 and product_name like '%$search_query%'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
    ?>

                   
                        <tbody>
                            <tr>
                                
                                <td hidden> <?php echo $row['product_id']; ?> </td>
                                <td> <?php $id=$row['category_id'];
            $sql1="select category_name from beauty_category where category_id=$id and status=0";
            $result1=mysqli_query($con,$sql1);
            while($row1=mysqli_fetch_array($result1))
            {
                echo $row1['category_name'];
            }
            ?>
 </td>
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

<td rowspan="2" >
                                    
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