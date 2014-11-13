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
    <script>
function check_length(form2){
    maxlen=1000;
    if (form2.abstract.value.length >= maxlen){
        alert("وصلت للحد الاقصي من الكتابة");
        form2.abstract.value=form2.abstract.value.substring(0,maxlen);
    }else{
           form2.text_num.value=maxlen-form2.abstract.value.length;
        };
        } 
</script>
    </head>
    <body>
    <form id="form2" name="form2">
    <ul>
        <li class="nav-header">ملخص الرسالة: </li>
          <li>
               <textarea  onkeypress=check_length(this.form); onkeydown=check_length(this.form); rows="3"  maxlength="1000" class="form-control span3" id="abstract"  name="abstract" >
                 </textarea>
          </li>
          <li>
      <input type='button' id="submit-btn" class="btn-info span1" onclick='ajaxFunction3();'value='حفظ '/>
     <input size="1" readonly class="span1" value="1000" name="text_num">الاحرف المتبقية
          </li>
        </ul>
        </form>
        </body>
        </html>