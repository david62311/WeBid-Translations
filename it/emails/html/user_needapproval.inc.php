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
		<td colspan="2" height="35"><div style="font-size: 14px; font-weight: bold;">Grazie per esserti registrato su {SITENAME}!</div></td>
	</tr>
	<tr>
		<td colspan="2" style="font-size: 12px;">Hello <b>{C_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="2" height="50" style="font-size: 12px; padding-right: 6px;">
		Prima di iniziare a vendere o offrire su {SITENAME}, il tuo account deve essere
		accettato da un nostro amministratore. <br /><br />
		Riceverai a breve un'e-mail per confermarti l'attivazione.<br>
		</td>
	</tr>
	<tr>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px; padding-bottom: 7px; padding-top: 5px;"><b>Le tue informazioni:</b></td>

			</tr>
			<tr>
				<td width="17%" style="font-size: 12px;">Nome:</td>
				<td align="left" style="font-size: 12px;">{C_NAME}</td>
			</tr>
			<tr>
				<td width="17%" style="font-size: 12px;">Nome utente:</td>
				<td align="left" style="font-size: 12px;">{C_NICK}</td>
			</tr>
<!-- IF C_ADDRESS ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Indirizzo:</td>
				<td align="left" style="font-size: 12px;">{C_ADDRESS}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_CITY ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Città:</td>
				<td align="left" style="font-size: 12px;">{C_CITY}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_PROV ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Stato:</td>
				<td align="left" style="font-size: 12px;">{C_PROV}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_COUNTRY ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Provincia:</td>
				<td align="left" style="font-size: 12px;">{C_COUNTRY}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_ZIP ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">CAP:</td>
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
          </body>
</html>