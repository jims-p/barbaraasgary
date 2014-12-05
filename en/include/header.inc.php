    <div class="row header sticky">
      <div class="large-12 columns">
        <h1 class="logo"><span>Barbara</span><span>Asgary</span></h1>
        <nav class="top-bar" data-topbar role="navigation">

          <ul class="title-area">
            <li class="name">
              
            </li>
             <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
          </ul>
          <section class="top-bar-section">
            <!-- Left Nav Section -->
            <ul class="right">
              <li><a href="index.php">home</a></li>
              <li><a href="gallery.php" <?php if (PAGE == 'gallery'){echo 'class="active"';} ?> >gallery</a></li>
              <li><a href="bio.php" <?php if (PAGE == 'bio'){echo 'class="active"';} ?> >bio</a></li>
              <li><a href="exhibitions.php" <?php if (PAGE == 'exhibitions'){echo 'class="active"';} ?> >exhibitions</a></li>
              <li><a href="contact.php" <?php if (PAGE == 'contact'){echo 'class="active"';} ?> >contact</a></li>
            </ul>
          </section>
        </nav>
      </div>
    </div>