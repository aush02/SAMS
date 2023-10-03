<?php include 'connection.php';
if (isset($_GET['id']))
 $id = $_GET['id'];
$query="SELECT * FROM teac WHERE id='$id'";
$data=mysqli_query($connect, $query);
$rows=mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="teacher.css">
</head>
<body>
        <fieldset>
            <legend>Student Form</legend>
            <form action="" method="post">
       
        <div>
            <label for="tname">Student name</label>
            <input type="text" id="Fname" name="Fname" placeholder="enter your name"required value="<?php echo $rows['Fname'];?>">
        </div>
        <div>
            <label for="tname">Student name</label>
            <input type="text" id="Lname" name="Lname" placeholder="enter your name"required value="<?php echo $rows['Lname'];?>">
        </div>
        
        
        <div>
            <label for="address">Address</label>
            <input type="text" id="address" name="address" placeholder="enter your address"required value="<?php echo $rows['address'];?>">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="someone123@gmail.com"required value="<?php echo $rows['email'];?>">
        </div>
    
        <div>
            <label for="phoneno">mobile</label>
            <input type="tel" id="mobile" name="mobile" placeholder="012-345-6789"required value="<?php echo $rows['mobile'];?>">
        </div>
        <div>
        <label for="gender" class="mygender">Gender:</label>
       <?php 
       if($rows['gender']==='Male'){
        
           ?> <input type="radio" id="gender" name="gender" value="Male"  checked>Male
        <input type="radio" id="gender" name="gender" value="Female" >Female
        <input type="radio" id="gender" name="gender" value="others" >Others
        <?php
        } else if ($rows['gender']==='Female'){
?>
        <input type="radio" id="gender" name="gender" value="Male" >Male
        <input type="radio" id="gender" name="gender" value="Female" checked>Female
        <input type="radio" id="gender" name="gender" value="others" >Others
        <?php
    }else{
    ?>
        <input type="radio" id="gender" name="gender" value="Male" >Male
        <input type="radio" id="gender" name="gender" value="Female" >Female
        <input type="radio" id="gender" name="gender" value="others" checked >Others
    <?php
    }
     ?>   

      

        <div>
            <input type="submit" id="submit" name="submit" style="width: 100px;">
        </div>
    </fieldset>
    </form>
</body>
</html>
<?php

if(isset($_POST["submit"])){
    $name= $_POST["Fname"];
    $name= $_POST["Lname"];
    $address= $_POST["address"];
    $email= $_POST["email"];
    $mobile= $_POST["mobile"];
    $gender= $_POST["gender"];
    $password= $_POST["password"];
   
   
    
    $query="UPDATE SAMS SET tname='$name',address='$address',email='$email',mobile='$mobile',gender='$gender',where id='$id'";
    if(mysqli_query($connect,$query)){
        echo "data update";?>
        <script>
        window.location="http://localhost/SAMS/0.2/display.php";
        </script>
        <?php
    }else{
        echo "data donot update";
    }
}