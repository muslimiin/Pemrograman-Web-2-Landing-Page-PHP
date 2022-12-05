    <section class="site-section border-bottom bg-light" id="product-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Our Product</h2>
          </div>
        </div>
        <div class="row" >
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <div class="owl-carousel slide-one-item-alt">
              <img src="images/sate.jpg" alt="Image" class="img-fluid">
              <img src="images/gulai.jpg" alt="Image" class="img-fluid">
              <img src="images/teh.jpg" alt="Image" class="img-fluid">
              <img src="images/jeruk.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev"><span>
                <span class="icon-keyboard_backspace"></span></span>
              </a><a href="#" class="custom-next"><span>
                <span class="icon-keyboard_backspace"></span></span></a>
            </div>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <div class="owl-carousel slide-one-item-alt-text">
              <div>
                
                <?php 
                    include 'config.php';
                    $query = 'select * from produk where id = 1';
                    $smt = mysqli_prepare($koneksi, $query);
                    $sukses = mysqli_stmt_execute($smt);
                    $hasil_query_1 = mysqli_stmt_get_result($smt);
                  ?>

                  <?php
                    while ($data = mysqli_fetch_assoc($hasil_query_1)) 
                    {
                    ?>

                <h2 class="section-title mb-3"><?php echo $data['nama_produk']; ?></h2>
                <p class="lead">Rp. <?php echo $data['harga']; ?></p>
                <p><?php echo $data['deskripsi']; ?></p>
                  <?php
                  }
                ?>

              </div>

              <div>

                <?php 
                    include 'config.php';
                    $query = 'select * from produk where id = 2';
                    $smt = mysqli_prepare($koneksi, $query);
                    $sukses = mysqli_stmt_execute($smt);
                    $hasil_query_2 = mysqli_stmt_get_result($smt);
                  ?>

                  <?php
                    while ($data = mysqli_fetch_assoc($hasil_query_2)) 
                    {
                    ?>

                <h2 class="section-title mb-3"><?php echo $data['nama_produk']; ?></h2>
                <p class="lead">Rp. <?php echo $data['harga']; ?></p>
                <p><?php echo $data['deskripsi']; ?></p>
                  <?php
                  }
                ?>

              </div>

              <div>

                <?php 
                    include 'config.php';
                    $query = 'select * from produk where id = 3';
                    $smt = mysqli_prepare($koneksi, $query);
                    $sukses = mysqli_stmt_execute($smt);
                    $hasil_query_3 = mysqli_stmt_get_result($smt);
                  ?>

                  <?php
                    while ($data = mysqli_fetch_assoc($hasil_query_3)) 
                    {
                    ?>

                <h2 class="section-title mb-3"><?php echo $data['nama_produk']; ?></h2>
                <p class="lead">Rp. <?php echo $data['harga']; ?></p>
                <p><?php echo $data['deskripsi']; ?></p>
                  <?php
                  }
                ?>

              </div>

              <div>

                <?php 
                    include 'config.php';
                    $query = 'select * from produk where id = 4';
                    $smt = mysqli_prepare($koneksi, $query);
                    $sukses = mysqli_stmt_execute($smt);
                    $hasil_query_4 = mysqli_stmt_get_result($smt);
                  ?>

                  <?php
                    while ($data = mysqli_fetch_assoc($hasil_query_4)) 
                    {
                    ?>

                <h2 class="section-title mb-3"><?php echo $data['nama_produk']; ?></h2>
                <p class="lead">Rp. <?php echo $data['harga']; ?></p>
                <p><?php echo $data['deskripsi']; ?></p>
                  <?php
                  }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>