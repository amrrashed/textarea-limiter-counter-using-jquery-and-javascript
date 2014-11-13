
<html lang="ar" dir="rtl">
<head>
 <meta charset="utf-8" >
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="bootstrap-3.0.0/assets/js/html5shiv.js"></script>
      <script src="bootstrap-3.0.0/assets/js/respond.min.js"></script>
    <![endif]-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- styles -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <!-- script -->
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.limit.js"></script>
<title>Textarea example | Your Inspiration Web</title>
 
<script type="text/javascript">
 
$(document).ready(function() {
  $("#text").limita({
	limit: 100,
	id_result: "counter",
	alertClass: "alert"
});
	});
</script>
</head>
<body>
	<div id="container"> 
		<h1>Example: How to limit characters inside a text area</h1>
		<h2>Write a text inside the textarea</h2>
		<h3>The number of characters remaining is displayed and you can not pass</h3>
		<form id="input_form"  method="POST" action="?">
			<textarea id="text"></textarea>
			<br /><br /> 
			<input type="submit" value="send"> 
		</form>
		<div id="counter"></div>
	</div>
 
</body>
</html>