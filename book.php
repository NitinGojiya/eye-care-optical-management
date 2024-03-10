<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
     body{
        display: flex;
        justify-content: center;
        align-items: center;
        background: url('bookback.jpg');
        background-position: center;
        background-size: cover;
        background-repeat: repeat;
     }  
     .main{
        padding-top:50px ;
        height: 550px;
        width: 500px;
     } 
        #button {
  padding: 12.5px 30px;
  border: 0;
  border-radius: 100px;
  background-color: #2ba8fb;
  color: #ffffff;
  font-weight: Bold;
  transition: all 0.5s;
  -webkit-transition: all 0.5s;
}

#button:hover {
  background-color: #6fc5ff;
  box-shadow: 0 0 20px #6fc5ff50;
  transform: scale(1.1);
}

#button:active {
  background-color: #3d94cf;
  transition: all 0.25s;
  -webkit-transition: all 0.25s;
  box-shadow: none;
  transform: scale(0.98);
}
.text{
    height: 40px;
    width: 200px;
    margin-top: 20px;
}
.text1{
    height: 40px;
    width: 400px;
    margin-top: 20px;
}
    </style>
</head>
<body>
  <div class="main">
    <div class="sub">
        <form action="book.php" method="post">
            <table>
                <tr>
                    <td><input type="text" class="text" name="fname" placeholder="First Name"></td>
                    <td><input type="text" class="text" name="lname" placeholder="Last Name"></td>
                </tr>
                <tr>
                    <td><input type="text" class="text" name="contact" placeholder="Contact"></td>
                    <td><input type="text" class="text" name="email" placeholder="Email"></td>
                </tr>
                <tr>
                    <td colspan="2">
                       Appointment For:<select name="type">
                            <option>Routine Eye Checkup</option>
                            <option>For frame</option>
                            <option>Eye cleaning</option>
                        </select>
                    </td>
                   
                 
                </tr>
                <tr>
                <td colspan="2">
                     Select Date   <input name="date"  type="date" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <textarea cols="30" class="text1" name="message" placeholder="Message"></textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <button id="button" name="book">Book Appointment</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
  </div>
</body>
</html>
<?php
if(isset($_POST['book']))
{
    $con=mysqli_connect("localhost","root","","eyecare");
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mo=$_POST['contact'];
$email=$_POST['email'];
$type=$_POST['type'];
$date=$_POST['date'];
$message=$_POST['message'];
$status='pending';
$sql="INSERT INTO `appointment`(`fname`, `lname`, `contact`, `email`, `type`, `date`, `message`, `status`) VALUES ('$fname','$lname','$mo','$email','$type','$date','$message','$status')";
$result=mysqli_query($con,$sql);
if($result)
{
header("location:home.php");
}
}

?>