<!DOCTYPE html>
<html>
<head>
	<title>Contact Us Page</title>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-10">
			<div class="card mt-4 card-body">
<h1>Contact Form</h1>
<form method="post" action="{{ route('contact')}}">
	@csrf

	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">Name</label>
	  <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Type your Name...">
	</div>
	<div class="mb-3">
	  <label for="exampleFormControlInput1" class="form-label">Email address</label>
	  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Type your Email">
	</div>
	<div class="mb-3">
	  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
	  <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter your Message..."></textarea>
	</div>

	<input type="submit" class="btn btn-primary" value="Submit">

</form>
</div>
</div>
</div>
</div>
</body>
</html>