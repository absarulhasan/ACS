<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <title>CSS3 Apple.com Navigation</title>
            
    <style type="text/css">
		
		
	
	   a { text-decoration: none; border: none; outline: none; color:#3346A6; }
		#menu {height:60px;padding-left:50px;background:#000}
#search {float:right;width:250px;height:30px;margin:15px 20px 0 0}
.toplinks {width:100px;text-align:center;float:left;height:40px;line-height:40px;font-family:tahoma;font-size:12px;font-weight:bold;margin:10px 0 0 3px;color:#333;text-decoration:none;background:url(images/linkbg.png) no-repeat center bottom}
.toplinks:hover {color:#be4204;background:url(images/linkbg-hover.png) no-repeat center bottom}
a {color:#000}
a:hover {text-decoration:none;color:#900}
	/*bordercolor*/	div.nav {
	background-color:#D8C9E8;
			width:998px;
			margin: 0px auto 0px auto;
			border-width: 1px 1px 1px 1px;
			border-style: solid;
			border-color: #AFA5D9 # #AFA5D9 #AFA5D9;
			border-radius: 5px 5px 5px 5px;
			-moz-border-radius: 5px 5px 5px 5px;
			-webkit-border-radius: 5px 5px 5px 5px;
			/*-moz-box-shadow: 0px 1px 2px #ccc;*/
			display: table;
		}
		
		/*bordercolor bottom*/div.nav ul {
			margin: 0px 0px 0px 0px;
			padding: 0px 0px 0px 0px;
			border-width: 0px 0px 1px 0px;
			border-style: solid;
			border-color: #AFA5D9;
			border-radius: 5px 5px 5px 5px;
			-moz-border-radius: 5px 5px 5px 5px;
			-webkit-border-radius: 5px 5px 5px 5px;
			background: -webkit-gradient(linear, left top, left bottom, from(#AFA5D9), to(#AFA5D9));
			background: -moz-linear-gradient(top,  #AFA5D9,  #AFA5D9);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#AFA5D9', endColorstr='#AFA5D9');
			display: inline-block;
			list-style: none;
		}
		/*bar color*/
		div.nav ul li {
			margin: 0px 1px 0px 0px;
			padding: 0px 0px 0px 0px;
			background: -webkit-gradient(linear, left top, left bottom, from(#cecece), to(#AFA5D9));
			background: -moz-linear-gradient(top,  #cecece,  #3C6AD8);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#cecece', endColorstr='#AFA5D9');
			float: left;
		}
		div.nav ul li a {
			margin: 0px 1px 0px 1px;
			padding: 11px 33px 11px 33px;
			background: -webkit-gradient(linear, left top, left bottom, from(#D8C9E8), to(#D8C9E8));
			background: -moz-linear-gradient(top,  #D8C9E8,  #D8C9E8);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#D8C9E8', endColorstr='#D8C9E8');
			float: left;
			/*- font color header*/
			font-family: Lucida Sans, Arial, Helvetica, sans-serif;
			font-size: 13px;
			font-weight: bold;
			color: #3C6AD8;
			text-shadow: #cecece 0px 1px 0px;
		}
		
		
		div.nav ul li:hover {
			background: -webkit-gradient(linear, left top, left bottom, from(#999999), to(#5f5f5f));
			background: -moz-linear-gradient(top,  #999999,  #5f5f5f);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#999999', endColorstr='#5f5f5f');
		}
		/* for mouse on color*/div.nav ul li:hover a {
			padding: 11px 33px 11px 33px;
			background: -webkit-gradient(linear, left top, left bottom, from(#AFA5D9), to(#AFA5D9));
			background: -moz-linear-gradient(top,  #AFA5D9,  #AFA5D9);
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#AFA5D9', endColorstr='#AFA5D9');
			/*-*/
			color: #3C6AD8;
			text-shadow: #043573 0px -1px 1px;
		}
		
		.headersp{
			width: 1000px;
		}
		
		
		#banner{
	height: 100px;
	width:1000px;
	background-image:url(../Images/ba.png);
	border:1px;
	background:#0F06B9;
}

<!-- CSS styles for standard search box with placeholder text-->
	#tfnewsearch{
		float:right;
		padding:20px;
	}
	.tftextinput4{
		margin: 0;
		padding: 6px 15px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		color:#666;
		border:1px solid #0076a3; border-right:0px;
		border-top-left-radius: 5px 5px;
		border-bottom-left-radius: 5px 5px;	
	}
	.tfbutton4 {
		margin: 0;
		padding: 0;
		width:30px;
		height:30px;
		font-family: Arial, Helvetica, sans-serif;
		font-size:14px;
		font-weight:bold;
		outline: none;
		cursor: pointer;
		text-align: center;
		text-decoration: none;
		color: #AFA5D9;
		border: solid 1px #0076a3; border-right:0px;
		border-top-right-radius: 5px 5px;
		border-bottom-right-radius: 5px 5px;
		background: #438db8 url('tf-search-icon.png');
	}
	/* Fixes submit button height problem in Firefox */
	.tfbutton4::-moz-focus-inner {
	  border: 0;
	}
	.tfclear{
		clear:both;
	}
.comp{
	width:1000px;
	height:138px;
}

    
    </style>

</head>

<body>

<div class="comp">
<div id="banner"><img src="Images/logo.jpg" />







	</div><div id="menu">
			<a href="#" class="toplinks">Home</a>
			<a href="#" class="toplinks">About Us</a>
			<a href="#" class="toplinks">Contact Us</a>
			<a href="Track Comlaint Status.php">Track Comlaint Status</a>
        	<a href="Gallery.php">Gallery</a>
        	<a href="New Complaint.php">New Complaint</a>
			<a href="FAQs.php">FAQs</a>
			<div id="search">
			<form method="get" action="">
				<input name="search" type="text" size="25" />
				<input type="submit" value="GO" />
			</form>
		</div>
	</div>
</div>
	
</body>

</html>