<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>FACEBOOK</title>
	<style>
	    body,h1,ul,li{
	    margin: 0;
        padding: 0;		
	}
	body{
		background: #f5f5f5;
	 	font-family: sans-serif;
    }
	.arkaplan{
        background-color: #2637a3e6;
    }
	.kapsayici{
        width: 1350px;
        margin:0 auto;
    }
	.ust{
		display: flex;
        justify-content: space-between;
        align-items: center;
		min-height: 25px;
	}
	.logo{
		float: left;
		font-size: 1.5 sem;
		color: #5acdf0;
		text-decoration: none;
		margin-top: 1em;
	}
	ul{
		list-style: none;
	}
	.menu-1{
		color: #5acdf0;
		font-size: 0.9em;
		text-decoration: none;
		display: flex;
	    margin-left: 500px;
		padding: 10px 100px;
	}
	
	.menu-2{
		color: #5acdf0;
		font-size: 0.9em;
	}
	.orta-sol{
		font-size: 1.1em;
		margin-top: 150px;
		margin-left: 50px;
		float: left;
        width: 600px;
	}
	.orta-sag{
        float: right;
        margin-top: 115px;
        width: 570px;
	}
	


	</style>
</head>
<body class="sayfa">
<div class="sayfa">
<div class="arkaplan">
    <div class="ust kapsayici">
        <div class="logo">
            <a id="baslik" >
                <h1><u>Circuit Analysis</u></h1>
		        <h4><u>English Türkçe</u></h4>
	        </a>
	    </div>	
	    <div class="menu-1">
            <ul>
		        <li><label for="email">E-Mail: </label></li>
				<p></p>
                <li><input type="text" name="email" id="email"></li>
			    <p></p>
				<li><input type="checkbox" name="kutucuk" value="yes">Keep Me Signed In</input> </li>
            </ul>
		</div>
        <div class="menu-2">		
	        <ul>
		        <li><label for="password">Password:</label></li>
                <p></p>
				<li><input type="text" name="password" id="password"> <button type="button" style="background-color: #2637a3e6;" >Log In</button></li>
				<p></p>
				<li><label><u> Forgot Password</u></label></li>
            </ul>
	    </div>
    </div>
</div>
<div class="orta">
    <div class="orta-sol">
	    <p>Hello..... Welcome to Circuit Analysis Platform...</p>
		<p>This platform serves to perform the analysis of direct current circuits with the solution steps.</p>
		<p></p>
		<p>The details about how to use the software will be explained in the page directed after the login is successful.</p>
		<p></p>
		<p>The registration process is required to protect system resources and to obtain user feedback about the software.</p>
		<p></p>
		<p>Your feedback is very important for us.</p>
		<p></p>
		<p>After using the software, you can send your feedback to us from the next page.</p></br>
	</div></br>
	<div class="orta-sag">
	    <h1>Sign Up</h1>
		<h3>It's Quick and Easy</h3>
		</br>
		    <div class="form-kontrol">
			    <ul>
                    <li><input placeholder="E-Mail Address" type="text" required autofocus style="width:470px; height:30px; "></li></br>
                    <li><select placeholder="Job" type="text" required style="width:470px; height:30px;">
					<option value="" disabled selected hidden>Job</option>
					</select></li></br>
                    <li><input placeholder="Password" type="text" required style="width:470px; height:30px;"></li></br>
                    <li><input placeholder="Confirm Password" required style="width:470px; height:30px;"></input></li></br></br>
                    <li><button name="kayıt" type="submit" id="kayıt" style="width:200px; height: 50px; background-color: #32cd32;color: #ffffff;">Sign Up</button></li></br>
                </ul>
			</div>	
	</div>
</div>
</div>
</body>
</html>