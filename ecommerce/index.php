<?php
include_once 'models/usersModel.php';
$order_dir = isset($_GET['order_dir']) && $_GET['order_dir'] === 'desc' ? 'desc' : 'asc';
$default = $order_dir === 'asc' ? 'desc' : 'asc';
$data = get_users($order_dir);
$users = ['id','name','email','phone','type'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success">
        <div class="container">
            <!-- <a class="navbar-brand me-5" href="#">Nav</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="orders.php">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="products-table" style="margin-top: 100px;">
        <div class="container">
            <h1>Users Table</h1>
            <?php if(isset($data) && sizeof($data)>0) {?>
            <form method="GET">
                <button type="submit" class="btn btn-sm btn-outline-success mb-3 float-end" name="order_dir" value="<?php echo $default ?>">
                <?php echo $order_dir === 'asc' ? 'Sorted Ascending' : 'Sorted Descending'; ?>
                </button>
            </form>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <td>ID</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Type</td>
                    <td>Control</td>
                </thead>
                <tbody>
                    <?php
                    foreach($data as $user){
                        echo '<tr>';
                        foreach($users as $item){
                            echo '<td>'.$user[$item].'</td>';
                        }
                        echo '<td><button class="btn btn-primary">edit</button><button class="btn btn-danger">delete</button></td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
            <?php } else {
                echo '<p class="alert alert-danger text-center m-3">There is no data</p>';
                }?> 
        </div>
    </section>
    


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
