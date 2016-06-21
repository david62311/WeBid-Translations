<table border="0" width="100%">
	<tr>
		<td colspan="2" height="35"><div style="font-size: 14px; font-weight: bold;">Merci pour votre inscription sur {SITENAME}!</div></td>
	</tr>
	<tr>
		<td colspan="2" style="font-size: 12px;">Bonjour <b>{C_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="2" height="50" style="font-size: 12px; padding-right: 6px;">
		Avant de pouvoir vendre/acheter sur {SITENAME}, votre compte doit &ecirc;tre 
		valid&eacute; par l&apos;administrateur du site. <br /><br />
		Vous recevrez rapidement un email vous confirmant que votre compte est activ&eacute;.<br>
		</td>
	</tr>
	<tr>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px; padding-bottom: 7px; padding-top: 5px;"><b>Vos informations:</b></td>

			</tr>
			<tr>
				<td width="17%" style="font-size: 12px;">Nom complet:</td>
				<td align="left" style="font-size: 12px;">{C_NAME}</td>
			</tr>
			<tr>
				<td width="17%" style="font-size: 12px;">Nom d&apos;utilisateur:</td>
				<td align="left" style="font-size: 12px;">{C_NICK}</td>
			</tr>
<!-- IF C_ADDRESS ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Adresse:</td>
				<td align="left" style="font-size: 12px;">{C_ADDRESS}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_CITY ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Ville:</td>
				<td align="left" style="font-size: 12px;">{C_CITY}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_PROV ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Etat/Province:</td>
				<td align="left" style="font-size: 12px;">{C_PROV}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_COUNTRY ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Pays:</td>
				<td align="left" style="font-size: 12px;">{C_COUNTRY}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_ZIP ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Code postal:</td>
				<td align="left" style="font-size: 12px;">{C_ZIP}</td>
			</tr>
<!-- ENDIF -->
			<tr>
				<td width="17%" style="font-size: 12px;">Email:</td>
				<td align="left" style="font-size: 12px;">{C_EMAIL}</td>
			</tr>
			<tr>
				<td width="17%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;">&nbsp;</td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">&nbsp;</td>
	</tr>
	<tr>
		<td width="34%" height="176" valign="top">&nbsp;
		</td>
	</tr>
</table>