
<!DOCTYPE html>
<html>
<head>
	<title>HNG - Time Machine</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<div class="logo">
				TM
			</div>
			<div class="hero">
				<h1 class="hero-text">Welcome to the Time Machine</h1>	
				<button type="button" id="bg">Night/Day</button>
			</div>
		</div>
			<!-- Header ends -->
		<div class="content">
			<div class="content-detail">
				<div class="filled">
					<table>
						<tr colspan="2">
							<td>Day</td>
							<td>Time</td>
						</tr>
						<tr colspan="2">
							<!-- Day with date -->
							<td><?php echo date('D d'); ?></td>
							<!-- Time with am/pm -->
							<td><?php 
								date_default_timezone_set('Africa/Lagos');
								echo date('h:i a', time());
							 ?></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="copyright">
				<h6>All right reserved</h6>
			</div>
		</div>
	</div>
	<script src="script/bg.js" ></script>
</body>
</html>