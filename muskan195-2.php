<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>web layout</title>
<style type="text/css">
.header{
    width:100%;
	height:150px;
	background-color:#FFFF00;
	float:left;
	text-align:center;
	color:#09F;
	}
.menu{	
	width:100%;
	height:50px;
	background-color:#330033;
	float:left;
	text-align:center;
	color:#FF0000;
	}
.imagecol{
       width:100%;
	height:150px;
	background-image:url(1.jpg);
	float:left;
	text-align:center;
	color:#09F;
         }
		
.leftcontent{
       width:50%;
	height:250px;
	background-color:#00FF00;
	float:left;
	text-align:center;
	color:#000000;
       }
		 
.rightcontent{
             width:50%;
	height:250px;
	background-color:#339933;
	float:left;
	text-align:left;
	color:#000000;
        
		  }		 
	
.frontform{
  margin-top:10px;
 }
 
 .footer{
     width:100%;
	   height:60px;
	   background-color:#0099FF;
	   float:left;
	   text-align:center;
	   color:#FF0000;
     
	 }
	</style>
<script language="javascript1.5">/
function f1()
{
var course=parseInt(document.getElementById('course').value);
var duration=parseInt(document.getElementById('duration').value);
var total= (course* duration);
document.getElementById('ta').value=total;
}
</script>
	
</head>

<body>

<div class="header">
Header column
</div>

<div class="menu">
menu column
</div>

<div class="imagecol">
 </div>
 
<div class="leftcontent">
   <form method="post">
   <div class="front form"><select name="course" id="course" required="required">
   <option value "">Select course</option>
    <option value ="20000">fashion design</option>
	<option value ="30000">makeup</option>
	<option value ="10000">Dance</option>
   </select>
 </div>
 <div class="frontform"><input type="number" name="duration" id="duration" placeholder="Duration" onblur="f1()" /></div>
  <div class="frontform"><input type="number" name="ta" id="ta" readonly="readonly" placeholder="Total amount"/></div>
  <div class="frontform"><input type="submit" /> </div>
  </div>
  </form>
  </div>
  </div>
 
 <div class="rightcontent"> 
 <h5><b><center>CONTACT FORM</center></b></h5>
 <form method="post"> 

<table>

<h5>
<tr>
<td><div class="frontform">  <b>Name </b>  </td><td><input type="text" name="uname"  placeholder="First name" required="required"/> 
                                    <input type="text" name="uname" placeholder="last name" required="required" /> </div></td>
</tr>
<tr>
<td><div class="frontform">  <b>EMail</b> </td> <td><input type="text" name="uname"  placeholder="@email" required="required" /></div></td>	
</tr>
<td><div class="front form">  <b>Contact</b> </td> <td><input type="text" name="contact" placeholder="mobile" required="required" /></div></td>	
</tr>
<tr>
<td><div class="frontform"><b>Gender</b></td> <td>Male<input type="radio" name="gender" value="male"/>
Fe-Male<input type="radio" name="gender" value="female" /></div></td>
</tr>

<tr>
<td></td><td><div class="frontform">
<select name="city" required="required">
<option value="">Select City </option><option value="Delhi">Delhi</option><option value="Meerut">Meerut</option><option value="Noida">Noida</option>
</select>
</td>
</tr>

<tr>
<td></td>
<td>
<div class="frontform"><center><input type="submit" value="submit"/></center></td>
  </h5>
 </div>
</form>
</div>
 </table>
 </div>
<div class="footer">
FOOTER 
</div>
 </body>
 </html>



