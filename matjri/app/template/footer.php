  <footer>
    <!--start of top-footer-->
    <div class="top-footer">
      <!--start of container-->
      <div class="container">
        <!--start of row-->
        <div class="row">
          <!--start of col-->
          <div class="col">
            <!--start of footer-list-->
            <div class="footer-list">
              <h6>My Account</h6>
              <ul>
                <li><a href="">Inforamtion</a></li>
                <li><a href="">Order History</a></li>
                <li><a href="">Privcy Policy</a></li>
                <li><a href="http://localhost/commerce/matjri/public/logout">Logout</a></li>
              </ul>
            </div>
            <!--end of footer-list-->
          </div>
          <!--end of col-->

          <!--start of col-->
          <div class="col">
            <!--start of footer-list-->
            <div class="footer-list">
              <h6>Newer Categories</h6>
              <ul>
                <?php while($cat_footer = mysqli_fetch_assoc($category_footer)){ ?>
                <li><a href="http://localhost/commerce/matjri/public/category/show/<?= $cat_footer['id'] ?>"><?= $cat_footer['cat_name'] ?></a></li>
                <?php } ?>
              </ul>
            </div>
            <!--end of footer-list-->
          </div>
          <!--end of col-->

          <!--start of col-->
          <div class="col">
            <!--start of footer-list-->
            <div class="footer-list">
              <h6>Newer Items</h6>
              <ul>
                <?php while($it_footer = mysqli_fetch_assoc($item_footer)){ ?>
                <li><a href="http://localhost/commerce/matjri/public/item/id/<?= $it_footer['id'] ?>"><?= $it_footer['item_name'] ?></a></li>
                <?php } ?>
              </ul>
            </div>
            <!--end of footer-list-->
          </div>
          <!--end of col-->

          <!--start of col-->
          <div class="col-8 col-md-4">
            <!--start of footer-list-->
            <div class="footer-list contact-us-list">
              <h6>Contact Us</h6>
              <ul>
                <li><span><i class="fas fa-home"></i>&nbsp;Address: </span><a href="">Inforamtion</a></li>
                <li><a href=""><span><i class="fas fa-location-arrow"></i>&nbsp;Mail Us: </span>Order History</a></li>
                <li><a href=""><span><i class="fas fa-phone-alt">&nbsp;Phone:</i></span>Privcy Policy</a></li>
              </ul>
              <ul class="social-media">
                <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                <li><a href=""><i class="fab fa-twitter"></i></a></li>
                <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href=""><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
            <!--end of footer-list-->
          </div>
          <!--end of col-->
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </div>
    <!--end of top-footer-->

    <!--start of bottom-footer-->
    <div class="bottom-footer">
      <!--start of container-->
      <div class="container">
        <!--start of booterm-footer-cover-->
        <div class="bottom-footer-cover">
          <!--start of copy-right-->
          <div class="copy-right">
            Copyright &copy; 2020 by <span>Hamza</span> All Policy Reserved. 
          </div>
          <!--end of copy-right-->

          <!--start of payment-method-->
          <div class="payment-method">
            <ul>
              <li><img src="http://localhost/commerce/matjri/app/images/paypal.png" alt=""></li>
              <li><img src="http://localhost/commerce/matjri/app/images/master.svg" alt=""></li>
              <li><img src="http://localhost/commerce/matjri/app/images/visa.png" alt=""></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <!--end of payment-method-->
        </div>
        <!--end of bottom-footer-cover-->
      </div>
      <!--end of container-->
    </div>
    <!--end of bottom-footer-->
  </footer>

