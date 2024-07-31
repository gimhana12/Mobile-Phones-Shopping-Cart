<?php
include 'connect.php';

//  if(isset($_POST['reg'])){
//   echo '<script>alert("ishan");</script>';
//  }


if (isset($_COOKIE['admin_id'])) {
    $admin_id = $_COOKIE['admin_id'];

} else {
    $admin_id = '';
    header('location:login.php');
}

$select_admin = $conn->prepare("SELECT * FROM admins WHERE id = ?");
$select_admin->execute([$admin_id]);
$fetch_admin = $select_admin->fetch(PDO::FETCH_ASSOC);

if (isset($_POST['submit'])) {

    $id = unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $country = $_POST['country'];
    $country = filter_var($country, FILTER_SANITIZE_EMAIL);

    $price = $_POST['price'];
    $price = filter_var($price, FILTER_SANITIZE_EMAIL);

    $description = $_POST['description'];
    $description = filter_var($description, FILTER_SANITIZE_EMAIL);

    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $ext = pathinfo($image, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $rename = unique_id() . '.' . $ext;
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_files/' . $rename;

    $select_product = $conn->prepare("SELECT * FROM `products` WHERE id = ?");
    $select_product->execute([$id]);

    if ($select_product->rowCount() > 0) {
        // $message = 'email already taken!';
        echo '<script>alert("Saved alredy");</script>';
    } else {
        $insert_admin = $conn->prepare("INSERT INTO `products`(id, name, price, country, image, description) VALUES(?,?,?,?,?,?)");
        $insert_admin->execute([$id, $name, $price, $country, $rename, $description]);
        move_uploaded_file($image_tmp_name, $image_folder);
        echo '<script>alert("Saved Successfully");</script>';
    }


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Eco Mobile Admin</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la Eco Mobile"></span><span>Eco Mobile</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a>
                </li>
                <li>
                    <a href="add-Remove.html" class="active"><span class="las la-users"></span>
                        <span>Add or Remove</span></a>
                </li>
                <li>
                    <a href="show-products.php" ><span class="las la-receipt"></span>
                        <span>Show products</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-users"></span>
                        <span>Customers</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>Projects</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-shopping-bag"></span>
                        <span>Orders</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-receipt"></span>
                        <span>Inventory</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-user-circle"></span>
                        <span>Accounts</span></a>
                </li>
                <li>
                    <a href=""><span class="las la-clipboard-list"></span>
                        <span>Tasks</span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars">Add or Remove</span>
                </label>

            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here" />
            </div>
            <div class="user-wrapper">
                <img src="uploaded_files/<?= $fetch_admin['image']; ?>" width="40px" height="40px" alt="">
                <div>
                    <h4 style="margin-bottom:5px">
                        <?php echo $fetch_admin['name'] ?>
                    </h4>
                    <a href="logout.php" style="border:1px solid black; border-radius:5px; background-color:#DD2F6E; color:#fff; cursor:pointer; padding:2px; ">logout</a>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <form method="POST" enctype="multipart/form-data">

                    <label for="name"><b>Brand Name: </b></label>
                    <input name="name" type="text">

                    <label for="price"><b>Price: </b></label>
                    <input name="price" type="text"><br><br>

                    <label for="country"><b>Country: </b></label>
                    <select id="country" name="country">
                        <option value="australia">Australia</option>
                        <option value="canada">Canada</option>
                        <option value="usa">USA</option>
                    </select>

                    <label for="country"><b>image Upload:</b></label><br>
                    <input type="file" id="myFile" name="image">
                    <!-- <input type="submit"><br><br> -->


                    <div style="margin-top:1rem;">
                        <label for="description"><b>Description: </b></label>
                        <textarea id="description" name="description" placeholder="Write something.."
                            style="height:200px"></textarea>
                    </div>


                    <input type="submit" name="submit" value="Submit">

                </form>
            </div>
        </main>
    </div>

</body>

</html>