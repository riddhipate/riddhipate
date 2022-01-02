<?php   

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <script src="jquery-3.6.0.min.js"></script>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
	body{
		background-color: rgb(81, 81, 85);
	     margin-left:90px;
		 padding-left:200px;
		 padding-top:130px; 
	}
</style>
<script> 
$("document").ready(function(){ 
$("a.delete").click(function(){ 
$(this).parents("tr").fadeOut(); 
}); 
}); 
</script> 

</head>


<body>

    <div class="form-group">
		<div class="col-md-9">
			<table class="modal-content bg table table-condensed table-striped "> 
            <?php

                if(!isset($_SESSION['username'])) // If session is not set then redirect to Registration Page
                {
                    header("Location:loginpage.php");  
                }
                else
                {
                    echo 'Welcome To Home Page...'.$_SESSION['username'];

                    //echo '<script type="text/javascript"> alert("Login Successfully..."); </script>';

                    echo "</br><a href='logout.php'>Click Here To Logout</a> "; 
                }

                
            ?>

				<tr id="ROW1"> 
					<td colspan="7">
						<h3>Data Record</h3>
					</td> 
					<td align="center"><input type="submit" class="btn btn-primary-24" value="Add Record">
					</td> 
				</tr> 
					<tr class="font sr"> 
					<td><center>No</td> 
					<td><center>Name</td> 
					<td><center>Username</td> 
					<td><center>Password</td> 
					<td><center>Age</td> 
					<td><center>City</td> 
					<td><center>Country</td>
					<td><center>Action</td> 
				</tr> 
				<tr id="ROW1" class="tr"> 
					<td align="center">1</td> 
					<td><center>Riddhi Patel </td> 
					<td><center>riddhi9053</td> 
					<td><center>r8974</td> 
					<td><center>23</td> 
					<td><center>Rajkot</td> 
					<td><center>India</td> 
					<td><center><button type="button" class="btn btn-sm btn-primary">Edit</button>
					<a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td> 
				</tr>
				<tr id="ROW1" class="tr"> 
					<td align="center">2</td> 
					<td><center>Akash Lathiya </td> 
					<td><center>akash1053</td> 
					<td><center>a8974</td> 
					<td><center>28</td> 
					<td><center>Ahmedabad</td> 
					<td><center>India</td> 
					<td><center><a href="#"><button type="button" class="btn btn-sm btn-primary">Edit</button> </a> 
					<a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td> 
				</tr>
				<tr id="ROW1" class="tr"> 
					<td align="center">3</td> 
					<td><center>Drashti Lathiya </td> 
					<td><center>drashti1153</td> 
					<td><center>d8974</td> 
					<td><center>26</td> 
					<td><center>Ahmedabad</td> 
					<td><center>India</td> 
					<td><center><a href="#"><button type="button" class="btn btn-sm btn-primary">Edit</button> </a> 
					<a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td> 
				</tr>
				<tr id="ROW1" class="tr"> 
					<td align="center">4</td> 
					<td><center>Alok Patel </td> 
					<td><center>alok9047</td> 
					<td><center>a8974</td> 
					<td><center>19</td> 
					<td><center>Surat</td> 
					<td><center>India</td> 
					<td><center><a href="#"><button type="button" class="btn btn-sm btn-primary">Edit</button> </a> 
					<a href="#" class="delete"><button type="button" class="btn btn-danger">Delete</button></a></td> 
				</tr>
			</table>	
        </div>
	</div>

       
               

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>