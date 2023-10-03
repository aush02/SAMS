<?php
$connect = mysqli_connect("localhost", "root", "", "SAMS");
if ($connect) {
   echo "connect successful";
}
?>
<?php include 'connection.php';?>
<a href="treg.php"><button style="background-color:green;color:white;">Add Student </button> </a>
<br> <br>
<table border-radius="1px" cellpadding="10px" cellspacing="0px">
<tr>
       
   <th>Fname</th>
   <th>Lname</th>
   <th>Email</th>
   <th>Mobile</th>
   <th>Password</th>
   <th>gender</th>
   <th>Address</th>
   
    
 
  

</tr>
<?php
   $query="SELECT * FROM  SAMS";
   $data=mysqli_query($connect,$query);
   $result=mysqli_num_rows($data);

if($result){
    while($rows=mysqli_fetch_assoc($data)){
        ?>
        
     <td><?php echo $rows['Fname'];?></td>
     <td><?php echo $rows['Lname'];?></td>

        <td><?php echo $rows['address'];?></td>
        <td><?php echo $rows['email'];?></td>
        <td><?php echo $rows['mobile'];?></td>
        <td><?php echo $rows['gender'];?></td>
        
        <td><?php echo $rows['password'];?></td>
       
        

<td>
    <a href="update.php?id=<?php  echo $rows['id'];?>"><button style="background-color:blue;color:white;">Update</button></a>
    <a onclick="return confirm('Are you sure you want to delete?')" href="delete.php?id=<?php  echo $rows['id'];?>"><button style="background-color:red;color:white;">Delete</button></a>
        
    </td>
</tr>
        <?php
    }
}
else{
    echo "try again";
}

   ?>
</table>


<style>
    tr:nth-child(odd){
        background-color:#eee;
    }
    </style>

