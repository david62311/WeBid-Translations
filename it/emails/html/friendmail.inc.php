<html>
 <head>
 	<style type="text/css">
 		body {
 		font-family: Verdana;
 		}
 	</style>
 </head>
 <body>
<table border="0" width="100%">
	<tr>
		<td colspan="2" height="35"><div style="font-size: 14px; font-weight: bold;">Un tuo amico vuole farti vedere un'asta su {SITENAME} sapendo di farti cosa gradita. </div></td>
	</tr>
	<tr>
		<td colspan="2" style="font-size: 12px;">Ciao <b>{F_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="2" height="50" style="font-size: 12px; padding-right: 6px;">
		 Sei stato invitato a vedere un'asta da {S_NAME} (<a href="mailto:{S_EMAIL}">{S_EMAIL}</a>) su {SITENAME}
		</td>
	</tr>
	<tr>
		<td width="55%" rowspan="2" valign="top" style="font-size: 12px; line-height: 0.6cm;">
			<b>Titolo ASTA:</b> 	{TITLE} <br />
			<b>Commento:</b> {S_COMMENT}<br />
		</td>
		<td width="34%" style="font-size: 12px;">Guarda l'asta!</td>
	</tr>
	<tr>
		<td width="34%" height="176" valign="top">
		<a href="{URL}"><img src="{SITEURL}images/email_alerts/Take_Me_ThereIT.jpg" border="0"></a>
		</td>
	</tr>
</table>