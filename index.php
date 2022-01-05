<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daily Business Record</title>
	<style type="text/css">
		body{
			font-family: arial;
		}

		.fullborder{
			border: 1px solid #000;
		}

		.rightborder{
			border-right: 1px solid #000;
		}

		.greybackground{
			background: #dedbdb;
		}

		.textcenter{
			text-align: center;
		}
	</style>
</head>
<body>
	<table width="100%">
		<tr>
			<td align="center" class="fullborder" colspan="2">DAILY BUSINESS RECORD</td>
		</tr>
		<tr>
			<td align="center" class="fullborder" width="50%">
				<table width="100%">
					<tr>
						<td width="50%" class="rightborder">Location</td>
						<td><input type="text" name="" style="border: none; width: 100%;"></td>
					</tr>
				</table>
			</td>
			<td align="center" class="fullborder">
				<table width="100%">
					<tr>
						<td width="50%" class="rightborder">Date</td>
						<td><input type="text" name="" style="border: none; width: 100%;"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td align="center" class="fullborder" width="50%">
				<table width="100%">
					<tr>
						<td width="50%" class="rightborder">Opening Balance</td>
						<td><input type="text" name="" style="border: none; width: 100%;"></td>
					</tr>
				</table>
			</td>
			<td align="center" class="fullborder greybackground">
				<table width="100%">
					<tr>
						<td width="50%" class="rightborder">Serial No.</td>
						<td><input type="text" name="" style="border: none; width: 100%; background: #dedbdb;"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<table width="100%" border="1" style="border-collapse: collapse;">
					<tr>
						<td align="center">Serial No.</td>
						<td align="center">Stylist Name</td>
						<td align="center">Service / Product Code</td>
						<td align="center">Invoice No.</td>
						<td align="center">Amount Cash</td>
						<td align="center">Amount Card</td>
						<td align="center">Amount eWallet</td>
					</tr>
<?php
for ($i=1; $i <= 25; $i++) { 
?>
					<tr>
						<td width="5%" class="textcenter"><?= $i; ?></td>
						<td class="textcenter"></td>
						<td class="textcenter"></td>
						<td class="textcenter"></td>
						<td class="textcenter"></td>
						<td class="textcenter"></td>
						<td class="textcenter"></td>
					</tr>
<?php
}
?>
					<tr>
						<td width="5%" class="textcenter greybackground">&nbsp;</td>
						<td class="textcenter greybackground"></td>
						<td class="textcenter greybackground"></td>
						<td class="textcenter greybackground"></td>
						<td class="textcenter greybackground"></td>
						<td class="textcenter greybackground"></td>
						<td class="textcenter greybackground"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td width="50%" class="fullborder">Total Cash SERVICE</td>
						<td class="fullborder"><input type="text" name="" style="border: none; width: 99%;"></td>
					</tr>
					<tr>
						<td width="50%" class="fullborder">Total Cash PRODUCT</td>
						<td class="fullborder"><input type="text" name="" style="border: none; width: 99%;"></td>
					</tr>
					<tr>
						<td width="50%" class="fullborder">Total Card SERVICE</td>
						<td class="fullborder"><input type="text" name="" style="border: none; width: 99%;"></td>
					</tr>
					<tr>
						<td width="50%" class="fullborder">Total Card PRODUCT</td>
						<td class="fullborder"><input type="text" name="" style="border: none; width: 99%;"></td>
					</tr>
					<tr>
						<td width="50%" class="fullborder">Total eWallet SERVICE</td>
						<td class="fullborder"><input type="text" name="" style="border: none; width: 99%;"></td>
					</tr>
					<tr>
						<td width="50%" class="fullborder">Total eWallet PRODUCT</td>
						<td class="fullborder"><input type="text" name="" style="border: none; width: 99%;"></td>
					</tr>
					<tr>
						<td width="50%" class="fullborder">Cash in Drawer</td>
						<td class="fullborder"><input type="text" name="" style="border: none; width: 99%;"></td>
					</tr>
					<tr>
						<td width="50%" class="fullborder greybackground">Total Business</td>
						<td class="fullborder greybackground"><input type="text" name="" class="greybackground" style="border: none; width: 99%;"></td>
					</tr>
				</table>
			</td>
			<td>
				<table width="100%">
					<tr>
						<td width="50%" align="center" class="fullborder">EXPENSES / PAYMENT</td>
						<td align="center" class="fullborder">
						Amount
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;"></td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;"></td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;"></td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;"></td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;"></td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" class="fullborder greybackground">Total</td>
						<td class="fullborder greybackground"><input type="text" name="" class="greybackground" style="border: none; width: 99%;"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table width="100%">
					<tr>
						<td width="50%" align="center" class="fullborder">Opening Balance Next Date</td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td><br /></td>
					</tr>
					<tr>
						<td><br /></td>
					</tr>
				</table>
			</td>
			<td>
				<table width="100%">
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
					<tr>
						<td width="50%" align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
						<td align="center" class="fullborder">
							<input type="text" name="" class="" style="border: none; width: 99%;">
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>