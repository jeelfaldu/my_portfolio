<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src="assets/js/toastr.js"></script>
<?php
if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["message"])) {
  $name  = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $sql = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
  if ($conn->query($sql) === TRUE) {
    unset($_POST);
?>
    <script>
      toastr.success('Hello how are you');
    </script>
<?php
  } else {
  }
}
?>
<article class="contact" id="contact" data-page="contact">

  <header>
    <h2 class="h2 article-title">Contact</h2>
  </header>

  <section class="mapbox" data-mapbox>
    <figure>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59382.632373198074!2d70.396324380958!3d21.530641015395947!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3958018c6a277f53%3A0x13b52f8520a86e48!2sJunagadh%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1686977360100!5m2!1sen!2sin" width="600" height="300" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </figure>
  </section>

  <section class="contact-form">

    <h3 class="h3 form-title">Contact Form</h3>

    <form action="#contact" class="form" method="POST" data-form>

      <div class="input-wrapper">
        <input type="text" name="name" class="form-input" placeholder="Full name" required data-form-input>

        <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
      </div>

      <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

      <button class="form-btn" type="submit" disabled data-form-btn>
        <ion-icon name="paper-plane"></ion-icon>
        <span>Send Message</span>
      </button>

    </form>

  </section>

</article>