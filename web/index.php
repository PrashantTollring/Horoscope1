<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	
	 <head>
	 	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"  type="text/css" />
	 	<!-- <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'> -->
	 	<link href="css/demoStyle.css" rel="stylesheet"  type="text/css" />
	 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	   <meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
	   <title>"PRASHANT APP"</title>
	 </head>

 	<body>
		<div class="container">
    		<br><br>
    		<h1>What Does Your Favorite Color Say About You?</h1>
    		<br>
			<form name="contact_form" action="form.php" method="post" onsubmit="return submitForm();" >
	    		<h4 class="text-center">Please Enter Your Name</h4>
	    		<div class="form-row align-items-center">
	    			<div class="col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
		    			<input type="text" class="form-control" placeholder="Enter Your Name" name="FullName" id="FullName"  >
		    		</div>
	    		</div>
	    		<br><br>
		    	<div class="row">
			    	<div class="col-lg-3"><input type="submit" id="bl" name="blue" value="" class="btn btn-primary btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		   	 		<div class="col-lg-3"><input type="submit" name="grey" value="" class="btn btn-secondary btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		   	 		<div class="col-lg-3"><input type="submit" name="green" value="" class="btn btn-success btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		   	 		<div class="col-lg-3"><input type="submit" name="red" value="" class="btn btn-danger btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		    	</div>
		   	
		   		<div class="row">
			    	<div class="col-lg-3"><input type="submit" name="yellow" value="" class="btn btn-warning btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		   	 		<div class="col-lg-3"><input type="submit" name="lightBlue" value="" class="btn btn-info btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		   	 		<div class="col-lg-3"><input type="submit" name="black" value="" class="btn btn-dark btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		   	 		<div class="col-lg-3"><input type="submit" name="white" value="" class="btn btn-light btn-lg btn-block mb-2" style="max-width:25rem;border-radius:25px"></div>
		    	</div>
			</form>
		</div>
	</body>
</html>