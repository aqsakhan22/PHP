<?php
 //connection may 4 paramaters jaty hai host,password,database name,user
$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='uniwork';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if(!$conn){
echo "unsuccesfull";
}
else{
    echo "successfull connection \n";  
}

   if(isset($_POST['insert']))
   {
       $Name=$_POST['name'];
       $email=$_POST['Email'];
       $no=$_POST['Phone'];
       $address=$_POST['Address'];
       $query="INSERT INTO StudentDetail VALUES  ('$Name','$email','$no','$address')";
       $retval = mysqli_query( $conn,$query );
       if(!$retval){
        echo"Could not enter data: " ;
       }
      else{
        header("location: welcome.php");
      }

    }

    if(isset($_POST['delete']))
    {
        
        $no=$_POST['Phone'];
        
        $query="delete from StudentDetail where  PhoneNo=$no";
        $retval = mysqli_query( $conn,$query );
        if(!$retval){
         echo"Could not delete " ;
        }
        else{
            header("location: welcome.php");
        }
      
 
     }

     if(isset($_POST['update']))
     {
         $Name=$_POST['name'];
         $email=$_POST['Email'];
         $no=$_POST['Phone'];
         $address=$_POST['Address'];
         $query="UPDATE StudentDetail 
         SET Name='$Name' , Email='$email' , Address='$address' WHERE  PhoneNo=$no" ;
         $retval = mysqli_query( $conn,$query );
         if(!$retval){
          echo"Could not update data: " ;
         }
       else{
        header("location: welcome.php");
       }
  
      }
   




?>