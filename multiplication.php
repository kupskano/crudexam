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
	<form method="post" >
		<input type="number" name="multi" id="multi"><br>
		<button class="btn btn-info generate_me ">Generate me</button>
	</form>

	<script src="script/jquery.min.js"></script>

	<script>
		$(document).ready(function() { 

			$('.generate_me').click(function() {
						var result = $('#multi').val();
		for (var i = 0; i < 11; i++) {

		    for (var j = 0; j < 11; j++) {

		        if(i == 0 && j > 0){
		          result += '[' + j + ']';
		        } 
		        else if(j == 0 && i>0){
		          result += '[' + i + '] ';
		        } 
		        else if(i>0 && j>0){
		        result += (i*j) + ' ';
		        }
		    }
		    result += '\n'
		}


alert(result);
				})
	


			})
		
	</script>

</body>
</html>