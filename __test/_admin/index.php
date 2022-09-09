<?php include "../config.inc.php"; ?>
<!doctype html>
<html lang="en">

<head>

	<title>-[ TEST ]- Admin - Domaine des Fournelles</title>
	
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- Homebrew CSS and JS -->	
	<link rel="stylesheet" type="text/css" href="_css/style.css" />



</head>
<body>
	
<div class="container-fluid">
	
	<div class="row justify-content-center no-gutters">
		
		<nav class="navbar navbar-expand-lg navbar-light bg-light w-100">
        <span class="navbar-brand" href="#">Pages du site:</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Notre Domaine</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Vins</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
		
	</div>
	
	<div id="testcontainer"></div>
	
	<div id="container-notre-domaine" class="row no-gutters w-100">
	<form class="w-100">
		
		<h2>Page Notre Domaine</h2>
		<br /><br />
		<div class="form-group row w-100">
			<label for="staticEmail" class="col-sm-3 col-form-label">Titre de la page</label>
			<div class="col-sm-8">
				<input type="text" class="form-control w-100" name="pageND|Title" value="" />
    		</div>
			<div class="col-sm-1 text-center">
				<button type="button" data-id="pageND|Title" class="btn btn-success btn-actions btn-check"></button>
    		</div>
  		</div>
		<br />
		<div class="form-group row w-100">
			<label for="staticEmail" class="col-sm-3 col-form-label">1er Paragraphe</label>
			<div class="col-sm-8">
				<textarea class="form-control w-100" name="pageND|Text1"></textarea>
    		</div>
			<div class="col-sm-1 text-center">
				<button type="button" data-id="pageND|Text1" class="btn btn-success btn-actions btn-check btn-bottom"></button>
    		</div>
  		</div>
		<div class="form-group row w-100">
			<label for="staticEmail" class="col-sm-3 col-form-label">2eme Paragraphe</label>
			<div class="col-sm-8">
				<textarea class="form-control w-100" name="pageND|Text2"></textarea>
    		</div>
			<div class="col-sm-1 text-center">
				<button type="button" data-id="pageND|Text2" class="btn btn-success btn-actions btn-check btn-bottom" id="test"></button>
    		</div>
  		</div>
		<div class="form-group row w-100">
			<label for="staticEmail" class="col-sm-3 col-form-label">3eme Paragraphe</label>
			<div class="col-sm-8">
				<textarea class="form-control w-100" name="pageND|Text3"></textarea>
    		</div>
			<div class="col-sm-1 text-center">
				<button type="button" data-id="pageND|Text3" class="btn btn-success btn-actions btn-check btn-bottom"></button>
    		</div>
  		</div>
		
	</form>
	</div>
	
</div>
	
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
	
	$(document).ready(function() {	
	
		$("button").click(function(){
			
			var isset = 'true';
			var id = $(this).attr("data-id");
			var val = $("[name='"+id+"']").val();
			
			$.get("_php/actions", function(){
				
				alert("hello");
				
			});
				
		});
				
	});	
	
</script>

</body>

</html>