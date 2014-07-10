<!DOCTYPE html>
<html>
<head>
	<title>Roll Dice</title>
</head>
<body>
<h1>THIS IS ROLL DICE!!! </h1>
Your guess was: {{{ $guess }}} <br>
The Random Number is : {{{ $random }}} <br>

 @if($guess == $random)
	<p style="color:green;" > WAY TO GO!!! </p>
 @else
 	<p style="color:red;"> WOMP WOMP TRY AGAIN! :(</p>
 @endif
</body>
</html>

