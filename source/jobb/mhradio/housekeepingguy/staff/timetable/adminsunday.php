<? session_start();

include 'dbConfig.php';

$ip = $_SERVER['REMOTE_ADDR']; //get the ip of the current user

if(!isset($_SESSION['session_username']) || empty($_SESSION['session_username']) || $ip!= $_SESSION['session_ip']) {

//if the username is not set or the session username is empty or the ip does not match the session ip log them out

session_unset(); //clears firefox

session_destroy(); //clears IE

die("Error!!!"); }

include("online.php");?>

<? if($_SESSION['session_level'] == "1") { ?>

<?php

include ("dbConfig.php");

$query = "SELECT * FROM sunday";

$result = mysql_query($query);

$update = $_GET['update'];

$num = mysql_numrows($result);

$user = $_SESSION['session_username'];

$i = 0;

while($i < $num){

$a = mysql_result($result,$i,"a");

$b = mysql_result($result,$i,"b");

$c = mysql_result($result,$i,"c");

$d = mysql_result($result,$i,"d");

$e = mysql_result($result,$i,"e");

$f = mysql_result($result,$i,"f");

$g = mysql_result($result,$i,"g");

$x = mysql_result($result,$i,"x");

$h = mysql_result($result,$i,"h");

$ti = mysql_result($result,$i,"i");

$j = mysql_result($result,$i,"j");

$k = mysql_result($result,$i,"k");

$l = mysql_result($result,$i,"l");

$m = mysql_result($result,$i,"m");

$n = mysql_result($result,$i,"n");

$o = mysql_result($result,$i,"o");

$p = mysql_result($result,$i,"p");

$q = mysql_result($result,$i,"q");

$r = mysql_result($result,$i,"r");

$s = mysql_result($result,$i,"s");

$t = mysql_result($result,$i,"t");

$u = mysql_result($result,$i,"u");

$v = mysql_result($result,$i,"v");

$w = mysql_result($result,$i,"w");

$i++;

}

$update = $_GET['update'];

$delete = $_GET['delete'];

?>

<html>

<head><title>Staff Control Panel: Slot Booking</title>

<script language="JavaScript">

  function confirm_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=clear';

    }

  }

      function unbooka_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=ra';

    }

  }  

      function unbookb_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rb';

    }

  }  

      function unbookc_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rc';

    }

  }  

      function unbookd_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rd';

    }

  }  

      function unbooke_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=re';

    }

  }  

      function unbookf_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rf';

    }

  }  

      function unbookg_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rg';

    }

  }  

      function unbookx_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rx';

    }

  }  

      function unbookh_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rh';

    }

  }  

      function unbooki_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=ri';

    }

  }  

      function unbookj_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rj';

    }

  }  

      function unbookk_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rk';

    }

  }  

      function unbookl_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rl';

    }

  }  

      function unbookm_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rm';

    }

  }  

      function unbookn_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rn';

    }

  }  

      function unbooko_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=ro';

    }

  }  

      function unbookp_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rp';

    }

  }  

      function unbookq_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rq';

    }

  }  

      function unbookr_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rr';

    }

  }  

      function unbooks_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rs';

    }

  }  

      function unbookt_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rt';

    }

  }  

      function unbooku_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=ru';

    }

  }  

      function unbookv_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rv';

    }

  }  

    function unbookw_prompt(text) {

    if (confirm(text)) {

      window.location = 'adminsunday.php?update=rw';

    }

  }  

</script>

</head>

<link href="../staff/style.css" rel="stylesheet" type="text/css">

<body>

<p align="left" class="heading"><font face="Verdana" size="1"><u><b>Book Your Sunday Shows</b></u></p></font>

<p align="left" class="main"><font face="Verdana" size="1">This Is Where You Can Book Your Slots For The Day Listed Above.<br>To Book A Slot Please Just Click Book Under A Slot You Can Make.<br><br><b>If You Can't Make Your Slot Then Click On Your Name On The Slot You Booked And It Will Automatically Unbook It.<br>If You Don't Unbook Your Slot You Will Be Warned !</b><br><br><? echo "$user"; ?> As A Member Of The Management Team You Have The Power To Clear The Whole Day After It Has Been Done But Please ONLY Clear The Whole Day At The End Of Each Week By Clicking Clear At The Bottom.<br>You Also Have The Power To Remove Other DJ's Slots !<br>

<br>

</font>

<center>

<font face="Verdana" size="1">

<a href="#" onClick="window.history.go(-1)">Go Back ?</a>&nbsp;~&nbsp;<a href="javascript:location.reload(true)">Refresh ?</a>

  </font>

  <table border="1" bordercolor="#000000" width="45%" class="main" 

cellpadding="2" cellspacing="0">

    <tr>



      <td width=100 align="center"><font face="Verdana" size="1">00:00 - 01:00</font></td>

		<td><font face="Verdana" size="1"><?php if($a == ''){

		echo"<a href=adminsunday.php?update=a>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"a");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbooka_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$a</a>";

               }

		?>

		</font>

		</td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">01:00 - 02:00</font></td>

		<td><font face="Verdana" size="1"><?php if($b == ''){

		echo"<a href=adminsunday.php?update=b>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"b");

                $i++;

                }



		echo "<a href=\"\" onclick=\"unbookb_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$b</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">02:00 - 03:00</font></td>

		<td><font face="Verdana" size="1"><?php if($c == ''){

		echo"<a href=adminsunday.php?update=c>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"c");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookc_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$c</a>";

                }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">03:00 - 04:00</font></td>

		<td><font face="Verdana" size="1"><?php if($d == ''){

		echo"<a href=adminsunday.php?update=d>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"d");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookd_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$d</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">04:00 - 05:00</font></td>

		<td><font face="Verdana" size="1"><?php if($e == ''){

		echo"<a href=adminsunday.php?update=e>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"e");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbooke_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$e</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">05:00 - 06:00</font></td>

		<td><font face="Verdana" size="1"><?php if($f == ''){

		echo"<a href=adminsunday.php?update=f>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"f");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookf_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$f</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">06:00 - 07:00</font></td>

		<td><font face="Verdana" size="1"><?php if($g == ''){

		echo"<a href=adminsunday.php?update=g>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"g");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookg_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$g</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">07:00 - 08:00</font></td>

		<td><font face="Verdana" size="1"><?php if($x == ''){

		echo"<a href=adminsunday.php?update=x>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"x");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookx_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$x</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">08:00 - 09:00</font></td>

		<td><font face="Verdana" size="1"><?php if($h == ''){

		echo"<a href=adminsunday.php?update=h>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"h");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookh_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$h</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">09:00 - 10:00</font></td>

		<td><font face="Verdana" size="1"><?php if($ti == ''){

		echo"<a href=adminsunday.php?update=i>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"i");

                $i++;

                }



		echo "<a href=\"\" onclick=\"unbooki_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$ti</a>";

		}

		?></font></td>

	</tr>

	<tr>



      <td width="100" align="center"><font face="Verdana" size="1">10:00 - 11:00</font></td>

		<td><font face="Verdana" size="1"><?php if($j == ''){

		echo"<a href=adminsunday.php?update=j>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"j");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookj_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$j</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">11:00 - 12:00</font></td>

		<td><font face="Verdana" size="1"><?php if($k == ''){

		echo"<a href=adminsunday.php?update=k>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"k");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookk_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$k</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">12:00 - 13:00</font></td>

		

      <td><font face="Verdana" size="1"><?php if($l == ''){

		echo"<a href=adminsunday.php?update=l>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"l");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookl_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$l</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">13:00 - 14:00</font></td>

	  <td><font face="Verdana" size="1"><?php if($m == ''){

		echo"<a href=adminsunday.php?update=m>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"m");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookm_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$m</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">14:00 - 15:00</font></td>

		

      <td><font face="Verdana" size="1"><?php if($n == ''){

		echo"<a href=adminsunday.php?update=n>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"n");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookn_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$n</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">15:00 - 16:00</font></td>

		

      <td><font face="Verdana" size="1"><?php if($o == ''){

		echo"<a href=adminsunday.php?update=o>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"o");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbooko_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$o</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">16:00 - 17:00</font></td>

		

      <td><font face="Verdana" size="1"><?php if($p == ''){

		echo"<a href=adminsunday.php?update=p>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"p");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookp_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$p</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">17:00 - 18:00</font></td>

		

      <td><font face="Verdana" size="1"><?php if($q == ''){

		echo"<a href=adminsunday.php?update=q>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"q");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookq_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$q</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">18:00 - 19:00</font></td>

		<td><font face="Verdana" size="1"><?php if($r == ''){

		echo"<a href=adminsunday.php?update=r>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"r");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookr_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$r</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">19:00 - 20:00</font></td>

		

      <td><font face="Verdana" size="1"><?php if($s == ''){

		echo"<a href=adminsunday.php?update=s>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"s");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbooks_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$s</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">20:00 - 21:00</font></td>

		

      <td><font face="Verdana" size="1"><?php if($t == ''){

		echo"<a href=adminsunday.php?update=t>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"t");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookt_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$t</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">21:00 - 22:00</font></td>

		<td><font face="Verdana" size="1"><?php if($u == ''){

		echo"<a href=adminsunday.php?update=u>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"u");

                $i++;

                }         

		echo "<a href=\"\" onclick=\"unbooku_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$u</a>";

               }

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">22:00 - 23:00</font></td>

		<td><font face="Verdana" size="1"><?php if($v == ''){

		echo"<a href=adminsunday.php?update=v>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"v");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookv_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$v</a>";

		}

		?></font></td>

	</tr>

	<tr>



      <td width=100 align="center"><font face="Verdana" size="1">23:00 - 00:00</font></td>

		<td><font face="Verdana" size="1"><?php if($w == ''){

		echo"<a href=adminsunday.php?update=w>&nbsp;Book this Slot</a>";

		}

		else{

                $num = mysql_numrows($result);

                $i = 0;

                while($i < $num){

                $check = mysql_result($result,$i,"w");

                $i++;

                }

		echo "<a href=\"\" onclick=\"unbookw_prompt('Are you SURE you want to unbook this slot?'); return false;\">&nbsp;$w</a>";

               }

		?></font></td>

	</tr>

                <tr>



      <td width=100 align="center">

       <font face="Verdana" size="1">

       <?php

       echo "<a href=\"\" onclick=\"confirm_prompt('Are you SURE you want to Clear all slots?'); return false;\">Clear</a>";

       ?>

      </font>

      </td>

	  	  <td>&nbsp;</td>

</tr>

	</table></center>

</body>

<?php



if ($update == a){

$check = mysql_query("SELECT a FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET a='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == b){

$check = mysql_query("SELECT b FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET b='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == c){

$check = mysql_query("SELECT c FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET c='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == d){

$check = mysql_query("SELECT d FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET d='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == e){

$check = mysql_query("SELECT e FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET e='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == f){

$check = mysql_query("SELECT f FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET f='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}







elseif ($update == g){

$check = mysql_query("SELECT g FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET g='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == x){

$check = mysql_query("SELECT x FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET x='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}

elseif ($update == h){

$check = mysql_query("SELECT h FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET h='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == i){

$check = mysql_query("SELECT i FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET i='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == j){

$check = mysql_query("SELECT j FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET j='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == k){

$check = mysql_query("SELECT k FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET k='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == l){

$check = mysql_query("SELECT l FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET l='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == m){

$check = mysql_query("SELECT m FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET m='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == n){

$check = mysql_query("SELECT n FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET n='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == o){

$check = mysql_query("SELECT o FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET o='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == p){

$check = mysql_query("SELECT p FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET p='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == q){

$check = mysql_query("SELECT q FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET q='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == r){

$check = mysql_query("SELECT r FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET r='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == s){

$check = mysql_query("SELECT s FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET s='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == t){

$check = mysql_query("SELECT t FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET t='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == u){

$check = mysql_query("SELECT u FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET u='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == v){

$check = mysql_query("SELECT v FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET v='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}



elseif ($update == w){

$check = mysql_query("SELECT w FROM sunday WHERE id='1'");

if (!$check == ''){

mysql_query("UPDATE sunday SET w='$user'");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}

else{

echo "Sorry, This has already been booked";

}

}





elseif ($update == ra){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"a");

$i++;

}

mysql_query("UPDATE sunday SET a=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rb){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"b");

$i++;

}

mysql_query("UPDATE sunday SET b=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rc){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"c");

$i++;

}

mysql_query("UPDATE sunday SET c=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rd){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"d");

$i++;

}

mysql_query("UPDATE sunday SET d=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == re){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"e");

$i++;

}

mysql_query("UPDATE sunday SET e=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rf){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"f");

$i++;

}

mysql_query("UPDATE sunday SET f=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rx){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"x");

$i++;

}

mysql_query("UPDATE sunday SET x=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rg){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"g");

$i++;

}

mysql_query("UPDATE sunday SET g=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rh){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"h");

$i++;

}

mysql_query("UPDATE sunday SET h=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == ri){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"i");

$i++;

}

mysql_query("UPDATE sunday SET i=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rj){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"j");

$i++;

}

mysql_query("UPDATE sunday SET j=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rk){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"k");

$i++;

}

mysql_query("UPDATE sunday SET k=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rl){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"l");

$i++;

}

mysql_query("UPDATE sunday SET l=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rm){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"m");

$i++;

}

mysql_query("UPDATE sunday SET m=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rn){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"n");

$i++;

}

mysql_query("UPDATE sunday SET n=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == ro){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"o");

$i++;

}

mysql_query("UPDATE sunday SET o=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rp){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"p");

$i++;

}

mysql_query("UPDATE sunday SET p=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rq){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"q");

$i++;

}

mysql_query("UPDATE sunday SET q=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rr){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"r");

$i++;

}

mysql_query("UPDATE sunday SET r=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rs){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"s");

$i++;

}

mysql_query("UPDATE sunday SET s=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rt){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"t");

$i++;

}

mysql_query("UPDATE sunday SET t=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == ru){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"u");

$i++;

}

mysql_query("UPDATE sunday SET u=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rv){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"v");

$i++;

}

mysql_query("UPDATE sunday SET v=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == rw){

$num = mysql_numrows($result);

$i = 0;

while($i < $num){

$check = mysql_result($result,$i,"w");

$i++;

}

mysql_query("UPDATE sunday SET w=''");

echo "<script language=\"javascript\">

<!-- 

location.replace(\"adminsunday.php\");

-->

</script>";

}



elseif ($update == clear){

mysql_query("UPDATE sunday SET a='',b='',c='',d='',e='',f='',g='',h='',i='',j='',k='',l='',m='',n='',o='',p='',q='',r='',s='',t='',u='',v='',w='',x=''");

echo "Cleared";

}

} ?>