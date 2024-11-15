<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="http"//code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$(function(){
	$('input.more').on('click', function(){
		var $table=$('#input_fields');
		var $tr=$table.find(tr).eq(0).clone();
		$tr.appendTo($table).find('input').val('');
	});
});
</script>

</head>

<body>
<script src="/wp-includes/js/addInput.js" language="Javascript" type="text/javascript"></script>
<form method="POST">
     <div id="dynamicInput">
          Entry 1 - <input type="text" name="myInputs[]"> &nbsp; <input type="text" name="myInputs1[]">
     </div>
     <input type="button" value="Add another text input" onClick="addInput('dynamicInput');">
</form>
</body>
</html>
<script>
var counter = 1;
var limit = 3;
function addInput(divName){
     if (counter == limit)  {
          alert("You have reached the limit of adding " + counter + " inputs");
     }
     else {
          var newdiv = document.createElement('div');
          newdiv.innerHTML = "Entry " + (counter + 1) + " - <input type='text' name='myInputs[]'> &nbsp; <input type='text' name='myInputs1[]'>";
          document.getElementById(divName).appendChild(newdiv);
          counter++;
     }
}
</script>