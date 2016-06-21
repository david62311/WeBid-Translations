<table border="0" width="100%">
	<tr>
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">F&eacute;licitations, vous avez remport&eacute; l&apos;objet !</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Bonjour <b>{W_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;"><i>F&eacute;licitations</i> vous avez l&apos;ench&egrave;re la plus &eacute;lev&eacute;e sur :</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{A_URL}">{A_TITLE}</a></td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Votre offre:</td>
				<td align="left" style="font-size: 12px;">{A_CURRENTBID}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Date de fin:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			
			<tr>
				<td width="18%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Se rendre sur {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">V&eacute;rifier le d&eacute;tail des paiements</td>
	</tr>
	<tr>
		<td width="34%" height="90" valign="top">
		<a href="{SITE_URL}buying.php">
		<img border="0" src="{SITE_URL}images/email_alerts/Total_Due_Btn.jpg" width="120" height="32"></a></td>
	</tr>
 </table>
 
<table border="0" width="100%">
	<tr>
		<td style="font-size: 12px;"><b>Informations sur le vendeur</b></td>
	</tr>
	<tr>
		<td style="font-size: 12px;">{S_NICK} - <a href="mailto:{S_EMAIL}">{S_EMAIL}</a></td>
	</tr>
</table>