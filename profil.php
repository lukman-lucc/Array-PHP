<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Array Profil</title>
    <style >
        .red
         {
            background-color : Yellow;
         }
         
         .head
         {
            background-color : orange;
         }
    </style>
</head>
<body>
    <?php 
        $mhs = array(
            array('Nama'=>'Lukman Hakim','TanggalLahir'=>'10 Juni 2003','Kota'=>'Surabaya','Email'=>'mannnb7@gmail.com','Hobi'=>'Futsal','choose'=>'2'),
        );
    
?>
    <table border="2" cellpadding="10">
    <thead class="head">
    <tr>
    <th>Nama</th>
    <th>Tanggal Lahir</th>
    <th>Kota</th>
    <th>Email</th>
    <th>Hobi</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($mhs as $data) : ?>
    <tr class="red">
        <td><?php echo $data ['Nama'] ?> </td>
        <td><?php echo $data ['TanggalLahir'] ?> </td>
        <td><?php echo $data ['Kota'] ?></td>
        <td><?php echo $data ['Email'] ?></td>
        <td><?php echo $data ['Hobi'] ?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</body>
</html>