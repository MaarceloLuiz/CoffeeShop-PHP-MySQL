<link href="contactStyle.css" rel="stylesheet" />
<?php 
//defining the messages that are going to be displayed to users
session_start();
if (isset($_SESSION['feedback'])) {
    echo "<script>alert('{$_SESSION['feedback']}');</script>";
    unset($_SESSION['feedback']);
}

include 'includes/header.php';
include 'includes/contact_form_to_DB.php';
?>

<!--contact text-->
<section class="about" id="about">
  <h1 class="heading"> <span>Getting in</span> Touch </h1>
  <div class="about-us-row">
      <div class="about-us-content">
          <h3>How to Contact us</h3>
          <p>If you have any questions, feedback, or need assistance,
            <br>we'd love to hear from you.
            <br>Please fill out the contact form at the bottom of this page,
            <br>and our team will get back to you as soon as possible!
          </p>
            <button id="btn" onclick="window.location.href='contact.php#contact-box'">Reach Out</button>
      </div>
  </div>
</section>

</div> <!-- End of all-content div -->

<!--contact section-->
<section class="contact" id="contact">
  <h1 class="heading" style="text-align: center;" style="padding-top: 10px;" style="color:#424242;"><span>CONTACT</span> US</h1>

  <div class="container" id="contact-box">
      <div class="contact-box">
          <div class="left"></div>
          <div class="right">
            <h2>Any Questions?</h2>
            <form method="POST">
              <input type="text" class="field" placeholder="Your Name" name="name">
              <input type="email" class="field" placeholder="Email" name="email">
              <input type="text" class="field" placeholder="Your Phone Number" name="phoneNumber">
              <textarea class ="field" placeholder="Message" name="message"></textarea>
              <button class="contact-btn">Submit</button>
            </form>
          </div>
      </div>
  </div>
</section>

<br />
<br />

<?php include 'includes/footer.php'; ?>