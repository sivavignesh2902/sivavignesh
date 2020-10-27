<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$comment = $_REQUEST['comment'];
if(empty($name) || empty($email) || empty($comment) || empty($gender))
{
	echo("<script>alert('Please Fill out all the fields.click back and proceed');</script>");
	echo("<script>alert('Click back and proceed');
		window.history.log(-1);
		</script>");
}
else
{
	echo("<script>alert('Are sure,you want to send the feedback');
		window.history.log(-1);
		</script>");

	mail("$email", "From Siva Vignesh S", "Thanks for the feedback,It means a lot to me.Keep supporting");
	mail("sivavignesh2902@gmail.com", "From $name", "$comment");
echo("Thaks for spending time and giving me a feedback. You can click back and read my page and you can exit..Thankyou.");
	
	
}

?>