<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Sendmekey - Home</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</HEAD>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script type="text/javascript">

function home() {
location. href = "home.php";
}
function sender() {
location.href = "sender.php";
}
function receiver() {
location. href = "receiver.php";
}
function merger() {
location. href = "merger.php";
}
function result() {
location. href = "result.php";
}


</script>

<BODY>
	<h1>SendMeKey</h1>
	<div>
  	  <hr>
   		<br>
					<button id="home" onclick="home()">Home</button><br><br>
					<button id="send" onclick="sender()">Send Question Numbers</button><br><br>
					<button id="rec" onclick="receiver()">Send Answers</button><br><br>
					<button id="merge" onclick="merger()">Request Answer Key</button><br><br>
					<button id="result" onclick="result()">Show Final Result</button><br><br>
				
					
	</div>
	<form action="home.php" method="post">
		<br><font><b>Reset all values</b></font>
		<br><input type="submit" name="submit">
	</form>

<?php 
if(isset($_POST['submit'])){
$n="";
$one = fopen("questiondata.txt", "w");
fwrite($one,$n);
fclose($one);
$two = fopen("answerdata.txt", "w");
fwrite($two,$n);
fclose($two);
$three = fopen("answerkey.txt", "w");
fwrite($three,$n);
fclose($three);
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</BODY>

</HTML>