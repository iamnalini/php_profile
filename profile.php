<!DOCTYPE html>
<html lang="en">

<title>Profile Page</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<head>
	<script src="assets/js/jquery.min.js"></script>
	
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="log.css">
	
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=calibri" rel="stylesheet">
	
	<script>

		$(document).ready(function () {
			$('#logout').click(function (e) {
				e.preventDefault();

				window.location= "home.html";

			});

		});
		$(document).ready(function () {
			$('#submit_btn').click(function (e) {
				e.preventDefault();

				$.ajax({
						type: "post",
						url:"update.php",
						data:{
							dob: $("#dob").val(),
							age: $("#age").val(),
							sex: $("#sex").val(),
							contact: $("#contact").val(),
							email: $("#email").val()
						},
						success:function (data, status) {
							alert("Data: " + data + "\nStatus: " + status);
						}
					});

			});

		});

		function pre() {

			return false;
		}

	</script>
</head>

<body>
	<div class="container-fluid">
		<div class="container">
			<h2 class="text-center" id="title">ADDITIONAL PROFILE DETAILS</h2>

			<hr>
			<div class="row justify-content-md-center">
				<div class="col-md-5">
					<form role="form" onsubmit="return pre()" method="post">
						<fieldset>

							<div class="form-group">
								<input type="text" name="dob" id="dob" class="form-control input-lg"
									placeholder="Date Of Birth : dd/mm/yyyy">
							</div>
							<div class="form-group">
								<input type="text" name="age" id="age" class="form-control input-lg" placeholder="Age">
							</div>
							<div class="form-group">
								<input type="text" name="sex" id="sex" class="form-control input-lg" placeholder="Sex">
							</div>
							<div class="form-group">
								<input type="text" name="contact" id="contact" class="form-control input-lg"
									placeholder="Contact No">
							</div>
							<div class="form-group">
								<input type="text" name="email" id="email" class="form-control input-lg"
									placeholder="Email Id">
							</div>
							<div align = "center">
								<input type="submit" class="btn btn-lg btn-primary" name="submit_btn" id="submit_btn"
									value="Submit">
								<input type="submit" class="btn btn-lg btn-primary" name="logout" id="logout"
									value="Logout">
							</div>
						</fieldset>
					</form>
				</div>

			</div>
		</div>

	</div>
</body>

</html>