<table border="0" width="100%">
	<tr>
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">Il tuo oggetto è stato inserito su {SITENAME}!</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Ciao <b>{C_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;">Il tuo oggetto è stato inserito con successo su {SITENAME}. L'oggetto è già disponibile per la ricerca.<br> Qui ci sono i dettagli:</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{SITE_URL}item.php?id={A_ID}">{A_TITLE}</a></td>

			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Tipo di Asta:</td>
				<td align="left" style="font-size: 12px;">{A_TYPE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Oggetto #:</td>
				<td align="left" style="font-size: 12px;">{A_ID}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Prezzo di Partenza:</td>
				<td align="left" style="font-size: 12px;">{A_MINBID}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Prezzo di Riserva:</td>
				<td align="left" style="font-size: 12px;">{A_RESERVE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Prezzo Compra adesso:</td>
				<td align="left" style="font-size: 12px;">{A_BNPRICE}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;">Data Fine Asta:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			<tr>
				<td width="22%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Vai su {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">Hai altri oggetti da vendere?</td>
	</tr>
	<tr>
		<td width="34%" height="176" valign="top">
			<a href="{SITE_URL}select_category.php">
				<img border="0" src="{SITE_URL}images/email_alerts/Sell_More_BtnIT.jpg" width="120" height="32">
			</a>
		</td>
	</tr>
</table>