<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>About_Us</title>
<style>
.wrapper{
width:1000px;
height: 1000px;
margin:0 auto;
}
.content{
	height:710px;
	width:1000px; 
	margin: 0 auto;
	border: 1px solid gray;
}
.leftside{
	height: 710px;
	width: 235px;
	float: left;
	border: 1px solid gray;

}
.rightside{
	width: 748px;
	height: 710px;
	float: right;
	margin: 0 auto;
}
.rightsub{
	height:130px;
	width: 700px;
	margin: 0 auto;
margin: 40px 10px 10px 20px;
border:1px solid green;}
form{
			width:650px;
			
			margin:20px auto;
			background: white;
			
		}
		


}
.text{

	width:200px;
	margin: 0 auto;

}
.text1{

	width:600px;
	margin: 0 auto;

}

	.inp{
		
			width:200px;
			border: solid 2px rgba(1,2,2,0.5);

		}

	label{
			width:200px;
			display: inline-block;
			margin-left:15px;
			
		}
	label[for="comments"]{
		
			margin-top: -250px;
			vertical-align: middle;
		}
	fieldset{
			width:650px;
			margin: auto;
			border: solid 2px rgba(0,0,0,0.2);
			border-radius: 10px;
			margin-bottom: 20px;
		}
				.fallow{
	height:30px;
	width:232px;
	background-color: #D8C9E8;
margin:0 auto;
		background-image:url(../Images/fallow.png);
		background-repeat: no-repeat;



}

.social{width:232px;
height: 300px;
}

</style>
</head>


<body>
<div class="wrapper">  
	<div><?php include("header.php")?> </div>
	<div class="content">
	<div class="rightside">
    <form action="">
    <br/>
		<p>
		  <label for="name">Name:</label>
		<input type="text"id="name" class="inp" name="name"></p>
		
		<p><label for="name">Gender:</label>
		<select name="Gender"  type="text" style="width:200px;" >
        

	
          <option value="gender">Select Gender</option>
		    <option value="Male">Male</option>
            <option value="Female">Female</option>
          
 
	</select></p>
	
		
		<p>
		  <label for="father's name">Father Name:</label>
		<input type="text"id="father's name"  class="inp"name="father's name"></p>
		
		
		<p><label for="name">City:</label>
		<select name=" City"  type="text" style="width:200px;">
		  
  
      <option>  Chose the City</option>
      <option>  Layyah </option>
      <option>  Jaman shah       </option>
      <option>  karor lak Esan        </option>
      <option> Kut Sultan   </option>
      <option>  Chok Azam           </option>
      <option>  TUrkey          </option>
    

</select></p>


      	<p><label for="mobile no">Mobile NO:</label>
		<input type="text" name="mobile no" class="inp" id ="mobile no"></p>

	
		
	<p><label for="email">E.mail:</label>
		<input type="text" class="inp" name="email"id="email"></p>
		
		<p>
		  <label for="phone no">Phone NO:</label>
		<input type="text" name="phone no" class="inp" id="phone no"></p>
		
			<p> <label for="address">Address:</label>
		  	<input type="text1" class="inp" name="address"id="address"  >
		
	</p>
		<p>
		  <label for="message">Message:</label>
		  <span class="tdText"  >
		  <textarea name="message" id="message"  cols="40" rows="5" >
		  </textarea>
	    </span>		</p>
	<p>
<div align="center"><a href="" onClick="a"><img src="Images/register.png" width="80" height="30" border="1">
		  
</div></p>

</div></div>
	<div><?php include("footer.php")?></div>
	</div>
	
<script>

var emailField = document.getElementById("email");
var nameField = document.getElementById("name");
var mobileField = document.getElementById("mobile no");
emailField.value = "Please enter your email";
nameField.value = "Please enter your name";
mobileField.value = "Please enter your mobile no";

emailField.onfocus = function() {
	if ( emailField.value == "Please enter your email") {
		emailField.value = "";
	}
};

emailField.onblur = function() {
	if ( emailField.value == "") {
		emailField.value = "Please enter your email";
	}
};
nameField.onfocus = function() {
	if ( nameField.value == "Please enter your name") {
		nameField.value = "";
	}
};

nameField.onblur = function() {
	if ( nameField.value == "") {
		nameField.value = "Please enter your name";
	}
};
mobileField.onfocus = function() {
	if ( mobileField.value == "Please enter your mobile no") {
		mobileField.value = "";
	}
};

mobileField.onblur = function() {
	if (mobileField.value == "") {
		mobileField.value = "Please enter your mobile no";
	}
};

	</script>












</body>
</html>

