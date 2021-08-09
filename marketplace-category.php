
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Marketplace category</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
        <style>.far,.fas,.fab{font-style: normal;}</style>

  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Navbar Marketplace-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="bg-light shadow-sm navbar-sticky">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0 me-4 order-lg-1" href="index.html"><img src="img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.html"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon fas fa-search"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="dashboard-favorites.html"><span class="navbar-tool-tooltip">Favorites</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon far fa-heart"></i></div></a>
              <div class="navbar-tool dropdown ms-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="dashboard-sales.html"><img src="img/marketplace/account/avatar-sm.png" width="32" alt="Createx Studio"></a><a class="navbar-tool-text ms-n1" href="dashboard-sales.html"><small>Createx Std.</small>$1,375.00</a>
                <div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 14rem;">
                    <h6 class="dropdown-header">Account</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-settings.html"><i class="ci-settings opacity-60 me-2"></i>Settings</a><a class="dropdown-item d-flex align-items-center" href="dashboard-purchases.html"><i class="ci-basket opacity-60 me-2"></i>Purchases</a><a class="dropdown-item d-flex align-items-center" href="dashboard-favorites.html"><i class="far fa-heart opacity-60 me-2"></i>Favorites<span class="fs-xs text-muted ms-auto">4</span></a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Seller Dashboard</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-sales.html"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-xs text-muted ms-auto">$1,375.00</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-products.html"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-xs text-muted ms-auto">5</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-add-new-product.html"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a><a class="dropdown-item d-flex align-items-center" href="dashboard-payouts.html"><i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                  </div>
                </div>
              </div>
              <div class="navbar-tool ms-4"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="marketplace-cart.html"><span class="navbar-tool-label">3</span><i class="navbar-tool-icon fas fa-cart-plus"></i></a></div>
            </div>
            <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group d-lg-none my-3"><i class="fas fa-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="Search marketplace">
              </div>
              <!-- Categories dropdown-->
              <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"><i class="fas fa-bars align-middle mt-n1 me-2"></i>Categories</a>
                  <ul class="dropdown-menu py-1">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Photos</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.html">All Photos<i class="fas fa-chevron-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Abstract</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Animals</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Architecture</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Beauty &amp; Fashion</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Business</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Education</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Food &amp; Drink</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Holidays</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Industrial</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">People</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Sports</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Technology</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Graphics</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Graphics<i class="fas fa-chevron-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Icons</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Illustartions</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Patterns</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Textures</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Web Elements</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">UI Design</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.html">All UI Design<i class="fas fa-chevron-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">PSD Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Sketch Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Adobe XD Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Figma Templates</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Web Themes</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.html">All Web Themes<i class="fas fa-chevron-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">WordPress Themes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Bootstrap Themes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">eCommerce Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Muse Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Plugins</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Fonts</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.html">All Fonts<i class="fas fa-chevron-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Blackletter</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Display</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Non Western</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Sans Serif</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Script</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Serif</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Slab Serif</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Symbols</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Add-Ons</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.html">All Add-Ons<i class="fas fa-chevron-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Photoshop Add-Ons</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Illustrator Add-Ons</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Sketch Plugins</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Procreate Brushes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">InDesign Palettes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Lightroom Presets</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.html">Other Software</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- Primary menu-->
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.html">Back to main demo</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Search collapse-->
        <div class="search-box collapse" id="searchBox">
          <div class="card pt-2 pb-4 border-0 rounded-0">
            <div class="container">
              <div class="input-group"><i class="fas fa-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="Search marketplace">
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Used for marketplace templates with filters on top-->
      <div class="bg-accent pt-4 pb-5">
        <div class="container pt-2 pb-3 pt-lg-3 pb-lg-4">
          <div class="d-lg-flex justify-content-between pb-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                  <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="fas fa-home"></i>Home</a></li>
                  <li class="breadcrumb-item text-nowrap"><a href="home-marketplace.html">Market</a>
                  </li>
                  <li class="breadcrumb-item text-nowrap active" aria-current="page">Inside category</li>
                </ol>
              </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
              <h1 class="h3 text-light mb-0">Marketplace category</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <!-- Toolbar-->
        <div class="bg-light shadow-lg rounded-3 mt-n5 mb-4">
          <div class="d-flex align-items-center ps-2">
            <!-- Search-->
            <div class="input-group"><i class="fas fa-search position-absolute top-50 start-0 translate-middle-y fs-md ms-3"></i>
              <input class="form-control border-0 shadow-none" type="text" placeholder="Search in this category...">
            </div>
            <!-- Sort-->
            <div class="d-flex align-items-center">
              <div class="dropdown py-4 border-start"><a class="nav-link-style fs-md fw-medium dropdown-toggle p-4" href="#" data-bs-toggle="dropdown"><span class="d-inline-block py-1"><i class="far fa-thumbs-up align-middle opacity-60 mt-n1 me-2"></i>Popular</span></a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="#"><i class="far fa-flag me-2 opacity-60"></i>Newest</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-rocket me-2 opacity-60"></i>Bestsellers</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-spinner me-2 opacity-60"></i>Updated</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-chevron-down me-2 opacity-60"></i>Low Price</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fas fa-chevron-up me-2 opacity-60"></i>High Price</a></li>
                </ul>
              </div>
            </div>
            <!-- Pagination-->
            <div class="d-none d-md-flex align-items-center border-start ps-4"><span class="fs-md text-nowrap me-4">Pages&nbsp; 1 / 5</span><a class="nav-link-style p-4 border-start" href="#"><span class="d-inline-block py-1"><i class="fas fa-chevron-left"></i></span></a><a class="nav-link-style p-4 border-start" href="#"><span class="d-inline-block py-1"><i class="fas fa-chevron-right"></i></span></a></div>
          </div>
        </div>
        <!-- Products grid-->
        <div class="row pt-3 mx-n2">
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/02.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Floating Phone and Tablet Mockup</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>109<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$15.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/03.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Project Devices Showcase (PSD)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>95<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$18.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/08.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">pixels </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star-half active"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Business Card Branding Mockup</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>316<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$17.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/07.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">pixels </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Gravity Device Mockups (PSD)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>234<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$16.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/01.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">UI Design</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star-half active"></i><i class="star-rating-icon far fa-star"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Square Style Mobile UI Kit (Sketch)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>153<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$24.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/04.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Flat-line E-Commerce Icons (AI)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>26<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$18.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/09.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">pixels </a>in <a class="product-meta fw-medium" href="#">UI Design</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Isometric Device Mockups (PSD)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>36<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$16.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/10.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">theDesigner </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Coffe Paper Cup Mockup</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>57<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$10.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/06.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Travel &amp; Landmark Icon Pack (AI)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>21<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$17.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/05.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">UI Design</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Minimal Mobile App UI Kit (Sketch)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>117<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$23.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/11.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">pixels </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star-half active"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Printed T-Shirt Mockup (PSD)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>94<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$12.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-grid-gutter">
            <div class="card product-card-alt">
              <div class="product-thumb">
                <button class="btn-wishlist btn-sm" type="button"><i class="far fa-heart"></i></button>
                <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="marketplace-single.html"><i class="far fa-eye"></i></a>
                  <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="fas fa-cart-plus"></i></button>
                </div><a class="product-thumb-overlay" href="marketplace-single.html"></a><img src="img/marketplace/products/12.jpg" alt="Product">
              </div>
              <div class="card-body">
                <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                  <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">pixels </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                  <div class="star-rating"><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon fas fa-star active"></i><i class="star-rating-icon far fa-star"></i>
                  </div>
                </div>
                <h3 class="product-title fs-sm mb-2"><a href="marketplace-single.html">Corporate Branding Mockup (PSD)</a></h3>
                <div class="d-flex flex-wrap justify-content-between align-items-center">
                  <div class="fs-sm me-2"><i class="fas fa-download text-muted me-1"></i>122<span class="fs-xs ms-1">Sales</span></div>
                  <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$18.<small>00</small></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-3">
        <!-- Pagination-->
        <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-left me-2"></i>Prev</a></li>
          </ul>
          <ul class="pagination">
            <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
            <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(current)</span></span></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
            <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
          </ul>
          <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#" aria-label="Next">Next<i class="fas fa-chevron-right ms-2"></i></a></li>
          </ul>
        </nav>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container pt-2 pb-3">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-4">
            <div class="text-nowrap mb-3"><a class="d-inline-block align-middle mt-n2 me-2" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" alt="Cartzilla"></a><span class="d-inline-block align-middle h5 fw-light text-white mb-0">Marketplace</span></div>
            <p class="fs-sm text-white opacity-70 pb-1">High quality items created by our global community.</p>
            <h6 class="d-inline-block pe-3 me-3 border-end border-light"><span class="text-primary">65,478 </span><span class="fw-normal text-white">Products</span></h6>
            <h6 class="d-inline-block pe-3 me-3 border-end border-light"><span class="text-primary">2,521 </span><span class="fw-normal text-white">Members</span></h6>
            <h6 class="d-inline-block me-3"><span class="text-primary">897 </span><span class="fw-normal text-white">Vendors</span></h6>
            <div class="widget mt-4 text-md-nowrap text-center text-md-start"><a class="btn-social bs-light bs-twitter me-2 mb-2" href="#"><i class="fab fa-twitter"></i></a><a class="btn-social bs-light bs-facebook me-2 mb-2" href="#"><i class="fab fa-facebook-f"></i></a><a class="btn-social bs-light bs-dribbble me-2 mb-2" href="#"><i class="fab fa-dribbble"></i></a><a class="btn-social bs-light bs-behance me-2 mb-2" href="#"><i class="fab fa-behance"></i></a><a class="btn-social bs-light bs-pinterest me-2 mb-2" href="#"><i class="fab fa-pinterest-p"></i></a></div>
          </div>
          <!-- Mobile dropdown menu (visible on screens below md)-->
          <div class="col-12 d-md-none text-center mb-4 pb-2">
            <div class="btn-group dropdown d-block mx-auto mb-3">
              <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-bs-toggle="dropdown">Categories</button>
              <ul class="dropdown-menu my-1">
                <li><a class="dropdown-item" href="#">Photos</a></li>
                <li><a class="dropdown-item" href="#">Graphics</a></li>
                <li><a class="dropdown-item" href="#">UI Design</a></li>
                <li><a class="dropdown-item" href="#">Web Themes</a></li>
                <li><a class="dropdown-item" href="#">Fonts</a></li>
                <li><a class="dropdown-item" href="#">Add-Ons</a></li>
              </ul>
            </div>
            <div class="btn-group dropdown d-block mx-auto">
              <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-bs-toggle="dropdown">For members</button>
              <ul class="dropdown-menu my-1">
                <li><a class="dropdown-item" href="#">Licenses</a></li>
                <li><a class="dropdown-item" href="#">Return policy</a></li>
                <li><a class="dropdown-item" href="#">Payment methods</a></li>
                <li><a class="dropdown-item" href="#">Become a vendor</a></li>
                <li><a class="dropdown-item" href="#">Become an affiliate</a></li>
                <li><a class="dropdown-item" href="#">Marketplace benefits</a></li>
              </ul>
            </div>
          </div>
          <!-- Desktop menu (visible on screens above md)-->
          <div class="col-md-3 d-none d-md-block text-center text-md-start mb-4">
            <div class="widget widget-links widget-light pb-2">
              <h3 class="widget-title text-light">Categories</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Photos</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Graphics</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">UI Design</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Web Themes</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Fonts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Add-Ons</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 d-none d-md-block text-center text-md-start mb-4">
            <div class="widget widget-links widget-light pb-2">
              <h3 class="widget-title text-light">For members</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Licenses</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Return policy</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Payment methods</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Become a vendor</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Become an affiliate</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Marketplace benefits</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Second row-->
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="widget w-100 mb-4 pb-3 text-center mx-auto" style="max-width: 28rem;">
            <h3 class="widget-title text-light pb-1">Subscribe to newsletter</h3>
            <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
              <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
              </div>
              <div class="form-text text-light opacity-50">*Receive early discount offers, updates and new products info.</div>
              <div class="subscription-status"></div>
            </form>
          </div>
          <hr class="hr-light mb-3">
          <div class="d-md-flex justify-content-between pt-4">
            <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
            <div class="widget widget-links widget-light pb-4">
              <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Help Center</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Affiliates</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Support</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="dashboard-favorites.html"><span class="handheld-toolbar-icon"><i class="far fa-heart"></i></span><span class="handheld-toolbar-label">Favorites</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="fas fa-bars"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="marketplace-cart.html"><span class="handheld-toolbar-icon"><i class="fas fa-cart-plus"></i><span class="badge bg-primary rounded-pill ms-1">3</span></span><span class="handheld-toolbar-label">$56.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon fas fa-chevron-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>