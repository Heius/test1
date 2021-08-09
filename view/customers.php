<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Customers List</h1>
    <table>
        <tr>
            <th>ProfilePic</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Email</th>
        </tr>
        <?php foreach ($a as $customer) : ?>
            <tr>
                <td><?= $customer->pp ?></td>
                <td><?= $customer->name ?></td>
                <td><?= $customer->gender == 1 ? "Male" : "Female" ?></td>
                <td><?= $customer->phone ?></td>
                <td><?= $customer->email ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>