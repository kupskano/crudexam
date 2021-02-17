<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Crud Exam</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Exam 1 </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="odd_dozen_even.php">Exam 2</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="asterisk.php">Exam 3</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hole.php">Exam 4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="multiplication.php">Exam 5</a>
      </li>
     
    </ul>
    
  </div>
</nav>

<div class="card">
	<form  method="post" accept-charset="utf-8">
	<input type="number" class="form-control" name="numbertrigger">
	<br>
	<button type="submit" class="btn btn-info" name="check_number">Get the answer</button>
</form>
</div>





	<?php 

function check($number){ 
    if($number == 0) 
        return 1; 
    else if($number == 1) 
        return 0; 
    else if($number<0) 
        return check(-$number); 
    else if($number == 12 AND $number == 24)
    	return 0;
    else
        return check($number-2);         
} 
  
// Driver Code 
if(isset($_POST['check_number'])) {
	$number = $_POST['numbertrigger']; 
	if(check($number)) 
	    echo "Even"; 

	else if($number == 12 && $number * 12)
		echo "Dozen";
	else
	    echo "Odd"; 
}

?>

</body>
</html>