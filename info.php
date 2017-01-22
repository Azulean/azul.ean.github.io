<!DOCTYPE html>
<html>
<head>
<style>
@media only screen and (max-device-width : 800px) {
	.wrapper {
		max-width: 800px !important;
		margin-left: 5px;
		padding-bottom: 16vh !important;
	}
	.linky {
		margin: 4px 4px 4px 4px !important;
		padding: 2px 2px 2px 2px !important;
		letter-spacing: 1px !important;
		border: 2px solid #fff;
	}
	.foot-nav {
		position:absolute;
		z-index: 3;
		top: 0px;
		right: 0px;
		background-color: #0e6635;
		text-align: center;
		width: 100%;
		height: 15vh;
	}
}
@media only screen and (min-device-width : 801px) {
	.wrapper {
		margin-left: 25vw;
		margin-right: 25vw;
		padding-bottom: 11vh !important;
		max-width: 75vw !important;
	}
	.foot-nav {
	position:absolute;
	z-index: 3;
	top: 0px;
	right: 0px;
	background-color: #0e6635;
	text-align: center;
	width: 100%;
	height: 10vh;
}
    	.wrapper {
		margin-left: 25vw;
		margin-right: 25vw;
		padding-bottom: 11vh !important;
		max-width: 75vw !important;
	}
    .linky {
		margin: 4px 4px 4px 4px !important;
		padding: 2px 2px 2px 2px !important;
		letter-spacing: 1px !important;
		border: 4px solid #fff;
		background-color:#0e6635;
		font-size: 30px
	}
a, a:link {
    text-decoration:none;
    color: white;
	font-family:"Roboto";
	text-align:center;
	display: inline-block;
}
.linky {
	text-transform: uppercase;
	margin: 15px 5px 15px 5px;
	padding: 10px 10px 10px 10px;
	border: 2px solid #fff;
	display: inline;
	letter-spacing: 1px;
	transition-property: color, background-color;
	transition-duration: 0.5s;
	transition-timing-function: ease;
	font-size: 30px
	font-family:"Roboto";
}
.linky:hover {
	transition-property: color, background-color;
	transition-duration: 0.5s;
	transition-timing-function: ease;
	color: #000;
	background-color: #fff;
	font-family:"Roboto";
}
.linky > a:hover
{
	color: #000 !important;
	transition-duration: 0.5s;
	transition-timing-function: ease;
	font-family:"Roboto";
}
    
	.foot-nav {
	font-family:"Roboto";
	position:absolute;
	z-index: 3;
	top:0px;
	right: 0px;
	background-color: #0e6635 ;
	text-align: center;
	width: 100%;
	height:0;
}


h1 {
        	font-family: "Lora";
            color:white;
            text-shadow: 0px 1px 0px #c7c8ca, 0px 2px 0px #b1b3b6, 0px 3px 0px #9d9fa2, 0px 4px 0px #8a8c8e, 0px 5px 0px #77787b, 0px 6px 0px #636466, 0px 7px 0px #4d4d4f, 0px 8px 7px #001135;
            font-size:125px
			}
.button {
    display: inline-block;
    margin: 10px;
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow:    0 8px 0 #052412 , 0 15px 20px rgba(0, 0, 0, .35);
    -moz-box-shadow: 0 8px 0 #052412 , 0 15px 20px rgba(0, 0, 0, .35);
    box-shadow: 0 8px 0 #052412 , 0 15px 20px rgba(0, 0, 0, .35);
    -webkit-transition: -webkit-box-shadow .1s ease-in-out;
    -moz-transition: -moz-box-shadow .1s ease-in-out;
    -o-transition: -o-box-shadow .1s ease-in-out;
    transition: box-shadow .1s ease-in-out;
    font-size: 50px;
    color: #fff;
}

.button span {
    display: inline-block;
    padding: 20px 30px;
    background-color: #041b0e;
    background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(hsla(146, 90%, 80%, .8)), to(hsla(146, 90%, 70%, .2)));
    background-image: -webkit-linear-gradient(hsla(146, 90%, 80%, .8), hsla(146, 90%, 70%, .2));
    background-image: -moz-linear-gradient(hsla(146, 90%, 80%, .8), hsla(146, 90%, 70%, .2));
    background-image: -o-linear-gradient(hsla(146, 90%, 80%, .8), hsla(146, 90%, 70%, .2));
    -webkit-border-radius: 8px;
    -moz-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: inset 0 -1px 1px rgba(255, 255, 255, .15);
    -moz-box-shadow: inset 0 -1px 1px rgba(255, 255, 255, .15);
    box-shadow: inset 0 -1px 1px rgba(255, 255, 255, .15);
    font-family: 'Pacifico', Arial, sans-serif;
    line-height: 1;
    text-shadow: 0 -1px 1px #052412 ;
    -webkit-transition: background-color .2s ease-in-out, -webkit-transform .1s ease-in-out;
    -moz-transition: background-color .2s ease-in-out, -moz-transform .1s ease-in-out;
    -o-transition: background-color .2s ease-in-out, -o-transform .1s ease-in-out;
    transition: background-color .2s ease-in-out, transform .1s ease-in-out;
}

.button:hover span {
    background-color: #052412 ;
    text-shadow: 0 -1px 1px #052412 , 0 0 5px rgba(255, 255, 255, .8);
}

.button:active, .button:focus {
    -webkit-box-shadow:    0 8px 0 #052412 , 0 12px 10px rgba(0, 0, 0, .3);
    -moz-box-shadow: 0 8px 0 #052412 , 0 12px 10px rgba(0, 0, 0, .3);
    box-shadow:    0 8px 0 #052412 , 0 12px 10px rgba(0, 0, 0, .3);
}

.button:active span {
    -webkit-transform: translate(0, 4px);
    -moz-transform: translate(0, 4px);
    -o-transform: translate(0, 4px);
    transform: translate(0, 4px);
}
.divider{
    width:5px;
    height:auto;
    display:inline-block;
}
	body{
    background: linear-gradient(to bottom right, #041b0e, #0c5029);
    height: 646px;
    background: green; /* For browsers that do not support gradients */    
    background: -webkit-linear-gradient(left top, #041b0e, #0c5029); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom right, #041b0e, #0c5029); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom right, #041b0e, #0c5029); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom right, #041b0e, #0c5029); /* Standard syntax (must be last) */
	}
	
</style>
<head>
	<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
</head>
</head>





<body>
<div class="wrapper">
   <div class="foot-nav">
      <div class="linky">
 		<a href="home.php">Home</a>
      </div>
      <div class="linky">
        <a href="index.php">ScouDr.</a>
        </div>
        </div>
        </div>
    </ul>
<div align="center" style="position:fixed; top:0%; left:25%;">
<div class="font-effect-3d"><h1><span>Statistics</span></h1></div>
<a href="findteamstats.php" class="button">
    <span>Find A Team</span><br>
	
<a href="findcompstats.php" class="button">
	<span>Mein Kamp</span>
</a>
</div>




