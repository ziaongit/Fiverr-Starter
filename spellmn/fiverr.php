<!DOCTYPE html>
<html>
<head>
 <!--  Cute litte logo on the browser bar -->
  <link rel="apple-touch-icon" sizes="180x180" href="img/icon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/icon/favicon-16x16.png">
  <link rel="manifest" href="img/icon/site.webmanifest">
  <link rel="mask-icon" href="img/icon/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="shortcut icon" href="img/icon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config" content="img/icon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">

  <!--  Required for the php Form http://www.phpform.org/ -->
  <script type="text/javascript" src="script/view.js"></script>
  <script type="text/javascript" src="script/calendar.js"></script>

  <!--  Required for the jQuery Bootgrid -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.js"></script>

  <!--  Required for the jQuery Accordian -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Required for the date picker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!--  Required for the jQuery Validation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/additional-methods.js"></script>

  <!--  Required for the jQuery Accordian -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Required for the date picker -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <!-- My Stuff -->
  <meta name="google" value="notranslate"/>
<style>

body
{
	background:#fffff;
	font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
	font-size:small;
	margin:8px 0 16px;
//	text-align:center;
}

#form_container
{
	background:#fff;
	border:1px solid #ccc;
	margin:0 auto;
	text-align:left;
	width:640px;
}

form.appnitro
{
//	margin:20px 20px 0;
//	padding:0 0 20px;
}


/**** Form Section ****/
.appnitro
{
	font-family:Lucida Grande, Tahoma, Arial, Verdana, sans-serif;
	font-size:small;
}

.appnitro li
{
	width:100%;
}

form ul
{
	font-size:100%;
	list-style-type:none;
	margin:0;
	padding:0;
	width:350px;
}

form li
{
	display:block;
	margin:0;
        padding:4px 5px 2px 9px;
	position:relative;
}

form li:after
{
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

.buttons:after
{
	clear:both;
	content:".";
	display:block;
	height:0;
	visibility:hidden;
}

.buttons
{
	clear:both;
	display:block;
	margin-top:10px;
}

* html form li
{
	height:1%;
}

* html .buttons
{
	height:1%;
}

* html form li div
{
	display:inline-block;
}

form li div
{
	color:#444;
	margin:0 4px 0 0;
	padding:0 0 8px;
}

form li span
{
	color:#444;
	float:left;
	margin:0 4px 0 0;
	padding:0 0 8px;
}

form li div.left
{
	display:inline;
	float:left;
	width:48%;
}

form li div.right
{
	display:inline;
	float:right;
	width:48%;
}

form li div.left .medium
{
	width:100%;
}

form li div.right .medium
{
	width:100%;
}

.clear
{
	clear:both;
}

form li div label
{
	clear:both;
	color:#444;
	display:block;
	font-size:9px;
	line-height:9px;
	margin:0;
	padding-top:3px;
        text-align: center;
}

form li span label
{
	clear:both;
	color:#444;
	display:block;
	font-size:9px;
	line-height:9px;
	margin:0;
	padding-top:3px;
        text-align: center;
}

form li .datepicker
{
	cursor:pointer !important;
	float:left;
	height:16px;
	margin:.1em 5px 0 0;
	padding:0;
	width:16px;
}

.form_description
{
	border-bottom:1px dotted #ccc;
	clear:both;
	display:inline-block;
	margin:0 0 1em;
        text-align: center;
}

.form_description[class]
{
	display:block;
        text-align: center;
}

.form_description h2
{
	clear:left;
	font-size:160%;
	font-weight:400;
	margin:0 0 3px;
        text-align: center;
}

.form_description p
{
	font-size:95%;
	line-height:130%;
	margin:0 0 12px;
        text-align: center;
}

form hr
{
	display:none;
}

form li.section_break
{
	border-top:1px dotted #ccc;
	margin-top:9px;
	padding-bottom:0;
	padding-left:9px;
	padding-top:13px;
	width:97% !important;
        text-align: center;
}

form ul li.first
{
	border-top:none !important;
	margin-top:0 !important;
	padding-top:0 !important;
}

form .section_break h3
{
	font-size:110%;
	font-weight:400;
	line-height:130%;
	margin:0 0 2px;
}

form .section_break p
{
	font-size:85%;

	margin:0 0 10px;
}

/**** Buttons ****/
input.button_text
{
	overflow:visible;
	padding:0 7px;
	width:auto;
}

.buttons input
{
	font-size:120%;
	margin-right:5px;
}

/**** Inputs and Labels ****/
label.description
{
	border:none;
	color:#222;
	display:block;
	font-size:95%;
	font-weight:700;
	line-height:150%;
	padding:0 0 1px;
}

span.symbol
{
	font-size:115%;
	line-height:130%;
}

input.text
{
	background:#fff url(../../../images/shadow.gif) repeat-x top;
	border-bottom:1px solid #ddd;
	border-left:1px solid #c3c3c3;
	border-right:1px solid #c3c3c3;
	border-top:1px solid #7c7c7c;
	color:#333;
	font-size:100%;
	margin:0;
	padding:2px 0;
}

input.file
{
	color:#333;
	font-size:100%;
	margin:0;
	padding:2px 0;
}

textarea.textarea
{
	background:#fff url(../../../images/shadow.gif) repeat-x top;
	border-bottom:1px solid #ddd;
	border-left:1px solid #c3c3c3;
	border-right:1px solid #c3c3c3;
	border-top:1px solid #7c7c7c;
	color:#333;
	font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
	font-size:100%;
	margin:0;
	width:99%;
}

select.select
{
	color:#333;
	font-size:100%;
	margin:1px 0;
	padding:1px 0 0;
	background:#fff url(../../../images/shadow.gif) repeat-x top;
	border-bottom:1px solid #ddd;
	border-left:1px solid #c3c3c3;
	border-right:1px solid #c3c3c3;
	border-top:1px solid #7c7c7c;
}


input.currency
{
	text-align:right;
}

input.checkbox
{
	display:block;
	height:13px;
	line-height:1.4em;
//	margin:6px 0 0 3px;
//	width:13px;
}

input.radio
{
	display:block;
	height:13px;
	line-height:1.4em;
	margin:6px 0 0 3px;
	width:13px;
}

label.choice
{
	color:#444;
	display:block;
	font-size:100%;
	line-height:1.4em;
	margin:-1.55em 0 0 25px;
	padding:4px 0 5px;
	width:90%;
}

select.select[class]
{
	margin:0;
	padding:1px 0;
}

*:first-child+html select.select[class]
{
	margin:1px 0;
}

.safari select.select
{
	font-size:120% !important;
	margin-bottom:1px;
}

input.small
{
//	width:25%;
}

select.small
{
//	width:25%;
}

input.medium
{
	width:100%;
}

select.medium
{
	width:99%;
}

input.large
{
//	width:99%;
}

select.large
{
//	width:100%;
}

textarea.small
{
//	height:5.5em;
}

textarea.medium
{
//	height:10em;
}

textarea.large
{
//	height:20em;
}

/**** Errors ****/
#error_message
{
	background:#fff;
	border:1px dotted red;
	margin-bottom:1em;
	padding-left:0;
	padding-right:0;
	padding-top:4px;
	text-align:center;
	width:99%;
}

#error_message_title
{
	color:#DF0000;
	font-size:125%;
	margin:7px 0 5px;
	padding:0;
}

#error_message_desc
{
	color:#000;
	font-size:100%;
	margin:0 0 .8em;
}

#error_message_desc strong
{
	background-color:#FFDFDF;
	color:red;
	padding:2px 3px;
}

form li.error
{
	background-color:#FFDFDF !important;
	border-bottom:1px solid #EACBCC;
	border-right:1px solid #EACBCC;
	margin:3px 0;
}

form li.error label
{
	color:#DF0000 !important;
}

form p.error
{
	clear:both;
	color:red;
	font-size:10px;
	font-weight:700;
	margin:0 0 5px;
}

form .required
{
	color:red;
	float:none;
	font-weight:700;
}

/**** Guidelines and Error Highlight ****/
form li.highlighted
{
	background-color:#fff7c0;
}

form .guidelines
{
	background:#f5f5f5;
	border:1px solid #e6e6e6;
	color:#444;
	font-size:80%;
	left:100%;
	line-height:130%;
	margin:0 0 0 8px;
	padding:8px 10px 9px;
	position:absolute;
	top:0;
	visibility:hidden;
	width:42%;
	z-index:1000;
}

form .guidelines small
{
	font-size:105%;
}

form li.highlighted .guidelines
{
	visibility:visible;
}

form li:hover .guidelines
{
	visibility:visible;
}

.no_guidelines .guidelines
{
	display:none !important;
}

.no_guidelines form li
{
	// width:97%;
}

.no_guidelines li.section
{
	padding-left:9px;
}

/*** Success Message ****/
.form_success 
{
	clear: both;
	margin: 0;
//	padding: 90px 0pt 100px;
	text-align: center
}

.form_success h2 {
    clear:left;
    font-size:160%;
    font-weight:normal;
    margin:0pt 0pt 3px;
}

/*** Password ****/
ul.password{
    margin-top:60px;
    margin-bottom: 60px;
    text-align: center;
}
.password h2{
    color:#DF0000;
    font-weight:bold;
    margin:0pt auto 10px;
}

.password input.text {
   font-size:170% !important;
   width:380px;
   text-align: center;
}
.password label{
   display:block;
   font-size:120% !important;
   padding-top:10px;
   font-weight:bold;
}

#li_captcha{
   padding-left: 5px;
}


#li_captcha span{
	float:none;
}

/** Embedded Form **/

.embed #form_container{
	border: none;
}

.embed #top, .embed #bottom, .embed h1{
	display: none;
}

.embed #form_container{
	width: 100%;
}

.embed #footer{
	text-align: left;
	padding-left: 10px;
	width: 99%;
}

.embed #footer.success{
	text-align: center;
}

.embed form.appnitro
{
	margin:0px 0px 0;
	
}



/*** Calendar **********************/
div.calendar { position: relative; }

.calendar table {
cursor:pointer;
border:1px solid #ccc;
font-size: 11px;
color: #000;
background: #fff;
font-family:"Lucida Grande", Tahoma, Arial, Verdana, sans-serif;
}

.calendar .button { 
text-align: center;    
padding: 2px;          
}

.calendar .nav {
background:#f5f5f5;
}

.calendar thead .title { 
font-weight: bold;      
text-align: center;
background: #dedede;
color: #000;
padding: 2px 0 3px 0;
}

.calendar thead .headrow { 
background: #f5f5f5;
color: #444;
font-weight:bold;
}

.calendar thead .daynames { 
background: #fff;
color:#333;
font-weight:bold;
}

.calendar thead .name { 
border-bottom: 1px dotted #ccc;
padding: 2px;
text-align: center;
color: #000;
}

.calendar thead .weekend { 
color: #666;
}

.calendar thead .hilite { 
background-color: #444;
color: #fff;
padding: 1px;
}

.calendar thead .active { 
background-color: #d12f19;
color:#fff;
padding: 2px 0px 0px 2px;
}


.calendar tbody .day { 
width:1.8em;
color: #222;
text-align: right;
padding: 2px 2px 2px 2px;
}
.calendar tbody .day.othermonth {
font-size: 80%;
color: #bbb;
}
.calendar tbody .day.othermonth.oweekend {
color: #fbb;
}

.calendar table .wn {
padding: 2px 2px 2px 2px;
border-right: 1px solid #000;
background: #666;
}

.calendar tbody .rowhilite td {
background: #FFF1AF;
}

.calendar tbody .rowhilite td.wn {
background: #FFF1AF;
}

.calendar tbody td.hilite { 
padding: 1px 1px 1px 1px;
background:#444 !important;
color:#fff !important;
}

.calendar tbody td.active { 
color:#fff;
background: #529214 !important;
padding: 2px 2px 0px 2px;
}

.calendar tbody td.selected { 
font-weight: bold;
border: 1px solid #888;
padding: 1px 1px 1px 1px;
background: #f5f5f5 !important;
color: #222 !important;
}

.calendar tbody td.weekend { 
color: #666;
}

.calendar tbody td.today { 
font-weight: bold;
color: #529214;
background:#D9EFC2;
}

.calendar tbody .disabled { color: #999; }

.calendar tbody .emptycell { 
visibility: hidden;
}

.calendar tbody .emptyrow { 
display: none;
}

.calendar tfoot .footrow { 
text-align: center;
background: #556;
color: #fff;
}

.calendar tfoot .ttip { 
background: #222;
color: #fff;
font-size:10px;
border-top: 1px solid #dedede;
padding: 3px;
}

.calendar tfoot .hilite { 
background: #aaf;
border: 1px solid #04f;
color: #000;
padding: 1px;
}

.calendar tfoot .active { 
background: #77c;
padding: 2px 0px 0px 2px;
}

.calendar .combo {
position: absolute;
display: none;
top: 0px;
left: 0px;
width: 4em;
border: 1px solid #ccc;
background: #f5f5f5;
color: #222;
font-size: 90%;
z-index: 100;
}

.calendar .combo .label,
.calendar .combo .label-IEfix {
text-align: center;
padding: 1px;
}

.calendar .combo .label-IEfix {
width: 4em;
}

.calendar .combo .hilite {
background: #444;
color:#fff;
}

.calendar .combo .active {
border-top: 1px solid #999;
border-bottom: 1px solid #999;
background: #dedede;
font-weight: bold;
}




</style>
 </head>
  <body>

        <h3>Create / Edit Item</h3>
  <div name="FormHolder" style="border-style:double;">
    <form id="form_107147" class="appnitro"  method="post" action="postPage.php">

<div name="FormHolder1" style="border-style:double;float:left;width: 50%;">
       <div class="form_description">
          <h2>Item Information</h2>
        </div>

	<ul>

	    <li id="li_manufacturer" class="" >
   	        <label class="description" for="manufacturer">Manufacturer </label>
                <div>
                    <select class="element select medium" id="manufacturer" name="manufacturer"> 
			<option value="" selected="selected"></option>
			<option value="1" >First option</option>
			<option value="2" >Second option</option>
			<option value="3" >Third option</option>
            	    </select>
                </div>
            </li>

            <li id="li_model" class="">
                <label class="description" for="model">Model </label>
         	<div>
	            <input id="model" name="model" class="element text medium" type="text" maxlength="255" value=""/> 
         	</div> 
            </li>
            <li id="li_serialNumber" class="">
  	        <label class="description" for="serialNumber">Serial Number </label>
	        <div>
		    <input id="serialNumber" name="serialNumber" class="element text medium" type="text" maxlength="255" value=""/> 
	        </div> 
	    </li>

            <li id="li_5" >
	<label class="description" for="caliber">Caliber/Gauge </label>
	<div>
	<select class="element select medium" id="caliber" name="caliber"> 
			<option value="" selected="selected"></option>
			<option value="1" >First option</option>
			<option value="2" >Second option</option>
			<option value="3" >Third option</option>
	</select>
	</div> 
		</li>		<li id="li_6" >
		<label class="description" for="general">General Description </label>
		<div>
		<select class="element select medium" id="general" name="general">
			<option value="" selected="selected"></option>
			<option value="1" >First option</option>
			<option value="2" >Second option</option>
			<option value="3" >Third option</option>
		</select>

		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="barrel">Barrel Length (Inches) </label>
		<div>
			<input id="barrel" name="barrel" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="frame">Frame Type </label>
		<div>
          <select class="element select medium" id="frame" name="frame">
			<option value="" selected="selected"></option>
			<option value="1" >First option</option>
			<option value="2" >Second option</option>
			<option value="3" >Third option</option>
          </select>

		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="107147" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
				<input id="intake" class="button_text" type="button" name="intake" value="Intake" />
				<input id="dps3c" class="button_text" type="button" name="dps3c" value="DPS-3C" />
		</li>
			</ul>
</div>
<div name="FormHolder1" style="border-style:double;float:left;width: 50%;">
       <div class="Seller_description">
          <h2>Seller's Information</h2>
        </div>
<ul >
			
					<li id="li_1" >
		<label class="description" for="firstName">First Name </label>
		<div>
			<input id="firstName" name="firstName" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="middleName">Middle Name </label>
		<div>
			<input id="middleName" name="middleName" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="lastName">Last Name </label>
		<div>
			<input id="lastName" name="lastName" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="dateOfBirth">Date of Birth </label>
		<div>
			<input id="dateOfBirth" name="dateOfBirth" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_5" >
		<label class="description" for="permitNumber">Permit Number </label>
		<div>
			<input id="permitNumber" name="permitNumber" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_6" >
		<label class="description" for="street1">Street 1 </label>
		<div>
			<input id="street1" name="street1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_9" >
		<label class="description" for="street1">Street 2 </label>
		<div>
			<input id="street2" name="street2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_7" >
		<label class="description" for="city">City </label>
		<div>
			<input id="city" name="city" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="state">State </label>
		<div>
		<select class="element select medium" id="state" name="state"> 
			<option value="" selected="selected"></option>
			<option value="1" >First option</option>
			<option value="2" >Second option</option>
			<option value="3" >Third option</option>
		</select>
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="zip">Zip Code </label>
		<div>
			<input id="zip" name="zip" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			</ul>
        </div>

</form>	
  </div>  <!-- End FormHolder -->


  </body>
</html>



