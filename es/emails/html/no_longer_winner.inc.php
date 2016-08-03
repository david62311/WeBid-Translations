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
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">Te han sobrepujado! Puja de nuevo ahora!</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Hola <b>{C_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;">
			Tu puja de {C_BID} ya no es la principal oferta en la siguiente:  
	  </td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{SITE_URL}{A_URL}">{A_TITLE}</a></td>

			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Precio actual:</td>
				<td align="left" style="font-size: 12px;">{N_BID}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Fecha finalización:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			
			<tr>
				<td width="22%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Ir a Mi {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">&nbsp;</td>
	</tr>
	<tr>
		<td width="34%" height="110" valign="top"></td>
	</tr>
</table>
</body>
</html>
