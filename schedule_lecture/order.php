
<html>
<body onload = "ajaxFunction();">
<script language="javascript" type="text/javascript">
//Browser Support Code
function ajaxFunction(){
	var ajaxRequest;  // The variable that makes Ajax possible!
	
	try{
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e){
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try{
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e){
				// Something went wrong
				alert("Your browser broke!");
				return false;
			}
		}
	}
	// Create a function that will receive data sent from the server
	ajaxRequest.onreadystatechange = function(){
		if(ajaxRequest.readyState == 4){
			document.myForm.time.value = ajaxRequest.responseText;
		}
	}
	ajaxRequest.open("POST", "testFile.txt", true);
	ajaxRequest.send(null); 
	//setInterval("ajaxFunction()",5000);
}

</script>



<form method="POST" name='myForm' action="chat.php" >
Name: <input type='text' name="chattext" /> <br />
Time: <textarea  cols="40" rows="10" name="time"></textarea>
<input type="submit" value="chat" name="chat" >
</form>
</body>
</html>