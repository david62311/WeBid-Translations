<table border="0" width="100%">
	<tr>
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">F&eacute;licitations, votre objet est vendu !</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Hello <b>{S_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;"><i>F&eacute;licitations</i> votre objet est vendu ! 
		Vous trouverez ci-dessous les d&eacute;tails.</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{A_URL}">{A_TITLE}</a></td>

			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Prix de vente:</td>
				<td align="left" style="font-size: 12px;">{A_CURRENTBID}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Quantit&eacute;:</td>
				<td align="left" style="font-size: 12px;">{A_QTY}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Date de fin:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">URL de l&apos;ench&egrave;re:</td>
				<td align="left" style="font-size: 12px;"><a href="{A_URL}">{A_URL}</a></td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Se rendre sur {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">V&eacute;rifier les d&eacute;tails du paiement</td>
	</tr>
	<tr>
		<td width="34%" height="90" valign="top">
		<a href="{SITE_URL}buying.php">
		<img border="0" src="{SITE_URL}images/email_alerts/Total_Due_Btn.jpg" width="120" height="32"></a></td>
	</tr>
 </table><br />
 
<table border="0" width="100%">
	<tr>
		<td style="font-size: 12px;"><b>Informations sur l&apos;acheteur</b></td>
	</tr>
	<tr>
		<td style="font-size: 12px;">{B_REPORT}</td>
	</tr>
</table><br />
<div style="font-size: 12px;"><i>Un email a &eacute;t&eacute; envoy&eacute; au vainqueur de l&apos;ench&egrave;re contenant votre adresse email afin de vous contacter.</i></div>