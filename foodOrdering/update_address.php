<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
   header('location:home.php');
};

if(isset($_POST['submit'])){

   $address = $_POST['street'] .', '.$_POST['purok'].', '.$_POST['barangay'].', '.$_POST['municipality'] .', '. $_POST['province'] .' - '. $_POST['pin_code'];
   $address = filter_var($address, FILTER_SANITIZE_STRING);

   $update_address = $conn->prepare("UPDATE `users` set address = ? WHERE id = ?");
   $update_address->execute([$address, $user_id]);
   if($update_address){
      $message[] = 'address saved!';
      header('location: checkout.php');
      exit();
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update address</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php' ?>

<section class="form-container">

   <form action="" method="post">
      <h3>Your address</h3>
      <input type="text" class="box" placeholder="Street name" required maxlength="50" name="street">
      <input type="text" class="box" placeholder="Purok" required maxlength="50" name="purok">
      <input type="text" class="box" placeholder="Barangay" required maxlength="50" name="barangay">
      <input type="text" class="box" placeholder="Municipality" required maxlength="50" name="municipality">
      <input type="text" class="box" placeholder="Province" required maxlength="50" name="province">
      <input type="number" class="box" placeholder="Pin code" required max="999999" min="0" maxlength="6" name="pin_code">
      <input type="submit" value="Save address" name="submit" class="btn">
   </form>

</section>










<?php include 'components/footer.php' ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>