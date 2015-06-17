<?PHP
                $cfgProgDir =  'secure_login/';
                include($cfgProgDir . "secure.php");

?>

<html>
<head>
<link rel=stylesheet href="../include/style.css type=text/css>

<title>Logowear</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<script language="JavaScript" type="text/JavaScript">
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_changeProp(objName,x,theProp,theValue) { //v6.0
  var obj = MM_findObj(objName);
  if (obj && (theProp.indexOf("style.")==-1 || obj.style)){
    if (theValue == true || theValue == false)
      eval("obj."+theProp+"="+theValue);
    else eval("obj."+theProp+"='"+theValue+"'");
  }
}

function MM_callJS(jsStr) { //v2.0
  return eval(jsStr)
 }
 
isDisabled = true;  
  
 function toggleTextFields() {
 	if (isDisabled) {
		MM_changeProp('name','','disabled',false,'INPUT/TEXT'); 
		MM_changeProp('rank','','disabled',false,'INPUT/TEXT'); 
		isDisabled = false;
	} else {
		MM_changeProp('name','','disabled',true,'INPUT/TEXT'); 
		MM_changeProp('rank','','disabled',true,'INPUT/TEXT'); 
		isDisabled = true;	
	}
 }
  
//-->
</script>

<script type="text/javascript" language="JavaScript1.2" src="../include/stm31.js"></script>
</head>

<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" 
onLoad="MM_preloadImages('../images/buttons_r1_c1_f2_flame2.gif','../images/buttons_r1_c2_f2_flame2.gif','../images/buttons_r1_c3_f2_flame2.gif','../images/buttons_r1_c4_f2_flame2.gif','../images/buttons_r1_c5_f2_flame2.gif','../images/buttons_r1_c6_f2_flame2.gif','../images/buttons_r1_c7_f2_flame2.gif')">

<table width="100%">
	<tr bgcolor="#CBC5CC">
		<td>
			<script type="text/javascript" language="JavaScript1.2">
				<!--
				stm_bm(["menu2d6b",400,"","../images/blank.gif",0,"","",0,0,250,0,1000,1,0,0,"","",0],this);
				stm_bp("p0",[0,4,0,0,1,4,0,7,69,"",-2,"",-2,90,1,1,"#ffcc00","transparent","",3,0,0,"#ffffff"]);
				stm_ai("p0i0",[0,"      Home      ","","",-1,-1,0,"index.php","_self","","","","",0,0,0,"","",0,0,0,0,1,"#ffffff",1,"#ffffff",1,"../images/xp3.gif","../images/xp4.gif",3,3,1,1,"#cccccc","#9690a8","#000000","#000000","bold 8pt Arial","bold 8pt Arial",0,0]);
				stm_aix("p0i1","p0i0",[0,"      About Us      ","","",-1,-1,0,"aboutUs.php"]);
				stm_aix("p0i2","p0i0",[0,"      Contact Us      ","","",-1,-1,0,"contactUs.php"]);
				stm_aix("p0i3","p0i0",[0,"      My Account      ","","",-1,-1,0,"","_self","","","","",0,0,0,"../images/arrow_r.gif","../images/arrow_r.gif",7,7]);
				stm_bpx("p1","p0",[1,4,0,0,1,4,0,0]);
				stm_aix("p1i0","p0i0",[0,"     View Order History     ","","",-1,-1,0,"orderHistory.php"]);
				stm_aix("p1i1","p0i0",[0,"     Account Information     ","","",-1,-1,0,"accountInfo.php"]);
				stm_aix("p1i2","p0i0",[0,"     Shipping Information     ","","",-1,-1,0,"shipInfo.php"]);
				stm_ep();
				stm_aix("p0i4","p0i0",[0,"     View Shopping Cart     ","","",-1,-1,0,"shoppingCart.php"]);
				stm_aix("p0i5","p0i0",[0,"     Check Out     ","","",-1,-1,0,"checkOut.php"]);
				stm_aix("p0i6","p0i0",[0,"      Login      ","","",-1,-1,0,"login.php"]);
				stm_ep();
				stm_em();
//-->
</script>


		</td>
	</tr>
	<tr>
		<td height=5 bgcolor="#FACDA5"><img src="../images/clear.gif" height=1 border=0></td>
  	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="740">
     <tr>
        <td><img src="../images/clear.gif" height=3 border=0></td>
     </tr>
     <tr>
	<td><a href="../index.php"><img src="../images/lvfr_logo.gif" border=0></a></td>
	<td align="right">
		<?php
			// Variable for hours

			$hourdiff = "0"; // hours difference between server time and local time

			// If you don't know how many hours, then "uncomment" the three lines
			// below by deleting "// " to see what the server time is (remember to
			// put the comments "// " back when you've finished checking:

			// $serverdate = date("l, d F Y h:i a");
			// print ("$serverdate");
			// print (" &nbsp; <p>");

			// Nothing needs to be changed below here unless you want to change
			// the format of the date (see above for URL of options) or your local
			// time is behind the server time

			$timeadjust = ($hourdiff * 60 * 60);

			$melbdate = date("l, d F Y h:i a",time() + $timeadjust);

			print ("$melbdate");

		?>
	</td>
     </tr>
     <tr>
	<td><img src="../images/clear.gif" height=3 border=0></td>
     </tr>
     <tr>
	<td background="../images/uline.gif" border=0><img src="../images/clear.gif" border=0></td>
     </tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" width="760">
    <tr>
      <td><a href="catalog.php" onMouseOut="MM_swapImgRestore()"  
	onMouseOver="MM_swapImage('buttons_r1_c1_2','','../images/buttons_r1_c1_f2_flame2.gif',1)" ><img name="buttons_r1_c1_2" 
	src="../images/buttons_r1_c1_2.gif" width="89" height="110" border="0"></a>
     </td>
      <td><a href="catalog2.php" onMouseOut="MM_swapImgRestore()"  
	onMouseOver="MM_swapImage('buttons_r1_c2_2','','../images/buttons_r1_c2_f2_flame2.gif',1)" ><img name="buttons_r1_c2_2" 
	src="../images/buttons_r1_c2_2.gif" width="89" height="110" border="0"></a>
     </td>
      <td><a href="#" onMouseOut="MM_swapImgRestore()"  
	onMouseOver="MM_swapImage('buttons_r1_c3_2','','../images/buttons_r1_c3_f2_flame2.gif',1)" ><img name="buttons_r1_c3_2" 
	src="../images/buttons_r1_c3_2.gif" width="89" height="110" border="0"></a>
     </td>
      <td><a href="#" onMouseOut="MM_swapImgRestore()"  
	onMouseOver="MM_swapImage('buttons_r1_c4_2','','../images/buttons_r1_c4_f2_flame2.gif',1)" ><img name="buttons_r1_c4_2" 
	src="../images/buttons_r1_c4_2.gif" width="89" height="110" border="0"></a>
      </td>
      <td><a href="#" onMouseOut="MM_swapImgRestore()"  
	onMouseOver="MM_swapImage('buttons_r1_c5_2','','../images/buttons_r1_c5_f2_flame2.gif',1)" ><img name="buttons_r1_c5_2" 
	src="../images/buttons_r1_c5_2.gif" width="89" height="110" border="0"></a>
     </td>
      <td><a href="#" onMouseOut="MM_swapImgRestore()"  
	onMouseOver="MM_swapImage('buttons_r1_c6_2','','../images/buttons_r1_c6_f2_flame2.gif',1)" ><img name="buttons_r1_c6_2" 
	src="../images/buttons_r1_c6_2.gif" width="89" height="110" border="0"></a>
      </td>
      <td><a href="#" onMouseOut="MM_swapImgRestore()"  
	onMouseOver="MM_swapImage('buttons_r1_c7_2','','../images/buttons_r1_c7_f2_flame2.gif',1)" ><img name="buttons_r1_c7_2" 
	src="../images/buttons_r1_c7_2.gif" width="89" height="110" border="0"></a>
      </td>
   </tr>
  </table>

</body>
</html>
