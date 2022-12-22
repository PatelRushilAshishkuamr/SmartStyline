

 <?php
$con=mysqli_connect("localhost","root","","beautycare");
if(isset($_POST['submit']))
{

$name=$_POST['name'];
$sql="insert into appointment(name)value('$name')";
$result=mysqli_query($con,$sql);
if($result)
{
  echo "<script>alert('record done');</script>";
}



}
?>
<form method="POST">

                  <input placeholder="Enter Name" type="text" name="name"  >
                  <input type="submit" name="submit"> 
                
          </form>
       

          <!-- Reservation Form End-->

          <!-- Reservation Form Validation Start-->
        
          <!-- Reservation Form Validation Start -->
        