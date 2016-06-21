<table border="0" width="100%">
	<tr>
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">Votre objet a &eacute;t&eacute; publi&eacute; sur {SITENAME}!</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Bonjour <b>{C_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;">Votre objet a bien &eacute;t&eacute; publi&eacute; sur {SITENAME}. Cet objet sera d&egrave;s maintenant visible dans les r&eacute;sultats de recherches.<br>Voici le d&eacute;tail de la publication:</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{SITE_URL}item.php?id={A_ID}">{A_TITLE}</a></td>

			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Type d&apos;ench&egrave;re:</td>
				<td align="left" style="font-size: 12px;">{A_TYPE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Objet #:</td>
				<td align="left" style="font-size: 12px;">{A_ID}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Mise &agrave; prix:</td>
				<td align="left" style="font-size: 12px;">{A_MINBID}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Prix de r&eacute;serve:</td>
				<td align="left" style="font-size: 12px;">{A_RESERVE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Prix en Achat Imm&eacute;diat:</td>
				<td align="left" style="font-size: 12px;">{A_BNPRICE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Date de fin:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Rendez vous sur :  {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">Vous avez un autre objet &agrave; publier ?</td>
	</tr>
	<tr>
		<td width="34%" height="176" valign="top">
			<a href="{SITE_URL}select_category.php">
				<img border="0" src="{SITE_URL}images/email_alerts/Sell_More_Btn.jpg" width="120" height="32">
			</a>
		</td>
	</tr>
</table>