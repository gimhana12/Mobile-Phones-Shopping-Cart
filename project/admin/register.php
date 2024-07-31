<?php 
 include 'connect.php';

//  if(isset($_POST['reg'])){
//   echo '<script>alert("ishan");</script>';
//  }


if (isset($_COOKIE['admin_id'])) {
  $admin_id = $_COOKIE['admin_id'];
  header('location:add-Remove.php');
} else {
  $admin_id = '';
}

if (isset($_POST['reg'])) {

  $id = unique_id();
  $name = $_POST['name'];
  $name = filter_var($name, FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $email = $_POST['email'];
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);

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

  $select_admin = $conn->prepare("SELECT * FROM `admins` WHERE email = ?");
  $select_admin->execute([$email]);

  if ($select_admin->rowCount() > 0) {
    // $message = 'email already taken!';
    echo '<script>alert("email already taken");</script>';
  } else {
    if ($pass != $cpass) {
      // $message = 'confirm passowrd not matched!';
      echo '<script>alert("confirm passowrd not matched");</script>';
    } else {
      $insert_admin = $conn->prepare("INSERT INTO `admins`(id, name, email, pass, image) VALUES(?,?,?,?,?)");
      $insert_admin->execute([$id, $name, $email, $cpass, $rename]);
      move_uploaded_file($image_tmp_name, $image_folder);

      $verify_admin = $conn->prepare("SELECT * FROM `admins` WHERE email = ? AND pass = ? LIMIT 1");
      $verify_admin->execute([$email, $pass]);
      $row = $verify_admin->fetch(PDO::FETCH_ASSOC);

      if ($verify_admin->rowCount() > 0) {
        setcookie('admin_id', $row['id'], time() + 60 * 60 * 24 * 30, '/');
        header('location:add-Remove.php');
      }
    }
  }

}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Echo Mobile</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap");

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #eee;
      height: 100vh;
      font-family: "Poppins", sans-serif;
      background: linear-gradient(to top,
          #fff 10%,
          rgba(93, 42, 141, 0.4) 90%) no-repeat;
    }

    .wrapper {
      max-width: 500px;
      border-radius: 10px;
      margin: 50px auto;
      padding: 30px 40px;
      box-shadow: 20px 20px 80px rgb(206, 206, 206);
    }

    .h2 {
      font-family: "Kaushan Script", cursive;
      font-size: 3.5rem;
      font-weight: bold;
      color: #dd2f6e;
      font-style: italic;
    }

    .h4 {
      font-family: "Poppins", sans-serif;
    }

    .input-field {
      border-radius: 5px;
      padding: 5px;
      display: flex;
      align-items: center;
      cursor: pointer;
      border: 1px solid #dd2f6e;
      color: #dd2f6e;
    }

    .input-field:hover {
      color: #cc5b84;
      border: 1px solid #ac5a78;
    }

    input {
      border: none;
      outline: none;
      box-shadow: none;
      width: 100%;
      padding: 0px 2px;
      font-family: "Poppins", sans-serif;
    }

    .fa-eye-slash.btn {
      border: none;
      outline: none;
      box-shadow: none;
    }

    a {
      text-decoration: none;
      color: #dd2f6e;
      font-weight: 700;
    }

    a:hover {
      text-decoration: none;
      color: #ca6a8e;
    }

    .option {
      position: relative;
      padding-left: 30px;
      cursor: pointer;
    }

    .option label.text-muted {
      display: block;
      cursor: pointer;
    }

    .option input {
      display: none;
    }

    .checkmark {
      position: absolute;
      top: 3px;
      left: 0;
      height: 20px;
      width: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 50%;
      cursor: pointer;
    }

    .option input:checked~.checkmark:after {
      display: block;
    }

    .option .checkmark:after {
      content: "";
      width: 13px;
      height: 13px;
      display: block;
      background: #dd2f6e;
      position: absolute;
      top: 48%;
      left: 53%;
      border-radius: 50%;
      transform: translate(-50%, -50%) scale(0);
      transition: 300ms ease-in-out 0s;
    }

    .option input[type="radio"]:checked~.checkmark {
      background: #fff;
      transition: 300ms ease-in-out 0s;
      border: 1px solid #dd2f6e;
    }

    .option input[type="radio"]:checked~.checkmark:after {
      transform: translate(-50%, -50%) scale(1);
    }

    .btn.btn-block {
      border-radius: 20px;
      background-color: #dd2f6e;
      color: #fff;
    }

    .btn.btn-block:hover {
      background-color: #dd2f6e;
    }

    @media (max-width: 575px) {
      .wrapper {
        margin: 10px;
      }
    }

    @media (max-width: 424px) {
      .wrapper {
        padding: 30px 10px;
        margin: 5px;
      }

      .option {
        position: relative;
        padding-left: 22px;
      }

      .option label.text-muted {
        font-size: 0.95rem;
      }

      .checkmark {
        position: absolute;
        top: 2px;
      }

      .option .checkmark:after {
        top: 50%;
      }

      #forgot {
        font-size: 0.95rem;
      }
    }
  </style>
  <script type="text/javascript" src=""></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script type="text/javascript"
    src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</head>

<body oncontextmenu="return false" class="snippet-body">
  <div class="wrapper bg-white">
    <div class="h2 text-center"> Admin Dashboard</div>
    <div class="h4 text-muted text-center pt-2">Register</div>

    <form  method="POST" enctype="multipart/form-data" class="pt-3">
      <div class="form-group py-2">
        <div class="input-field">
          <span class="far fa-user p-2"></span>
          <input name="email" type="text" placeholder="Email Address"  class="" />
        </div>
      </div>
      <div class="form-group py-2">
        <div class="input-field">
          <span class="far fa-user p-2"></span>
          <input name="name" type="text" placeholder="name"  class="" />
        </div>
      </div>
      <div class="form-group py-2">
        <div class="input-field">
          <!-- <span class="far fa-user p-2"></span> -->
          <input name="image" type="file" placeholder="image"  class="" />
        </div>
      </div>
      <div class="form-group py-1 pb-2">
        <div class="input-field">
          <span class="fas fa-lock p-2"></span>
          <input name="pass" type="password" placeholder="Enter your Password"  class="" />
          <button class="btn bg-white text-muted">
            <span class="far fa-eye-slash"></span>
          </button>
        </div>
      </div>
      <div class="form-group py-1 pb-2">
        <div class="input-field">
          <span class="fas fa-lock p-2"></span>
          <input name="cpass" type="password" placeholder="Confirm your Password"  class="" />
          <button class="btn bg-white text-muted">
            <span class="far fa-eye-slash"></span>
          </button>
        </div>
      </div>
      <div class="d-flex align-items-start">
        <!-- <div class="remember">
          <label class="option text-muted">
            Remember me <input type="radio" name="radio" />
            <span class="checkmark"></span>
          </label>
        </div> -->
        <!-- <div class="ml-auto">
          <a href="#" id="forgot">Forgot Password?</a>
        </div> -->
      </div>
      <button name="reg" class="btn btn-block text-center my-3">Register</button>
      <div class="text-center pt-3 text-muted">
        Already have an Account? <a href="login.php">Login</a>
      </div>
    </form>
  </div>
  <script type="text/javascript"></script>
</body>


</html>