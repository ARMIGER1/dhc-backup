<?php
$page = $_GET['page'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="donhughescountry.com , Don Hughes is a country singer as well as an actor with exceptional talent which includes acting, singing, songwriting, keyboards, guitar, and much more.">
<meta name="keywords" content="don hughes, country music, country, too good to be true, another wasted good time, thats how far love goes, illusions of love, hughes,">
<title>Don Hughes Country</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="ajax_page.js"></script>
<script type="text/javascript" src="niceforms.js"></script>
<script type="text/javascript">
function pagechange(div) {
hide('musicnews');
hide('bio');
hide('album');
hide('media');
hide('media2');
hide('acting');
hide('contactus');
hide('buycd');
hide('poster');
hide('acting1');
hide('acting2');
hide('acting3');
hide('acting4');
hide('acting5');
hide('acting7');
show(div);
}

function init() {
<?php
if ($page !== null) {
?>
hide('musicnews');
show('<?php echo $page ?>');
<?php
}
?>
}

window.onload = init;
</script>
<link rel="stylesheet" href="niceforms.css" type="text/css" />
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style2 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; }
.style3 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style8 {color: #FFFFFF}
-->
</style>	
</head>
<body bgcolor="#000000">

<div id="Layerb" style="position:absolute; width:185px; height:43px; z-index:1; left: 20px; top: 45px;"><img src="jukebox.jpg" alt="dons_jukebox"></img></div>


<div id="Layera" style="position:absolute; width:217px; height:61px; z-index:2; left: 1px; top: 80px;">
 	<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="219" height="57">
    	<param name="movie" value="/radio2.swf"></param>
    	<param name="PLAY" value="false"></param><param name="LOOP" value="false"></param>
    	<embed src="/radio2.swf" width="219" height="57" loop="false" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" play="false"></embed></object>
</div>

<div id="Layerb" style="position:absolute; width:410px; height:49px; z-index:1; left: 230px; top: -45px;"><img src="mainbar.jpg" alt="music"></img></div>

<div id="Layerc" style="position:absolute; width:691px; height:16px; z-index:3; left: 98px; top: 141px; border: 1px none #000000;"><img src="/donsmenu.gif" border="0" usemap="#bar3_Map" alt="donhughes"></img> 
</div>

<div id="Layerd" style="position:absolute; width:99px; height:16px; z-index:4; left: -1px; top: 141px; background-color: #CFCFD1; layer-background-color: #CFCFD1; border: 1px none #000000;"></div>
	<map name="bar3_Map">
		<area shape="rect" alt="" coords="597,0,691,16" href="industry_new.php">
		<area shape="rect" alt="" coords="515,0,596,16" href="javascript:pagechange('contactus');">
		<area shape="rect" alt="" coords="412,0,514,16" target="_top" href="http://www.myspace.com/donhughes">
		<area shape="rect" alt="" coords="368,0,412,16" href="javascript:pagechange('acting');">
		<area shape="rect" alt="" coords="285,0,367,16" href="http://www.cafepress.com/donhughes">
		<area shape="rect" alt="" coords="233,0,284,16" href="javascript:pagechange('media');">
		<area shape="rect" alt="" coords="150,0,232,16" href="javascript:pagechange('buycd');">
		<area shape="rect" alt="" coords="78,0,149,15" href="javascript:pagechange('bio');">
		<area shape="rect" alt="" coords="0,0,77,15" href="javascript:pagechange('musicnews');">
	</map>
	
<div id="Layer1" style="position:absolute; width:577px; height:303px; z-index:1; left: -1px; top: 222px; background-color: #FFFFFF; layer-background-color: #FFFFFF; border: 1px none #000000;"></div>

<div id="Layer2" style="position:absolute; width:200px; height:5px; z-index:2; left: 550px; top: 156px; visibility: visible; background-color: #000000; layer-background-color: #000000; border: 1px none #000000;"><img src="/main1.jpg" width="239" height="369" border="0" usemap="#Map" alt="too good to be true"></img>&nbsp;&nbsp;  
  <map name="Map">
    <area shape="rect" coords="154,315,236,364" href="http://www.comstockrecords.com/" target="_blank"></area>
  </map> 
</div>

<div id="Layer4" style="position:absolute; width:481px; height:65px; z-index:4; left: 97px; top: 157px; background-color: #CFCFD1; layer-background-color: #CFCFD1; border: 1px none #000000;"><img src="/moutinsky.jpg" width="488" height="66" alt="europe"></img></div>

<div id="Layer6" style="position:absolute; width:101px; height:66px; z-index:6; left: -3px; top: 157px; background-color: #CFCFD1; layer-background-color: #CFCFD1; border: 1px none #000000; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:10px;">
	<div id="Layer8" style="position:absolute; width:96px; height:63px; z-index:8; left: 3px; top:-5px;"> 
    	<a href="javascript:pagechange('poster');"><img border="0" src="newposter.jpg" alt="country music poster"/></a>
  	</div>
</div>

<div id="musicnews" style="position:absolute; width:555px; height:303px; z-index:5; left: -3px; top: 222px; background-color: #FFFFFF; ">			
	<div id="Layer1" style="position:absolute; width:541px; height:303px; z-index:1; left: -2px; top: 0px;">
  		<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="541" height="303">
      		<param name="movie" value="/news1.swf"></param>
          	<param name="quality" value="high"></param><param name="LOOP" value="false"></param>
	      	<embed src="/news1.swf" width="541" height="303" loop="false" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash"></embed></object>
	</div>
</div>

<div id="bio" style="position:absolute; padding-right:20px; width:500px; height:303px; z-index:5; left: 20px; top: 222px; display: none;overflow:auto;">
  <p align="justify"><img src="/Discography.gif" width="408" height="46" alt="thats how far love goes"></img></p>
    <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif"><strong>2003</strong>
    	&#8220;That&#8217;s How Far Love Goes&#8221; - Smart Guy Music<br />
	    <strong>2000</strong> &#8220;Can&#8217;t Put Out a Fire&#8221; Track featured
	        in movie soundtrack &#8220;Alien Species&#8221;<br />
		    <strong>2000</strong> &#8220;Given The Way She Is&#8221; - Smart Guy Music</font><br />
		        <img src="/Biography.gif" width="408" height="46" alt="hughes"></img> </p>
			  <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Don Hughes
			      a musician whose songwriting abilities can best be described as hooky. (hook-ee means "catchy")
			          A gifted country singer and songwriter, Hughes&#8217; love of making music
				      and telling stories comes across in his latest CD That&#8217;s How Far Love
				          Goes. It is the second release through Hughes&#8217; Smart Guy Music label
					      and the second consecutive CD produced by Marty Rifkin (Bruce Springsteen,
					          Dwight Yoakum.) It features ten original songs by Don Hughes including the
						      singles &#8220;That&#8217;s How Far Love Goes,&#8221; which spent eighteen
						          weeks on European radio charts and &#8220;Illusions of Love,&#8221; which
							      reached #1 on the UK radio charts in March 2005.</font></p>
							        <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Hughes
								    grew up in Anderson, a small country town in Northern California and, like
								        most kids, he enjoyed listening to rock n&#8217; roll. It was the Beatles
									    who inspired him to play guitar. He began guitar lessons at the age of eight
									        and went on to study music at Mt. Hood College in Oregon where he majored
										    in theory and composition. He continued to study music and began vocal training
										        and it wasn&#8217;t long before he was writing his own songs. In fact it&#8217;s
											    the crafting of songs that he says he enjoys most -- creating a great story,
											        adding a melody, and finding an infectious hook. </font></p>
												  <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Don Hughes&#8217;
												      talents go beyond music. After college he moved to Los Angeles to pursue music.
												          However an agent encouraged him to study acting, and he was soon at work on
													      commercials and modeling. He continued writing and performing rock n&#8217;
													          roll, jazz, R&amp;B, and pop music while acting. Commercials led to Soap Operas
														      and ultimately leading roles in feature films. </font></p>
														        <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Hughes&#8217;
															    was spending as much time as possible writing music. Having been a studentof all music and a lover of the &#8216;story&#8217;, it took a good friend
															        to point out that he had written a country song and that it was the best he&#8217;d
																    ever written. He was country and he was hooked. From that point Hughes has
																        devoted all his time to the genre that he feels is a &#8216;natural fit&#8217;
																	    and has established an extensive catalog. </font></p>
																	      <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Hughes
																	          met producer Marty Rifkin through a mutual friend who believed Rifkin would
																		      want to work with Hughes. The two immediately connected and since have collaborated
																		          on two CDs. In fact, Rifkin appears on all recordings with Hughes. Rifkin
																			      has praised Hughes&#8217; songwriting as &#8216;full of hope and never bitter.&#8221;
																			          </font></p>
																				    <p align="justify"><font size="2" face="Arial, Helvetica, sans-serif">Don Hughes
																				        currently lives in Redondo Beach, California and is already at work on a third
																					    CD, which he plans to record in early 2006. Hughes will release several more
																					        singles from That&#8217;s How Far Love Goes and is preparing to support the
																						    CD with an upcoming tour. His long-term touring goals include Europe, where
																						        he finds himself in high demand. He is in the process of assembling top-notch
																							    musicians and expects to be out on the road by fall. One other dream Don Hughes
																							        would like to see come true is his foundation for children</font>.</p>
																								  <p align="center"><strong><img src="/Trivia.gif" width="408" height="46"></img></strong></p>
																								    <p align="center"><font size="3" face="Arial, Helvetica, sans-serif">Wrote and
																								        arranged all songs on both CDs. </font></p>
																									  <p align="center"><font size="3" face="Arial, Helvetica, sans-serif"> Second
																									      CD, That&#8217;s How Far Love Goes completed in 2003</font></p>
																									        <p align="center"><font size="3" face="Arial, Helvetica, sans-serif"> &#8220;Can&#8217;t
																										    Put Out A Fire&#8221; single on soundtrack of Alien Species movie in 2000</font></p>
																										      <p align="center"><font size="3" face="Arial, Helvetica, sans-serif"> First
																										          CD &#8220;Given The Way She Is&#8221; completed in 1999</font></p>
																											    <p align="center"><font size="3" face="Arial, Helvetica, sans-serif"> Commissioned
																											        to write three songs for &#8220;Billy The Kid&#8221; movie in 1996</font></p>
																												  <p align="center"><font size="3" face="Arial, Helvetica, sans-serif"> Studied
																												      music theory and composition at Mt. Hood</font></p>
																												        <p align="center"><font size="3" face="Arial, Helvetica, sans-serif"> Playing
																													    guitar since childhood</font></p>
</div>


<div id="buycd" style="position:absolute; width:555px; height:303px; z-index:5; left: 13F0px; top: 230px;display:none;">
<table width="400" height="167" border="0" align="center">
  <tr>
    <td><div align="center" class="style2"><a href="http://www.cdbaby.com/cd/donhughes" style="text-decoration: none; color:#000000" target="_top">Buy CD Here! <br /><img src="/DonCD11.jpg" width="100" height="92" border="0" alt="artist"></img></a></div></td>
  </tr>
  <tr>
    <td height="27"><div align="center" class="style3">or</div></td>
  </tr>
  <tr>
    <td><div align="center" class="style2">Download your favorite song/CD below!</div><br /><div align="center"><a href="http://www.listen.com/" target="_blank"><img src="/service_logo_1.jpg" width="120" height="30" border="0" alt="napster"></a><a href="http://www.napster.com/" target="_blank"><img src="/service_logo_2.jpg" width="120" height="30" border="0" alt="itunes"></a><a href="http://www.apple.com/itunes/store/" target="_blank"><img src="/service_logo_4.jpg" width="120" height="30" border="0" alt="australia"></a><br><a href="http://www.emusic.com/promo/home.html;jsessionid=B330C3876471513CF75F12E9BEA75D70.server4" target="_blank"><img src="/service_logo_13.gif" width="120" height="30" border="0" alt="belgium"></a><a href="http://www.msn.com/" target="_blank"><img src="/service_logo_18.jpg" width="120" height="30" border="0" alt="new zealand"></a><a href="http://www.ruckusnetwork.com/" target="_blank"><img src="/service_logo_29.gif" width="120" height="30" border="0" alt="france"></a><br><a href="http://www.musicnow.com/prospect/home.jhtml?_requestid=215" target="_blank"><img src="/service_logo_7.jpg" width="120" height="30" border="0" alt="sweden"></a><a href="http://musicstore.connect.com/" target="_blank"><img src="/service_logo_19.jpg" width="120" height="30" border="0" alt="don country"></a><a href="http://bigpondmusic.com/splash.asp" target="_blank"><img src="/service_logo_30.gif" width="120" height="30" border="0" alt="europe"></a></div></td>
  </tr>
</table>
</div>



<div id="album" style="position:absolute; width:555px; height:303px; z-index:5; left: 40px; top: 230px;display:none;">
	<div id="Layer3" style="position:absolute; width:92px; height:82px; z-index:3; left: 5px; top: 1px;"><a href="javascript:pagechange('buycd');" ><img src="/DonCD1.jpg" width="224" height="205" border="0" alt="artist"></img></a></div>
	<div id="Layer4" style="position:absolute; width:200px; height:42px; z-index:8; left: 227px; top: 10px;">
  	<p><font size="2" face="Times New Roman, Times, serif">Includes the #1 hit single <br />&quot;Illusion of Love&quot;<br /><br />And
    long time running chart favorite &quot;Thats How Far Love Goes&quot;</font></p>
  	</div>
    <div id="Layer6" style="position:absolute; width:200px; height:55px; z-index:6; left: 43px; top: 210px;"><font size="2" face="Times New Roman, Times, serif">Produced
      by <strong>Marty Rifkin</strong> <br />
        All songs by <strong>Don Hughes</strong> <br />
	  Executive producer <strong>Earl Butler </strong><br />
	    Recorded and mixed at <strong>Rifkin Prods</strong><br />
	      </font>
	</div>
	<div id="Layer7" style="position:absolute; width:175px; height:92px; z-index:7; left: 215px; top: 100px;"><a href="javascript:pagechange('buycd');"><img src="/albumcase.gif" width="197" height="106" border="0" alt="country singer"></img></a></div>
	<div id="Layer7" style="position:absolute; width:175px; height:92px; z-index:7; left: 260px; top: 200px;"><a href="javascript:pagechange('buycd');"><img src="buy.jpg" border="0" alt="singer"></img></a></div>
</div>

<div id="media" style="position:absolute; width:555px; height:303px; z-index:5; left: -5px; top: 260px; display:none;"><table width="90%" border="0" cellspacing="2" cellpadding="2" align="center">
  <tr>
      <td width="20%" align="center">&nbsp;</td>
          <td colspan="3" align="center"> <table width="100%" border="0" cellspacing="0" cellpadding="4">
	          <tr>
		            <td align="center" valign="top" width="33%"> <p><a href="http://www.DonHughescountry.com/photoview1.html" target="_blank"><img src="mm/stationery/ThumbnailGrid/DHsm1.gif" name="image" width="144" height="96" border="0" alt="don hughes"></img></a></p>
			                <p><font color="#999999" size="1" face="Times New Roman, Times, serif">Click
					              on each photo to launch Dons Photo Viewer 1.0</font></p>
                </td>
								            <td align="center" valign="top" width="33%"> <a href="http://www.donhughescountry.com/photoview2.html" target="_blank"><img src="mm/stationery/ThumbnailGrid/dh_5032sm.gif" name="image" width="96" height="144" border="0" alt="singer"></img></a></td>
									              <td align="center" valign="top" width="33%"> <a href="http://www.DonHughescountry.com/photoview3.html" target="_blank"><img src="mm/stationery/ThumbnailGrid/dh_2077sm.gif" name="image" width="144" height="96" border="0" alt="myspace"></img></a></td>
            </tr>
											              <tr>
												                <td align="center" valign="top" colspan="3"> <hr noshade size="1"> </td>
	        </tr>
															      </table></td>
															          <td width="20%" align="center">&nbsp;</td>
    </tr>
																      
																		    </table>
	<div>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2" align="right" valign="bottom"> <a href="javascript:pagechange('media2');"><nobr>&lt; Previous</nobr /></a></td>
				<td valign="top" width="60%"></td>
				<td valign="bottom" colspan="2"> <a href="javascript:pagechange('media2');"><nobr>Next &gt;</nobr /></a></td>
			</tr>
		</table>
	</div>
</div>
																			
<div id="media2" style="position:absolute; width:555px; height:303px; z-index:5; left: -5px; top: 260px; display:none;"><table width="90%" border="0" cellspacing="2" cellpadding="2" align="center">
  <tr>
      <td width="20%" align="center">&nbsp;</td>
          <td colspan="3" align="center"> <table width="100%" border="0" cellspacing="0" cellpadding="4">
	          <tr>
		            <td align="center" valign="top" width="33%"> <p><a href="http://www.DonHughescountry.com/photoview4.html" target="_blank"><img src="dh_1sm.gif" name="image" width="144" height="96" border="0"></img></a><br />
			                </p>
					            <p><font color="#999999" size="1" face="Times New Roman, Times, serif">Click
						                  on each photo to launch Dons Photo Viewer 1.0</font></p>
                </td>
									                <td align="center" valign="top" width="33%"> <a href="http://www.donhughescountry.com/photoview5.html" target="_blank"><img src="dh_2sm.gif" name="image" width="96" height="144" border="0"></img></a><br />
	            </td>
												            <td align="center" valign="top" width="33%"> <a href="http://www.DonHughescountry.com/photoview6.html" target="_blank"><img src="dh_3sm.gif" name="image" width="96" height="144" border="0"></img></a><br />
                </td>
            </tr>
															              <tr>
																                <td align="center" valign="top" colspan="3"> <hr noshade size="1"> </td>
	        </tr>
																			      </table></td>
																			          <td width="20%" align="center">&nbsp;</td>
    </tr>
																				      
																						    </table>
	<div>
		<table width="100%" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2" align="right" valign="bottom"> <a href="javascript:pagechange('media');"><nobr>&lt; Previous</nobr /></a></td>
				<td valign="top" width="60%"></td>
				<td valign="bottom" colspan="2"> <a href="javascript:pagechange('media');"><nobr>Next &gt;</nobr /></a></td>
			</tr>
		</table>
	</div>
</div>

<div id="contactus" style="position:absolute; width:555px; height:303px; z-index:5; left: 25px; top: 245px;display:none;">
	<div style="float:left" ><img src="dh.gif" alt="don hughes"/></img></div>
	<table cellpadding="0" cellspacing="0" align="center" width="300">
        <tr>
	        <td ><font color="#FF6633"><b>
	<div id="processing" style="float:right" ></div></b></font>
	<div id="container">
			<form action="vars.php" method="post">
			        <label for="textinput"><b>Email Address:</b></label><br />
				        <input type="text" id="textinput" name="textinput" class="textinput" maxlength="50" /><br /><br />
					        <label for="textareainput"><b>Comments:</b></label><br />
						        <textarea id="textareainput" name="textareainput" class="textarea"></textarea><br />
							        <br />
								        <input type="button" value="Submit" class="buttonSubmit" onclick="sendemail();" />

		<div id="stylesheetTest"> </div>
		  </form>
	</div>
		  </td>
	  </tr>
  </table>
</div>
																		    

<div id="acting1" style="position:absolute; width:550px; height:303px; z-index:5; left: 2px; top: 240px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-size:14px; font-weight:bold;" align="center">
<div style="position:absolute; width:700px; height:16px; z-index:3; left:-150px;"><img src="actingmenu.gif"  usemap="#actingmenu" border="none" alt="another wasted good time"/></div>
<map name="actingmenu">
<area shape="rect" alt="" coords="456,0,558,16" href="javascript:pagechange('acting5');">
<area shape="rect" alt="" coords="384,0,456,16" href="javascript:pagechange('acting1');">
<area shape="rect" alt="" coords="326,0,384,16" href="javascript:pagechange('acting2');">
<area shape="rect" alt="" coords="269,0,326,16" href="javascript:pagechange('acting3');">
</map>

<br />
<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" width="320" height="260" codebase="http://www.apple.com/qtactivex/qtplugin.cab" >
<param name="src" value="dhfilm.mp4">
<param name="autoplay" value="true">
<param name="controller" value="true">
<embed src="dhfilm.mp4" width="320" height="260" autoplay="true" controller="true" pluginspage="http://www.apple.com/quicktime/download/">
</embed>
</object> 
</div>

<div id="acting" style="position:absolute; width:550px; height:303px; z-index:5; left: 2px; top: 240px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-size:14px; font-weight:bold;" align="center">
<div style="position:absolute; width:700px; height:16px; z-index:3; left:-150px; "><img src="actingmenu.gif"  usemap="#actingmenu" border="none" alt="don country"/>
<map name="actingmenu">
<area shape="rect" alt="" coords="456,0,558,16" href="javascript:pagechange('acting5');">
<area shape="rect" alt="" coords="384,0,456,16" href="javascript:pagechange('acting1');">
<area shape="rect" alt="" coords="326,0,384,16" href="javascript:pagechange('acting2');">
<area shape="rect" alt="" coords="269,0,326,16" href="javascript:pagechange('acting3');">
</map>
</div>
<br /><br />
<table cellpadding="10px" cellspacing="0" width="450px" style="position:relative; left:-15px; top:20px;">
<tr>
<td colspan="2" style="font-size:14px;" align="justify"><div align="justify" style="text-indent:30pt;">Upon arrivng in Los Angeles to pursue music, Don  got an agent to do some print work for extra money. That led to commercials and studying with some quality Hollywood acting coaches, all-the-while crafting his music and recording. After principle roles and a recurring role on L.A. soaps, Don did some theatre and then found his real love in feature films, as he enjoys developing his characters.</div></td>
</tr>
</table>
</div>

<div id="acting5" style="position:absolute; width:550px; height:303px; z-index:5; left: 2px; top: 240px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-size:14px; font-weight:bold;" align="center">
<div style="position:absolute; width:700px; height:16px; z-index:3; left:-150px; "><img src="actingmenu.gif"  usemap="#actingmenu"border="none" alt="acting"/>
<map name="actingmenu">
<area shape="rect" alt="" coords="456,0,558,16" href="javascript:pagechange('acting5');">
<area shape="rect" alt="" coords="384,0,456,16" href="javascript:pagechange('acting1');">
<area shape="rect" alt="" coords="326,0,384,16" href="javascript:pagechange('acting2');">
<area shape="rect" alt="" coords="269,0,326,16" href="javascript:pagechange('acting3');">
</map>
</div>
<br /><br />
<table cellpadding="10px" cellspacing="0" width="400px" style="position:relative; left:-8px;">
<td><img src="newjana.jpg" alt="don acting"/></td>
<td valign="bottom" align="center"><font style="text-decoration:underline;" size="+1" face="Times New Roman, Times, serif">Publicist</font><br /><font size="-1" face="Times New Roman, Times, serif"><font size="+1" face="Times New Roman, Times, serif">Angela Moore</font><br />Tel:    310-429-8868<br />eFax:  270-637-8164<br />info@starfish-pr.com<br />www.starfish-pr.com</font></td>
</tr>
</table>
</div>

<div id="acting2" style="position:absolute; width:550px; height:303px; z-index:5; left: 2px; top: 240px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-size:14px; font-weight:bold;" align="center">
<div style="position:absolute; width:700px; height:16px; z-index:3; left:-150px; "><img src="actingmenu.gif"  usemap="#actingmenu"border="none" alt="acting"/>
<map name="actingmenu">
<area shape="rect" alt="" coords="456,0,558,16" href="javascript:pagechange('acting5');">
<area shape="rect" alt="" coords="384,0,456,16" href="javascript:pagechange('acting1');">
<area shape="rect" alt="" coords="326,0,384,16" href="javascript:pagechange('acting2');">
<area shape="rect" alt="" coords="269,0,326,16" href="javascript:pagechange('acting3');">
</map>

</div>
<br /><br />
<img src="pic1.gif" alt="don hugehs"/><br /><br />
<font color="#CCCCCC">1</font> - <a href="javascript:pagechange('acting4');">2</a> - <a href="javascript:pagechange('acting7');">3</a>

</div>

<div id="acting7" style="position:absolute; width:550px; height:303px; z-index:5; left: 2px; top: 240px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-size:14px; font-weight:bold;" align="center">
<div style="position:absolute; width:700px; height:16px; z-index:3; left:-150px; "><img src="actingmenu.gif"  usemap="#actingmenu"border="none"  alt="hughes"/>
<map name="actingmenu">
<area shape="rect" alt="" coords="456,0,558,16" href="javascript:pagechange('acting5');">
<area shape="rect" alt="" coords="384,0,456,16" href="javascript:pagechange('acting1');">
<area shape="rect" alt="" coords="326,0,384,16" href="javascript:pagechange('acting2');">
<area shape="rect" alt="" coords="269,0,326,16" href="javascript:pagechange('acting3');">
</map>

</div>
<br /><br />
<img src="second.jpg" alt="too good to be true"/><br /><br />
<a href="javascript:pagechange('acting2');" style="text-decoration:none; color:#000000">1</a> - <a href="javascript:pagechange('acting4');" style="text-decoration:none; color:#000000">2</a> - <font color="#CCCCCC">3</font>

</div>

<div id="acting3" style="position:absolute; width:550px; height:303px; z-index:5; left: 2px; top: 240px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-size:14px; font-weight:bold;" align="center">
<div style="position:absolute; width:700px; height:16px; z-index:3; left:-150px; "><img src="actingmenu.gif"  usemap="#actingmenu"border="none" alt="don hughes"/>
<map name="actingmenu">
<area shape="rect" alt="" coords="456,0,558,16" href="javascript:pagechange('acting5');">
<area shape="rect" alt="" coords="384,0,456,16" href="javascript:pagechange('acting1');">
<area shape="rect" alt="" coords="326,0,384,16" href="javascript:pagechange('acting2');">
<area shape="rect" alt="" coords="269,0,326,16" href="javascript:pagechange('acting3');">
</map>

</div>
<br /><br /><br /><br />
<div style="position:relative; z-index:6; overflow:auto; width:530px; height:250px; top:-40px; " align="left">
<table width="495" border="0" cellpadding="2" cellspacing="0" style="font:Verdana, Arial, Helvetica, sans-serif; font-size:10px">
  <tr>
    <td colspan="4" ><div align="center" style="font-size:36px; position:relative; left:5px;">Don Hughes</div></td>
  </tr>
  <tr>
    <td width="216"></td>
    <td width="137"><div align="center" style="font-size:14px">SAG/AFTRA</div></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" rowspan="4"><div align="center"><img src="res.gif" width="150" height="100"></div></td>
    <td width="56" height="28"><div align="right" style="font-size:12px">HEIGHT:</div></td>
    <td width="75"><div align="right" style="font-size:12px">5'10&quot;</div></td>
  </tr>
  <tr>
    <td height="25"><div align="right" style="font-size:12px">WEIGHT:</div></td>
    <td><div align="right" style="font-size:12px">180 lbs</div></td>
  </tr>
  <tr>
    <td height="27"><div align="right" style="font-size:12px">HAIR:</div></td>
    <td><div align="right" style="font-size:12px">Brown</div></td>
  </tr>
  <tr>
    <td><div align="right" style="font-size:12px">EYES:</div></td>
    <td><div align="right" style="font-size:12px">Green</div></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#FFFFFF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#354972" style="color:#FFFFFF; padding:3px; font-size:12px">FILM</td>
  </tr>
  <tr>
    <td colspan="4" height="10px"></td>
  </tr>
  <tr>
    <td> Controlled Chaos</td>
    <td >Starring </td>
    <td colspan="2"> Reliance Films</td>
  </tr>
  <tr>
    <td> The Machine</td>
    <td > Co-Star </td>
    <td colspan="2"> Mayco-Terrace Prods.</td>
  </tr>
  <tr>
    <td> Iron Thunder </td>
    <td > Co-Star </td>
    <td colspan="2"> TeleCom Ent.</td>
  </tr>
  <tr>
    <td> Public Enemy </td>
    <td > Starring </td>
    <td colspan="2"> Wildcat Prods.</td>
  </tr>
  <tr>
    <td> Slight Ending </td>
    <td > Co-Star </td>
    <td colspan="2"> UNI Ent.</td>
  </tr>
  <tr>
    <td> Firefight</td>
    <td > Leading </td>
    <td colspan="2"> RanDon Films</td>
  </tr>
  <tr>
    <td>Roll   Call</td>
    <td > Supporting </td>
    <td colspan="2"> HMR Prods.</td>
  </tr>
  <tr>
    <td> Night     Run</td>
    <td > Supporting </td>
    <td colspan="2"> CDS     Prods.</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="4" height="10px"></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#354972" style="color:#FFFFFF; padding:3px;  font-size:12px;">TELEVISION</td>
  </tr>
  <tr>
    <td colspan="4" height="10px"></td>
  </tr>
  <tr>
    <td> Arrest and     Trial</td>
    <td > Co-Star </td>
    <td colspan="2"> Studio USA</td>
  </tr>
  <tr>
    <td> BattleStar Galactica:2nd Coming </td>
    <td > Co-Star </td>
    <td colspan="2"> Universal </td>
  </tr>
  <tr>
    <td>Burning Out </td>
    <td >Co-Star </td>
    <td colspan="2"> PBS</td>
  </tr>
  <tr>
    <td> Santa Barbara</td>
    <td >Recurring </td>
    <td colspan="2"> NBC</td>
  </tr>
  <tr>
    <td> The Young & the Restless</td>
    <td > Principal </td>
    <td colspan="2"> CBS</td>
  </tr>
  <tr>
    <td> Days of Our Lives</td>
    <td > Principal </td>
    <td colspan="2"> NBC</td>
  </tr>
  <tr>
    <td> Children of the Night</td>
    <td >Supporting </td>
    <td colspan="2"> NBC/MOW</td>
  </tr>
  <tr>
    <td> General Hospital</td>
    <td >Principal </td>
    <td colspan="2"> ABC</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="4" height="10px"></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#354972" style="color:#FFFFFF; padding:3px; font-size:12px;">THEATRE</td>
  </tr>
  <tr>
    <td colspan="4" height="10px"></td>
  </tr>
  <tr>
    <td> The Frasca     Wars</td>
    <td > Don </td>
    <td colspan="2">Room for  Theatre</td>
  </tr>
  <tr>
    <td> If I Were You</td>
    <td > John </td>
    <td colspan="2">The Complex</td>
  </tr>
  <tr>
    <td> He Said, She Said</td>
    <td > Tom </td>
    <td colspan="2">Room  for  Theatre</td>
  </tr>
  <tr>
    <td> Jake&#39;s Comer </td>
    <td >Jake </td>
    <td colspan="2">Third  Street Theatre</td>
  </tr>
  <tr>
    <td> Barefoot in the Park</td>
    <td >Paul </td>
    <td colspan="2">Portland Civic Theatre</td>
  </tr>
  <tr>
    <td> Home of the Brave</td>
    <td >Cony </td>
    <td colspan="2">Gresham  PlayhoUse</td>
  </tr>
  <tr>
    <td> Picnic</td>
    <td >Hal </td>
    <td colspan="2">Third Street  Theatre</td>
  </tr>
  <tr>
    <td> The Desk Set</td>
    <td >Richard </td>
    <td colspan="2">Gresham Playhouse </td>
  </tr>
  <tr>
    <td> Detective Story </td>
    <td >Mcleod </td>
    <td colspan="2">Portland Civic Theatre</td>
  </tr>
  <tr>
    <td> Career</td>
    <td >Sam </td>
    <td colspan="2">Portland Civic Theatre</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="4" height="10px"></td>
  </tr>
  <tr>
    <td colspan="4" bgcolor="#354972" style="color:#FFFFFF; padding:3px; font-size:12px;">TRAINING</td>
  </tr>
  <tr>
    <td colspan="4" height="10px"></td>
  </tr>
  <tr>
    <td colspan="2">Cold Reading  -  Laurel Adams</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="4">Improv  Workshop  -  David Cox's</td>
  </tr>
  <tr>
    <td colspan="4">Scene Study  -  Sal Dano's</td>
  </tr>
  <tr>
    <td>Van Mar Acting Academy</td>
    <td></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td>Mt  Hood  College</td>
    <td></td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td colspan="2"></td>
</table>
</div>
</div>

<div id="acting4" style="position:absolute; width:550px; height:303px; z-index:5; left: 2px; top: 240px;display:none; font-family:Verdana, Arial, Helvetica, sans-serif; text-decoration:none; font-size:14px; font-weight:bold;" align="center">
<div style="position:absolute; width:700px; height:16px; z-index:3; left:-150px; "><img src="actingmenu.gif"  usemap="#actingmenu" border="none" alt="country music"/>
<map name="actingmenu">
<area shape="rect" alt="" coords="456,0,558,16" href="javascript:pagechange('acting5');">
<area shape="rect" alt="" coords="384,0,456,16" href="javascript:pagechange('acting1');">
<area shape="rect" alt="" coords="326,0,384,16" href="javascript:pagechange('acting2');">
<area shape="rect" alt="" coords="269,0,326,16" href="javascript:pagechange('acting3');">
</map>

</div>
<br /><br />
<img src="pic2.gif" alt="don hughes"/><br /><br />
<a href="javascript:pagechange('acting2');">1</a> - <font color="#CCCCCC">2</font> - <a href="javascript:pagechange('acting7');">3</a>

</div>

<div id="poster" style="position:absolute; padding-right:20px; padding-top:5px; width:500px; height:295px; z-index:5; left: 20px; top: 222px; display: none;overflow:auto;">

<div style="float:left; margin-top:20px;" ><img src="fposter.gif" alt="don singing" /></img></div>
	<table cellpadding="0" cellspacing="7px" align="center" width="400">
        <tr>
	        <td colspan="2"><font color="#FF6633"><b>
				<div id="processing2" style="float:right" ></div></b></font>
		        <div id="container">
					<form action="vars.php" method="post">
					<tr>
			        <td><label for="textinput"><b>Name:</b></label></td>
				    <td><input type="text" id="name" name="textinput" class="textinput" maxlength="50" /></td>
			        </tr><tr>
					<td><label for="textinput"><b>Email Address:</b></label></td>
				    <td><input type="text" id="email2" name="textinput" class="textinput" maxlength="50" /></td>
			        </tr><tr>
					<td><label for="textinput"><b>Address:</b></label></td>
				    <td><input type="text" id="address" name="textinput" class="textinput" maxlength="50" /></td>
			        </tr><tr>
					<td><label for="textinput"><b>City:</b></label></td>
				    <td><input type="text" id="city" name="textinput" class="textinput" maxlength="25" /></td>
			        </tr><tr>
					<td><label for="textinput"><b>State/Province:</b></label></td>
				    <td><input type="text" id="state" name="textinput" class="textinput" maxlength="25" /></td>
			        </tr><tr>
					<td><label for="textinput"><b>Postal Code:</b></label></td>
				    <td><input type="text" id="postal" name="textinput" class="textinput" maxlength="25" /></td>
			        </tr><tr>
					<td><label for="textinput"><b>Country Code:</b></label></td>
				    <td><input type="text" id="country" name="textinput" class="textinput" maxlength="25" /></td>
	
				    </tr><tr>					
					<td colspan="2" align="center"><input type="button" value="Submit" class="buttonSubmit" onclick="sendemail2();" /></td>
					</tr>
					
					</form>

				</div>
			</td>
		</tr>
	</table>

</div>
<script src="http://www.google-analytics.com/urchin.js" type="text/javascript">
</script>
<script type="text/javascript">
_uacct = "UA-540319-1";
urchinTracker();
</script>
</body>
</html>
