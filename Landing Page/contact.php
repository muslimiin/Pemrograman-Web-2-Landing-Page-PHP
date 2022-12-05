    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
      <?php 
        include 'config.php';
        $query = 'select * from owner';
        $smt = mysqli_prepare($koneksi, $query);
        $sukses = mysqli_stmt_execute($smt);
        $hasil_query = mysqli_stmt_get_result($smt);
        ?>
        <?php
        while ($data = mysqli_fetch_assoc($hasil_query))
        {
        ?>
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h1 class="section-title mb-3">Contact Us</h1>
            <h2><?php echo $data['nama_pemilik']; ?></h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d494.
              97641659168175!2d109.61640807192778!3d-7.0314490761902375!2m3!1f0!2f0!
              3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701f0aaa1a1ba7%3A0xa0d43331cbbc08b1!
              2sWarung%20Sate%20Gule%20Pak%20Hirin!5e0!3m2!1sen!2sid!4v1595406225099!5m2!1sen!2sid" 
              width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" 
              aria-hidden="false" tabindex="0" target="_blank">
                <?php echo $data['alamat']; ?></a></p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#"><?php echo $data['contact_number']; ?></a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="#"><?php echo $data['email']; ?></a>
            </p>
          </div>
        <?php
        }
      ?>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">
            <form action="message.php" class="form" method="post">
          <div class="row mb-4">
            <div class="form-group col-6">
              <input type="text" name="firstname_input" class="form-control" placeholder="First name">
            </div>
            <div class="form-group col-6">
              <input type="text" name="lastname_input" class="form-control" placeholder="Full name">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="email" name="email_input" class="form-control" placeholder="Email address">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <input type="text" name="subject_input" class="form-control" placeholder="Subject of the message">
            </div>
          </div>

          <div class="row mb-4">
            <div class="form-group col-12">
              <textarea name="message_input" id="" cols="30" rows="10" class="form-control" placeholder="Type your message here.."></textarea>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input type="submit" class="btn btn-primary" name="submit" value="Send Message">
            </div>
          </div>
        </form>
          </div>
        </div>
      </div>
    </section>