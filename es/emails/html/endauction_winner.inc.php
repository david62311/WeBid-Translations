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
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">Felicidades, tu artículo ha sido vendido!</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Hola <b>{S_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;"><i>Felicidades</i> tu artículo ha sido vendido!
		Seguidamente están los detalles.</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{A_URL}">{A_TITLE}</a></td>

			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Precio venta:</td>
				<td align="left" style="font-size: 12px;">{A_CURRENTBID}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Cantidad:</td>
				<td align="left" style="font-size: 12px;">{A_QTY}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Fecha finalización:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">URL subasta:</td>
				<td align="left" style="font-size: 12px;"><a href="{A_URL}">{A_URL}</a></td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Ir a Mi {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">Detalles de pago</td>
	</tr>
	<tr>
		<td width="34%" height="90" valign="top">
		<a href="{SITE_URL}buying.php">
		<img border="0" src="{SITE_URL}images/email_alerts/Total_Due_Btn.jpg" width="120" height="32"></a></td>
	</tr>
 </table><br />
 
<table border="0" width="100%">
	<tr>
		<td style="font-size: 12px;"><b>Información del Comprador</b></td>
	</tr>
	<tr>
		<td style="font-size: 12px;">{B_REPORT}</td>
	</tr>
</table><br />
<div style="font-size: 12px;"><i>Un email fue enviado al ganador con tu dirección de correo.</i></div>
</body>
</html>
