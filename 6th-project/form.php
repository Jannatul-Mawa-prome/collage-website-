<?php
$host = "localhost";
$username="root";
$password="";
$database="admission"; 

$connection = mysqli_connect($host , $username, $password, $database) or die();
if(mysqli_connect_error())
{
    echo "Failed to connect to MYSQL:" .mysqli_connect_error();
}


if(isset($_POST['submit'])){
	$name =$_POST['name'];
	$date =$_POST['date'];
	$father =$_POST['father'];
	$mother =$_POST['mother'];
	$village =$_POST['village'];
	$road =$_POST['road'];
	$post =$_POST['post'];
	$upazila =$_POST['upazila'];
	$district =$_POST['district'];
	$email =$_POST['email'];
	$technology =$_POST['technology'];
	$session =$_POST['session'];
	$duration =$_POST['duration'];
	$roll =$_POST['roll'];
	$reg =$_POST['reg'];
	$pass =$_POST['pass'];
	$smobile =$_POST['smobile'];

	$query = mysqli_query($connection,"INSERT INTO student(Name, DateOfBirth, FatherName,MotherName,Village,Road,Postoffice,Upazila,District,Email,Technology,Session,Duration,Roll,Reg,PassingYear,StudentMobile) VALUES('$name','$date','$father','$mother','$village','$road','$post','$upazila','$district','$email','$technology','$session','$duration','$roll','$reg','$pass','$smobile')"or die(mysqli_error($connection)));
    mysqli_close($connection);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

     <!-- Stylesheets -->
     <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
     <link rel="stylesheet" type="text/css" href="css/normalize.css" media="all" />
     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="all" />
     <link rel="stylesheet" type="text/css" href="css/style2.css" media="all" />
     
     <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
     
     <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
    


       <div class="container">

            <div class=" text-center about py-3" style="font-size: 50px;border: 1px solid transparent;box-shadow: 5px 0px 10px gray; background-image: linear-gradient(to right , #4834d4 , #686de0);text-shadow: 3px 3px #353b48;letter-spacing: 3px;">
                <span style="color:white;" class="font-weight-bold">Form</span>
            </div>
        
        <form action="#" method='POST'>
            <div class="about py-4" style="border: 1px solid #dee2e6;box-shadow: 5px 0px 10px gray;">
            <div class="row p-3">
            <div class="col-md-6 font-weight-bold">
             

             <label for="name">Name</label>
             <br>
             <input id="name" name="name" class="form-control" type="text">
             <br>




             <label for="date"> DATE OF BIRTH</label>
             <br>
             <input id="date" name="date" class="form-control" type="text" placeholder="dd-mm-yyyy">
             <br>


             <label for="father">FATHERS NAME</label>
             <br>
             <input id="father" name="father"  class="form-control" type="text">
             <br>


             <label for="mother"> MOTHERS NAME</label>
             <br>
             <input id="mother" name="mother" class="form-control" type="text">
             <br>




             <label for="p-address"> PERMANENT ADDRESS:</label>
             <br>

             <div class="form-group ml-4">
                <input id="p-address" name="village" class="form-control mb-2" type="text" placeholder="Village">
                <input class="form-control mb-3" name="road" type="text" placeholder="Road No-">
                <input class="form-control mb-3" name="post" type="text" placeholder="Post Office">
                <input class="form-control mb-3" name="upazila" type="text" placeholder="Upazila">
                <input class="form-control mb-3" name="district" type="text" placeholder="District">
            </div>
             





             <label for="email">EMAIL ADDRESS:</label>
             <br>
             <input id="email" name="email" class="form-control" type="text">
             <br>

</div>



    <div class="col-md-6 font-weight-bold">
         
             <label for="technology">TECHNOLOGY</label>
             <br>
             <div id="technology" class="form-group">
                 <select class="form-control" name="technology" id="">
                     <option value="">Computer</option>
                     <option value="">Civil</option>
                     <option value="">Mechanical</option>
                     <option value="">Electronics</option>
                     <option value="">Power</option>
                     <option value="">Environment</option>
                     <option value="">Electrical</option>
                 </select>
             </div>
             <br>


             <label for="session">SESSION</label>
             <br>
             <input id="session" name="session" class="form-control" type="text">
             <br>

             <label for="duration">DURATION</label>
             <br>
             <input id="duration" name="duration" class="form-control" type="text">
             <br>

             <label for="roll">ROLL NO</label>
             <br>
             <input id="roll" name="roll" class="form-control" type="text">
             <br>

             <label for="reg">REG NO:</label>
             <br>
             <input id="reg" name="reg" class="form-control" type="text">
             <br>

             <label for="pass">PASSING YEAR:</label>
             <br>
             <input id="pass" name="pass" class="form-control" type="text">
             <br>


             <label for="s-moblie">STUDENTS MOBILE NO:</label>
             <br>
             <input  id="s-moblie" name="smobile" class="form-control" type="text">
             <br>



             <label for="g-mobile"> GUARDIANS MOBIlE NO:</label>
             <br>
             <input id="g-mobile" name="gmobile" class="form-control" type="text">
             <br>



            </div>  
              <input  style= "width:20%;margin:auto;" type="submit" name="submit" class="form-control btn btn-primary submit" value="Submit">  
            </div>
            </div>

        </form>
       </div>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/js.js"></script>
            

</body>
</html>