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
    <script src="js/jquery-1.9.1.js"></script>
    <script  type="text/javascript">
$(document).ready(function()  {
    var characters = 220;
    $("#counter").append("You have <strong>"+  characters+"</strong> characters remaining");
    $("#text").keyup(function(){
        if($(this).val().length > characters){
        $(this).val($(this).val().substr(0, characters));
        }
    var remaining = characters -  $(this).val().length;
    $("#counter").html("You have <strong>"+  remaining+"</strong> characters remaining");
    if(remaining <= 10)
    {
        $("#counter").css("color","red");
    }
    else
    {
        $("#counter").css("color","black");
    }
    });
});
    </script>
</head>
<body>
    <form  id="input_form"  method="POST" action="?">
    <textarea  id="text"></textarea>
    <input type="submit"  value="submit">
</form>
<div  id="counter"></div>
</body>
</html>