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
		<td colspan="2" height="35"><div style="font-size: 14px; font-weight: bold;">Gracias por registrarte en {SITENAME}!</div></td>
	</tr>
	<tr>
		<td colspan="2" style="font-size: 12px;">Hola <b>{C_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="2" height="50" style="font-size: 12px; padding-right: 6px;">
		Con el fin de empezar a vender y/o comprar en {SITENAME}, tu cuenta debe ser aceptada por nuestro administrador del sitio la cual está actualmente bajo revisión. <br /><br />
		Recibirás un email en breve cuando tu cuenta esté activa.<br>
		</td>
	</tr>
	<tr>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px; padding-bottom: 7px; padding-top: 5px;"><b>Tu información es la siguiente:</b></td>

			</tr>
			<tr>
				<td width="17%" style="font-size: 12px;">Nombre completo:</td>
				<td align="left" style="font-size: 12px;">{C_NAME}</td>
			</tr>
			<tr>
				<td width="17%" style="font-size: 12px;">Usuario:</td>
				<td align="left" style="font-size: 12px;">{C_NICK}</td>
			</tr>
<!-- IF C_ADDRESS ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Dirección:</td>
				<td align="left" style="font-size: 12px;">{C_ADDRESS}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_CITY ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Ciudad:</td>
				<td align="left" style="font-size: 12px;">{C_CITY}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_PROV ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">Provincia:</td>
				<td align="left" style="font-size: 12px;">{C_PROV}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_COUNTRY ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">País:</td>
				<td align="left" style="font-size: 12px;">{C_COUNTRY}</td>
			</tr>
<!-- ENDIF -->
<!-- IF C_ZIP ne '' -->
			<tr>
				<td width="17%" style="font-size: 12px;">CP:</td>
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
