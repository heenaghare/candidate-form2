
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <th>Full Name</th>
	    <th>Gender</th>
        <th>Address</th>
        <th>Email</th>
		<th>Phone Number</th>

        <tr>
            <td><?php $fullname = $_POST['fullname']; echo $fullname; ?></td>
						
			<td><?php $gender = isset($_POST['gender']); echo $gender; ?> </td>
			
			<td><?php $address = $_POST['address']; echo $address; ?></td>

			<td><?php $emails = $_POST['emails']; echo $emails; ?></td>
					
			<td><?php $PhoneNumber = $_POST['PhoneNumber']; echo $PhoneNumber; ?></td>


        </tr>
    </table>
</body>
</html>
