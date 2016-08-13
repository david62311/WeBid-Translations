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
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">Tu artículo ha sido listado en {SITENAME}!</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Hola <b>{C_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;">Tu artículo ha sido listado en {SITENAME}. El artículo será mostrado instantaneamente en los resultados de búsqueda.<br>Aquí están los detalles del anuncio:</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{SITE_URL}item.php?id={A_ID}">{A_TITLE}</a></td>

			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Tipo subasta:</td>
				<td align="left" style="font-size: 12px;">{A_TYPE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">artículo #:</td>
				<td align="left" style="font-size: 12px;">{A_ID}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Puja inicial:</td>
				<td align="left" style="font-size: 12px;">{A_MINBID}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Precio reserva:</td>
				<td align="left" style="font-size: 12px;">{A_RESERVE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Precio Comprar Ahora:</td>
				<td align="left" style="font-size: 12px;">{A_BNPRICE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Hora de finalización:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Goto My {SITENAME}</a></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Ir a Mi {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">Tienes otro artículo para anunciar?</td>
	</tr>
	<tr>
		<td width="34%" height="176" valign="top">
		    <a href="{SITE_URL}select_category.php?">
                <img border="0" src="{SITE_URL}images/email_alerts/Sell_More_Btn.jpg" width="120" height="32">
            </a>
        </td>
	</tr>
</table>
</body>
</html>
