<aside class="sidebar" data-sidebar>

  <div class="sidebar-info">

    <figure class="avatar-box">
      <img src="<?php echo $profile['logo']; ?>" alt="<?php echo $profile['fullname']; ?>" width="80">
    </figure>

    <div class="info-content">
      <h1 class="name" title="<?php echo $profile['fullname']; ?>"><?php echo $profile['fullname']; ?></h1>
      <p class="title"><?php echo $profile['description']; ?></p>
    </div>

    <button class="info_more-btn" data-sidebar-btn>
      <span>Show Contacts</span>

      <ion-icon name="chevron-down"></ion-icon>
    </button>

  </div>

  <div class="sidebar-info_more">

    <div class="separator"></div>

    <ul class="contacts-list">

      <li class="contact-item">

        <div class="icon-box">
          <ion-icon name="mail-outline"></ion-icon>
        </div>

        <div class="contact-info">
          <p class="contact-title">Email</p>

          <a href="mailto:<?php echo $profile['email']; ?>" class="contact-link"><?php echo $profile['email']; ?></a>
        </div>

      </li>

      <li class="contact-item">

        <div class="icon-box">
          <ion-icon name="phone-portrait-outline"></ion-icon>
        </div>

        <div class="contact-info">
          <p class="contact-title">Phone</p>

          <a href="tel:<?php echo $profile['number']; ?>" class="contact-link"><?php echo $profile['number']; ?></a>
        </div>

      </li>

      <li class="contact-item">

        <div class="icon-box">
          <ion-icon name="calendar-outline"></ion-icon>
        </div>

        <div class="contact-info">
          <p class="contact-title">Birthday</p>

          <time datetime="<?php echo $profile['dob']; ?>"><?php echo $profile['dob']; ?></time>
        </div>

      </li>

      <li class="contact-item">

        <div class="icon-box">
          <ion-icon name="location-outline"></ion-icon>
        </div>

        <div class="contact-info">
          <p class="contact-title">Location</p>

          <address><?php echo $profile['location']; ?></address>
        </div>

      </li>

    </ul>

    <div class="separator"></div>

    <ul class="social-list">

      <li class="social-item">
        <a href="<?php echo $profile['facebook']; ?>" class="social-link" target="_blank">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li class="social-item">
        <a href="<?php echo $profile['linkedin']; ?>" class="social-link" target="_blank">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>

      <li class="social-item">
        <a href="<?php echo $profile['instagram']; ?>" class="social-link" target="_blank">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

    </ul>

  </div>

</aside>