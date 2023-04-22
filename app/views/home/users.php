<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title><?= $title; ?></title>

</head>

<body>

    <table class="table table-striped  table-responsive-md ">
        <thead class="thead-dark">
            <tr>
            <th scope="col"><span style="color: green;">USER ID</span></th>
                <th scope="col"><span style="color: green;">USER EMAIL</span></th>
                <th scope="col"><span style="color: green;">PASSWORD</span></th>
                <th scope="col"><span style="color: green;">CREATED AT</span></th>


            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $value):?>
            <tr class="">
                <td>
                    <h6><span style="color: red;"><?php echo $value['id']?></span></h6>
                </td>

                <td>
                    <h5><span style="color: blue;"><?php echo $value['email']?></span></h5>
                </td>

                <td>
                    <h6><span style="color: red;"><?php echo $value['password']?></span></h6>
                </td>

                <td>
                    <h6><span style="color: red;"><?php echo $value['created_at']?></span></h6>
                </td>




            </tr>
            <?php endforeach?>
        </tbody>
    </table>

</body>

</html>