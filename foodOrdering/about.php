<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>About Us</h3>
   <p><a href="home.php">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why Choose Us?</h3>
         <p>Step into our treat shop, where indulgence meets excellence! What sets Oh! Franco apart is our unwavering commitment to crafting an experience that transcends the ordinary. Every treat on our shelves is meticulously curated for its quality and flavor, ensuring that each bite is a moment of pure delight. From handcrafted chocolates made with the finest ingredients to whimsical candies that evoke childhood nostalgia, our selection is a celebration of taste and joy. Our friendly and knowledgeable staff are here to guide you through a world of sweet possibilities, helping you find the perfect treat for any occasion. Whether you're seeking a small everyday delight or a lavish gift for a loved one, our treat shop is the destination where confectionery dreams come to life. Choose Oh! Franco, and let the enchantment of our treats elevate your moments to a realm of sweet satisfaction.</p>
         <a href="menu.php" class="btn">Our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Order</h3>
         <p></p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Fast Delivery</h3>
         <p></p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Food</h3>
         <p></p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>