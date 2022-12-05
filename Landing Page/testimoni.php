    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <?php 
                    include 'config.php';
                    $query = 'select * from testimoni where id = 1';
                    $smt = mysqli_prepare($koneksi, $query);
                    $sukses = mysqli_stmt_execute($smt);
                    $hasil_query_1 = mysqli_stmt_get_result($smt);
                  ?>

                  <?php
                    while ($data = mysqli_fetch_assoc($hasil_query_1)) 
                    {
                    ?>
            <div class="testimonial">
              
              <blockquote class="mb-5">
                <p>&ldquo;
                  <?php echo $data['testimoni']; ?>
                &rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                
                <p>
                  <?php echo $data['fullname']; ?>
                </p>
              </figure>
            </div>
                  <?php
                  }
            ?>
          </div>

          <div>
            <?php 
                    include 'config.php';
                    $query = 'select * from testimoni where id = 2';
                    $smt = mysqli_prepare($koneksi, $query);
                    $sukses = mysqli_stmt_execute($smt);
                    $hasil_query_2 = mysqli_stmt_get_result($smt);
                  ?>

                  <?php
                    while ($data = mysqli_fetch_assoc($hasil_query_2)) 
                    {
                    ?>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;
                  <?php echo $data['testimoni']; ?>
                &rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                
                <p>
                  <?php echo $data['fullname']; ?>
                </p>
              </figure>
              
            </div>
                  <?php
                  }
            ?>
          </div>

          <div>
            <?php 
                    include 'config.php';
                    $query = 'select * from testimoni where id = 3';
                    $smt = mysqli_prepare($koneksi, $query);
                    $sukses = mysqli_stmt_execute($smt);
                    $hasil_query_3 = mysqli_stmt_get_result($smt);
                  ?>

                  <?php
                    while ($data = mysqli_fetch_assoc($hasil_query_3)) 
                    {
                    ?>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;
                  <?php echo $data['testimoni']; ?>
                &rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                
                <p>
                  <?php echo $data['fullname']; ?>
                </p>
              </figure>

              
            </div>
                  <?php
                  }
            ?>
          </div>

        </div>
    </section>
