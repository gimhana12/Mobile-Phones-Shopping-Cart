<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $id = unique_id();
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  
    $contact = $_POST['contact'];
    $contact = filter_var($contact, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $location = $_POST['location'];
    $location = filter_var($location, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
    $profession = $_POST['profession'];
    $profession = filter_var($profession, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
  
    $pass = sha1($_POST['pass']);
    $pass = filter_var($pass, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpass = sha1($_POST['cpass']);
    $cpass = filter_var($cpass, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
    $image = $_FILES['image']['name'];
    $image = filter_var($image, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $ext = pathinfo($image, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $rename = unique_id() . '.' . $ext;
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_files/' . $rename;
  
    $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select_user->execute([$email]);
  
    if ($select_user->rowCount() > 0) {
      $message = 'email already taken!';
    } else {
      if ($pass != $cpass) {
        $message = 'confirm passowrd not matched!';
      } else {
        $insert_user = $conn->prepare("INSERT INTO `users`(id, name, email, contact, location, password, image, profession) VALUES(?,?,?,?,?,?,?,?)");
        $insert_user->execute([$id, $name, $email, $contact, $location, $cpass, $rename, $profession]);
        move_uploaded_file($image_tmp_name, $image_folder);
  
        $verify_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ? LIMIT 1");
        $verify_user->execute([$email, $pass]);
        $row = $verify_user->fetch(PDO::FETCH_ASSOC);
  
        if ($verify_user->rowCount() > 0) {
          setcookie('user_id', $row['id'], time() + 60 * 60 * 24 * 30, '/');
          header('location:user-profile.php');
        }
      }
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
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                    <span class="las la-bars"></span>
                </label>
                <h2>Add or Remove</h2>
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="search here" />
            </div>
            <div class="user-wrapper">
                <img src="img/2.jpg" width="40px" height="40px" alt="">
                <div>
                    <h4>Eco Admin</h4>
                </div>
            </div>
        </header>
        <main>
            <div class="container">
                <form method="POST">

                    <label for="name"><b>Brand Name: </b></label>
                    <input name="bname" type="text">

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


                    <label for="description"><b>Description: </b></label>
                    <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" name="submit" value="Submit">

                </form>
            </div>
        </main>
    </div>

</body>

</html>