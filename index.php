
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/bootstrap.min.css" >
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>

</head>
<body>


<div id="main">
  
  <div>
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD DATA</button>
  </div>
  
  
  <div>
    <div class="container">
    <div class="table-responsive">
      <table class="table">
      <thead>
        <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address</th>
        <th>Age</th>
        <th>EDIT</th>
        <th>DELETE</th>
        </tr>
      </thead>
      <tbody>
        <?php
        	 $myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
            $lines = file("newfile.txt");

            foreach($lines as $line)
            {
                echo nl2br($line);

              echo "<tr>";
              echo  "<td>".$line."</td>
                <td>".$line."</td>
                <td>".$line."</td>
                <td>".$line."</td> 
                <td>
				
				  <button type='button' class='btn' onclick='setVal(".$line.");' data-toggle='modal' data-target='#updateModal'  .style.display='block'\>
                    <span class='glyphicon glyphicon-cog'></span> 
                  </button>

				  
                </td>
                <td>
                  <a href='delete.php/index/.$line.'><button type='button' class='btn' .style.display='block'\">
                    <span class='glyphicon glyphicon-cog'>$line</span> 
                  </button></a>
                </td>"
                ;
              echo "</tr>";
            }
            fclose($myfile);
          ?> 
      </tbody>
      </table>
    </div>
    </div>
  </div>
</div>

<div class='container'>
                <!-- Modal -->
                <div class='modal fade' id='myModal' role='dialog'>
                <div class='modal-dialog'>
                
                  <!-- Modal content-->
                  <div class='modal-content'>
                  <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h4 class='modal-title'>ADD MOVIE</h4>
                  </div>
                  <div class='container'>
                  <form method = 'POST' class='form-horizontal' action='add.php'>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='email'>First Name:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name='one' placeholder="Title">
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='address'>Last Name:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name='two' placeholder="Description">
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='email'>Address:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name='three' placeholder="Year">
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='email'>Age:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name='four' placeholder="Rating">
                    </div>
                    </div>
                
                    <div class='form-group'> 
                    <div class='col-sm-offset-2 col-sm-10'>
                      <button type='submit' class='btn btn-default'>Save</button>
                    </div>
                    </div>
                  </form>
                </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                  </div>
                  </div>
                </div>
              </div>
</div>

<div class='container'>
                <!-- Modal -->
                <div class='modal fade' id='updateModal' role='dialog'>
                <div class='modal-dialog'>
                
                  <!-- Modal content-->
                  <div class='modal-content'>
                  <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal'>&times;</button>
                    <h4 class='modal-title'>Modal Header</h4>
                  </div>
                  <div class='container'>
                  <form method = 'POST' class='form-horizontal' action='update.php'>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='email'>Movie Title:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name="one" placeholder=<?php $line ?>>
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='address'>Movie Description:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name="two" placeholder="Description">
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='email'>Movie Year:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name="three" placeholder="Year">
                    </div>
                    </div>
                    <div class='form-group'>
                    <label class='control-label col-sm-2' for='email'>Movie Rating:</label>
                    <div class='col-sm-3'>
                      <input type='text' class='form-control' name="four" placeholder="Rating">
                    </div>
                    </div>
                
                    <div class='form-group'> 
                    <div class='col-sm-offset-2 col-sm-10'>
                      <button type='submit' class='btn btn-default'>Save</button>
                    </div>
                    </div>
                  </form>
                </div>
                  <div class='modal-footer'>
                    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                  </div>
                  </div>
                </div>
				</div>
</div>
</body>
</html> 

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

var foo = <?php echo $msg_code; ?>;

switch (foo){
	
	case 1: <?php echo "alert('DELETE SUCCESS!');"; ?>
		break;
	case 2: <?php echo "alert('DELETE FAILED!');";?>
		break;
	case 3: <?php echo "alert('UPDATE SUCCESS!');"; ?>
		break;
	case 4: <?php echo "alert('UPDATE FAILED!');";?>
		break;
	case 5: <?php echo "alert('ADD SUCCESS!');"; ?>
		break;
	case 6: <?php echo "alert('ADD FAILED!');";?>
		break;
}

function setVal(id){
	document.getElementById("val").setAttribute("value",id);
}
</script>

