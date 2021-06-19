<!DOCTYPE html>
<HTML>
<HEAD>
<TITLE>Receiver</TITLE>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</HEAD>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<script type="text/javascript">
function home() {
location. href = "home.php";
}

     function refresh() {
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("message").innerHTML = this.responseText;
    }
  xhttp.open("GET", "questiondata.txt", true);
  xhttp.send();
}
setInterval(refresh, 1000);



  </script>
<BODY>
<button id="home" onclick="home()">Home</button>
	<div id="input">
		<form action="receiver.php" method="post">
		<p> Enter Answer<br><input type="text" autocomplete="off" name="answer">
			<br>
		    <input type="submit" name="submit"> 
		</p>
	</form>


		<div id="message">
	</div>
	<?php
if(isset($_POST['submit'])){
$a=$_POST['answer'];
try{

		if(strlen($a)==0){
                            throw new Exception ("Enter Valid Input");
			}else{
                	//echo $a;
					$ans = fopen("answerdata.txt", "a");
                    fwrite($ans, $a."\n");
                    fclose($ans);
				} 
		
    }catch(Exception $e){
	 					echo $e -> getmessage();
}


}
?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</BODY>

</HTML>