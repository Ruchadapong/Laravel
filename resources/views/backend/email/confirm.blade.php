<html>
<body>
	<table width='700px'>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>สวัสดีคุณ : {{ $name}}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>ขอขอบคุณที่ใช้บริการของเรา โดยมีรายละเอียดการชำระบริการของคุณมีดังนี้</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>รหัสการจอง: {{ $booking_id }}</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>
			<table width='95%' cellpadding="5" cellspacing="5" bgcolor="#f7f4f4">
				<tr bgcolor="#cccccc">
					<td>ชื่อ</td>
					<td>อีเมล</td>
					<td>ธนาคาร</td>
					<td>จำนวนเงินทั้งสิน</td>


                </tr>
					<tr>
						<td>{{ $name }}</td>
						<td>{{ $email }}</td>
						<td>{{ $bank }}</td>
						<td>{{ $total }}</td>

					</tr>
			</table>
		</td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>หากมีคำถาม, ติดต่อได้ที่ <a href="mailto:Production611555@gmail.com">Production611555@gmail.com</a></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>ด้วยความเคารพอย่างสูง,<br> Health Land Massage&Spa</td></tr>
		<tr><td>&nbsp;</td></tr>
	</table>
</body>
</html>
