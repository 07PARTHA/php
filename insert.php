<html>
  <head> <title> informating </title> </head>
  <body>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method ="POST">
    name <input type = " text" name= " name">
    gender <input type =" text" name ="gender">
    contect <input type ="number" name="contect">
    address <input type ="text" name =" address">
    <input type ="submit" value="submit" name="submit" >
</form>
</body>
</html>

    <?php 
    include "conect.php" ;
    if(isset($_POST['submit']))
    {
      $name = $_POST ['name'];
      $gender =$_POST['gender'];
      $contect =$_POST['contect'];
      $address =$_POST['address'];

      $insertquery ="INSERT INTO students(NAME,GENDER,CONTECT,ADDRESS )
      values('$name','$gender','$contect', '$address')";
      $query= mysqli_query($con,$insertquery)  ;
      if($query)
      { ?>
      <script>
        alert("insert successfully");
        </script>
        <?php } else { ?>
        <script>
            alert("not inserted");
        </script> 
 <?php }
    }
    ?>