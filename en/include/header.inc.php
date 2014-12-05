    <div class="row header sticky">
      <div class="large-12 columns">
        <h1 class="logo"><span>Barbara</span><span>Asgary</span></h1>
        <nav class="top-bar" data-topbar role="navigation">

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