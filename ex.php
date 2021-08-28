<?php
?>

<html>

<head>
<script src="jquery.js"></script>
<script>
$(document).ready(function(){

$("#name").blur(function(){
var txtname=$(this).val();
//alert(txtname);
$.ajax({
type:"post",
url:"searchcode.php",
data:"name="+txtname,
success:function(res)
{
$("span").html(res);
}
})

})
})
</script>
</head>
<body>
<h1>searching through ajax</h1>
nmame<input type="text" id="name">
<span></span>
</body>
</html>
