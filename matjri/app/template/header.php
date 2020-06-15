

    <header>
      
      <!--start of top header-->
      <div class="top-header">
          <!--start of container-->
          <div class="container">
              <!--start of top-containt-->
              <div class="top-content">
                  <!--start logo-->
                  <div class="logo">
                      <a href="http://localhost/commerce/matjri/public">Matjri</a>
                  </div>
                  <!--end of logo-->

                  <!--start of user-options-->
                  <div class="user-options ml-auto">
                      <ul>
                          <?php 
                            if(isset($_SESSION['user']))
                            {?>

                           
                              <?php $user_info = mysqli_fetch_assoc($user_header); ?>
                              <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="http://localhost/commerce/dashboard/app/uploads/users/<?= $user_info['user_img']; ?>" alt="">&nbsp;<?= $user_info['user_name'] ?>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href=""><i class="far fa-address-card"></i>&nbsp;My Profile</a>
                                  <a class="dropdown-item" href="#"><i class="fas fa-cog"></i>&nbsp;Setting</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="http://localhost/commerce/matjri/public/logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</a>
                                </div>
                              </li>
                               <li class="hide"><a href="http://localhost/commerce/matjri/public/cart/show/<?= $user_info['id']; ?>"><i class="fas fa-shopping-cart"></i>&nbsp;Cart</a></li>
                               <li class="hide"><a href=""><i class="far fa-heart"></i>&nbsp;Wishlist</a></li>
                             
                            <?php 
                            }
                            else
                            {
                              echo '<li><a href="http://localhost/commerce/matjri/public/login"><i class="fas fa-user"></i>&nbsp;Join</a></li>'; 
                            }

                           ?>
                          <li class="hide"><a href=""><i class="fas fa-globe"></i>&nbsp;English</a></li>
                          <li><span onclick="slideHeader()"><i class="fas fa-bars"></i></span></li>
                      </ul>
                  </div>
                  <!--end of user-options-->
              </div>
              <!--end of top-containt-->
          </div>
          <!--end of container-->
      </div>  
      <!--end of top header-->

      <!--start of main-header-->
      <div class="main-header" data-status='off'>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-folder-open"></i>&nbsp;Browse Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-bookmark"></i>&nbsp;Cart</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-heart"></i>&nbsp;Wishlist</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-file-archive"></i>&nbsp;Privcy Policy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-newspaper"></i>&nbsp;Matjri Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="far fa-share-square"></i>&nbsp;Logout</a>
            </li>
          </ul>
        </div>
        <!--end of main-header-->

        <!--start of dark-bag-->
        <div class="dark-bag" onclick="slideHeader()">
          
        </div>
        <!--end of dark-bg-->

    </header> 