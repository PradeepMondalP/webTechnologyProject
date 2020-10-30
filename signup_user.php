<?php
include ("include/connection.php");

	echo "signup_user.php called\n";

   if($_SERVER["REQUEST_METHOD"] == "POST")//isset($_POST['signup']))
   {
   	echo "just entered if \n";

     $name = mysqli_real_escape_string($con, test_input($_POST["user_name"]));
     $pass = mysqli_real_escape_string($con, test_input($_POST["user_pass"]));
     $email = mysqli_real_escape_string($con, test_input($_POST["user_email"]));
     $country = mysqli_real_escape_string($con, test_input($_POST["user_country"]));
     $gender = mysqli_real_escape_string($con, test_input($_POST["user_gender"]));
     $rand = rand(1,2);





  
     echo "signup_user inside the if  \n";
    if($rand==1){
           $profile_pic = "images/a7.png";
    	}
    else if($rand==2){
    	$profile_pic = "images/a3.png";
     }


    // bro , we havent added  log , forgotten_ans col , does it make any problem?



      $sql="SELECT * FROM `users` WHERE `user_email`='$email' ";
        $result=mysqli_query($con,$sql);

       echo " \n result's  result is  macha saku le ivattu \n"; 

        if($result)
        {
        	echo "heheheee";
        }
        else
        {

        	echo "\n\n not success ,  is printing...";

        	echo " \n result suceed......";
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            if($row==0) 
            {
            	echo "inside row 0 uff...........";
                // echo "$Email logged in with $password<br>";
                // $sql="INSERT INTO usercredentials('E-mail','Password','Gender','Country') values( '$Email','$password','$Gender','$Country')";
                $sql="INSERT INTO `users` (`user_name` , `user_pass` , `user_email` , `user_profile` , `user_country` , `user_gender` , `forgotten_answer` , `log_in`) 
                VALUES ('$name' , '$pass' , '$email' ,'$profile_pic' , '$country' , '$gender' ,'haha' , 'huhuh');";
                if(mysqli_query($con,$sql))
                {
                    echo "Registtration Successfull!<br>";
                }
                else
                {
                    echo "SQL Error!<br>" .mysqli_error($con);
                }
            }
        }













    

     // if($name==''){
     // 	echo "<script>alert('Name is required') </script>";
     // }
     // if(strlen($pass) <8 ){
     //     echo "<script>alert('password length should be minimum 8 charcetr') </script>";
     //     exit();	
     // }

     // $check_email = "select * from users where user_email='$email' ";
     // $run_email = mysqli_query($con , $check_email);

     // $check = mysqli_num_rows($run_email);

     // if($check==1){
     // 	echo "<script>alert('Email already exists ..') </script>";
     // 	echo "<script>window.open('signup.php' , '_self')</script>";
     // 	exit();
     // }  

    
    	
    
    // $insert = "insert into users (user_name , user_pass , user_email , user_profile , user_country , user_gender) ,
    //            values ('$name' , '$pass' , '$email' ,'$profile_pic' , '$country' , '$gender')";

   // $query = mysqli_query($con , $insert);
    
    // if($query){
    // 	echo "<script>alert('Congratulations $name , your account has been created successfully') </script>";
    // 	echo "<script>window.open('signin.php' , '_self')</script>";
    // }   
    // else{
    // 	echo "<script>alert('Registration failed , try again..') </script>";
    // 	echo "<script>window.open('signin.php' , '_self')</script>";
    }   


 function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
   
 ?>


