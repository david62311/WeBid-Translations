<table border="0" width="100%">
	<tr>
		<td colspan="3" height="35"><div style="font-size: 14px; font-weight: bold;">Congratulazioni, l'oggetto è stato venduto!</div></td>
	</tr>
	<tr>
		<td colspan="3" style="font-size: 12px;">Ciao <b>{S_NAME}</b>,</td>
	</tr>
	<tr>
		<td colspan="3" height="50" style="font-size: 12px; padding-right: 6px;"><i>Congratulazioni </i> il tuo oggetto è appena stato venduto!
		Sotto tutti i dettagli.</td>
	</tr>
	<tr>
		<td width="9%" rowspan="2"><img border="0" src="{SITE_URL}{A_PICURL}"></td>
		<td width="55%" rowspan="2">
		<table border="0" width="100%">
			<tr>
				<td colspan="2" style="font-size: 12px;"><a href="{A_URL}">{A_TITLE}</a></td>

			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Prezzo di vendita:</td>
				<td align="left" style="font-size: 12px;">{A_CURRENTBID}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Quantità:</td>
				<td align="left" style="font-size: 12px;">{A_QTY}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">Data fine Asta:</td>
				<td align="left" style="font-size: 12px;">{A_ENDS}</td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;">URL ASTA:</td>
				<td align="left" style="font-size: 12px;"><a href="{A_URL}">{A_URL}</a></td>
			</tr>
			<tr>
				<td width="18%" style="font-size: 12px;"></td>
				<td align="left" style="font-size: 12px;"><a href="{SITE_URL}user_menu.php?">Vai su {SITENAME}</a></td>
			</tr>
		</table>
		</td>
		<td width="34%" style="font-size: 12px;">Controlla i dettagli per il pagamento</td>
	</tr>
	<tr>
		<td width="34%" height="90" valign="top">
		<a href="{SITE_URL}buying.php">
		<img border="0" src="{SITE_URL}images/email_alerts/Total_Due_BtnIT.jpg" width="120" height="32"></a></td>
	</tr>
 </table><br />
 
<table border="0" width="100%">
	<tr>
		<td style="font-size: 12px;"><b>Informazioni sull'acquirente</b></td>
	</tr>
	<tr>
		<td style="font-size: 12px;">{B_REPORT}</td>
	</tr>
</table><br />
<div style="font-size: 12px;"><i>Un'e-mail è stata inviata al/ai vincitore/i con il tuo indirizzo e-mail.</i></div>