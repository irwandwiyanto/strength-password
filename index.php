<html>
	<title> Passqord strength</title>
<head>	
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
</head>
<body>
	
	<input type="password" name="pass" id="pass" /><br>
	<span id="passstrength"></span>

	<script>

	$(document).ready(function() {



	    $('#pass').keyup(function(e) {

		var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");

		var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");

		var enoughRegex = new RegExp("(?=.{6,}).*", "g");

		if (false === enoughRegex.test($(this).val())) {

		    $('#passstrength').addClass( "label label-important" );

		    $('#passstrength').html('Lemah Sekali');



		} else if (strongRegex.test($(this).val())) {            



		    $('#passstrength').addClass( "label label-success" );

		    $('#passstrength').html('Wow!');

		} else if (mediumRegex.test($(this).val())) {



		    $('#passstrength').addClass( "label label-warning" );

		    $('#passstrength').html('Lumayan!');

		} else {



		    $('#passstrength').addClass( "label label-important" );

		    $('#passstrength').html('Lemah!');

		}

		return true;

	    });



	});

	</script>
	
</body>
</html>
