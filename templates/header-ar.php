<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>Cartzilla | Fashion Store v.1</title>
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
    <link rel="stylesheet" media="screen" href="vendor/drift-zoom/dist/drift-basic.min.css"/>
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
                    <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>تسجيل الدخول</a></li>
                    <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>اشتراك</a></li>
                </ul>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body tab-content py-4">
                <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
                    <div class="mb-3">
                        <label class="form-label" for="si-email">عنوان البريد الإلكتروني</label>
                        <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">يرجى تقديم عنوان بريد إلكتروني صالح البريد الإلكتروني.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="si-password">كلمة المرور</label>
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
                            <label class="form-check-label" for="si-remember">هل نسيت كلمة السر</label>
                        </div><a class="fs-sm" href="#">Forgot password?</a>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">تسجيل الدخول</button>
                </form>
                <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
                    <div class="mb-3">
                        <label class="form-label" for="su-name">الاسم بالكامل</label>
                        <input class="form-control" type="text" id="su-name" placeholder="" required>
                        <div class="invalid-feedback">اكتب اسمك لو سمحت.</div>
                    </div>
                    <div class="mb-3">
                        <label for="su-email">عنوان البريد الإلكتروني</label>
                        <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                        <div class="invalid-feedback">يرجى تقديم عنوان بريد إلكتروني صالح.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="su-password">كلمة المرور</label>
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
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">اشتراك</button>
                </form>
            </div>
        </div>
    </div>
</div>
<main class="page-wrapper">
    <!-- Quick View Modal-->
    <div class="modal-quick-view modal fade" id="quick-view" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title product-title"><a href="shop-single-v1.html" data-bs-toggle="tooltip" data-bs-placement="right" title="Go to product page">سويت شيرت رياضي بغطاء للرأس<i class="ci-arrow-right fs-lg ms-2"></i></a></h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <!-- Product gallery-->
                        <div class="col-lg-7 pe-lg-0">
                            <div class="product-gallery">
                                <div class="product-gallery-preview order-sm-2">
                                    <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="img/shop/single/gallery/01.jpg" data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                    <div class="product-gallery-preview-item" id="second"><img class="image-zoom" src="img/shop/single/gallery/02.jpg" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                    <div class="product-gallery-preview-item" id="third"><img class="image-zoom" src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                    <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom" src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                                        <div class="image-zoom-pane"></div>
                                    </div>
                                </div>
                                <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a></div>
                            </div>
                        </div>
                        <!-- Product details-->
                        <div class="col-lg-5 pt-4 pt-lg-0 image-zoom-pane">
                            <div class="product-details ms-auto pb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2"><a href="shop-single-v1.html#reviews">
                                        <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                                        </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 المراجعات</span></a>
                                    <button class="btn-wishlist" type="button" data-bs-toggle="tooltip" title="Add to wishlist"><i class="ci-heart"></i></button>
                                </div>
                                <div class="mb-3"><span class="h3 fw-normal text-accent me-1">$18.<small>99</small></span>
                                    <del class="text-muted fs-lg me-3">$25.<small>00</small></del><span class="badge bg-danger badge-shadow align-middle mt-n2">تخفيض السعر</span>
                                </div>
                                <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">اللون:</span><span class="text-muted" id="colorOptionText">أحمر / أزرق داكن / أبيض</span></div>
                                <div class="position-relative me-n4 mb-3">
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="color" id="color1" data-bs-label="colorOptionText" value="Red/Dark blue/White" checked>
                                        <label class="form-option-label rounded-circle" for="color1"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="color" id="color2" data-bs-label="colorOptionText" value="Beige/White/Black">
                                        <label class="form-option-label rounded-circle" for="color2"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                                    </div>
                                    <div class="form-check form-option form-check-inline mb-2">
                                        <input class="form-check-input" type="radio" name="color" id="color3" data-bs-label="colorOptionText" value="Dark grey/White/Mustard">
                                        <label class="form-option-label rounded-circle" for="color3"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                                    </div>
                                    <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>المنتج متاح</div>
                                </div>
                                <form class="mb-grid-gutter">
                                    <div class="mb-3">
                                        <label class="fw-medium pb-1" for="product-size">مقاس:</label>
                                        <select class="form-select" required id="product-size">
                                            <option value="">Select size</option>
                                            <option value="xs">XS</option>
                                            <option value="s">S</option>
                                            <option value="m">M</option>
                                            <option value="l">L</option>
                                            <option value="xl">XL</option>
                                        </select>
                                    </div>
                                    <div class="mb-3 d-flex align-items-center">
                                        <select class="form-select me-3" style="width: 5rem;">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="ci-cart fs-lg me-2"></i>أضف إلى السلة</button>
                                    </div>
                                </form>
                                <h5 class="h6 mb-3 pb-2 border-bottom"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>معلومات المنتج</h5>
                                <h6 class="fs-sm mb-2">نمط</h6>
                                <ul class="fs-sm ps-4">
                                    <li>أعلى مقنع</li>
                                </ul>
                                <h6 class="fs-sm mb-2">تكوين</h6>
                                <ul class="fs-sm ps-4">
                                    <li>ضلع مرن: قطن 95٪، إيلاستين 5٪</li>
                                    <li>البطانة: قطن 100٪</li>
                                    <li>قطن 80٪ ، بوليستر 20٪</li>
                                </ul>
                                <h6 class="fs-sm mb-2">فن. رقم.</h6>
                                <ul class="fs-sm ps-4 mb-0">
                                    <li>183260098</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar 3 Level (Light)-->
    <header class="shadow-sm">
        <!-- Topbar-->
        <div class="topbar topbar-dark bg-dark">
            <div class="container">
                <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">روابط مفيدة</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="tel:00331697720"><i class="ci-support text-muted me-2"></i>(00) 33 169 7720</a></li>
                        <li><a class="dropdown-item" href="order-tracking.html"><i class="ci-location text-muted me-2"></i>تتبع الطلب</a></li>
                    </ul>
                </div>
                <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="ci-support"></i><span class="text-muted me-1">يدعم</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
                <div class="tns-carousel tns-controls-static d-none d-md-block">
                    <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                        <div class="topbar-text">شحن مجاني للطلبات التي تزيد عن 200 دولار</div>
                        <div class="topbar-text">نعيد الأموال في غضون 30 يومًا</div>
                        <div class="topbar-text">دعم عملاء ودود على مدار الساعة طوال أيام الأسبوع</div>
                    </div>
                </div>
                <div class="ms-3 text-nowrap"><a class="topbar-link me-4 d-none d-md-inline-block" href="order-tracking.html"><i class="ci-location"></i>تتبع الطلب</a>
                    <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/ar.png" width="20" alt="English">عربي / $</a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li class="dropdown-item">
                                <select class="form-select form-select-sm">
                                    <option value="usd">$ USD</option>
                                    <option value="eur">€ EUR</option>
                                    <option value="ukp">£ UKP</option>
                                    <option value="jpy">¥ JPY</option>
                                </select>
                            </li>
                            <li><a class="dropdown-item pb-1" href="index1.html"><img class="me-2" src="img/flags/en.png" width="20" alt="Français">English</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <div class="navbar-sticky bg-light">
            <div class="navbar navbar-expand-lg navbar-light">
                <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0" href="index.html"><img src="img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index.html"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
                    <div class="input-group d-none d-lg-flex mx-4">
                        <input class="form-control rounded-end pe-5" type="text" placeholder="Search for products"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
                    </div>
                    <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">قم بتوسيع القائمة</span>
                            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span class="navbar-tool-tooltip">قائمة الرغبات</span>
                            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div></a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                            <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                            <div class="navbar-tool-text ms-n3"><small>مرحبا تسجيل الدخول</small>حسابي</div></a>
                        <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>عربة التسوق الخاصة بي</small>$265.00</a>
                            <!-- Cart dropdown-->
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                                    <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                                        <div class="widget-cart-item pb-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">أحذية رياضية نسائية ملونة</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">حقيبة ظهر تي إتش جينز سيتي</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/03.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">قبعة ملونة </a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="widget-cart-item py-2 border-bottom">
                                            <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                                            <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/04.jpg" width="64" alt="Product"></a>
                                                <div class="ps-2">
                                                    <h6 class="widget-product-title"><a href="shop-single-v1.html">قطن بولو بقصة عادية</a></h6>
                                                    <div class="widget-product-meta"><span class="text-accent me-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                                        <div class="fs-sm me-2 py-2"><span class="text-muted">المجموع الفرعي:</span><span class="text-accent fs-base ms-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">قم بتوسيع العربة<i class="ci-arrow-right ms-1 me-n1"></i></a>
                                    </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i class="ci-card me-2 fs-base align-middle"></i>الدفع</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
                <div class="container">
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <!-- Search-->
                        <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                            <input class="form-control rounded-start" type="text" placeholder="Search for products">
                        </div>
                        <!-- Departments menu-->
                        <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"><i class="ci-view-grid me-2"></i>الإدارات</a>
                                <div class="dropdown-menu px-2 pb-4">
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/01.jpg" alt="Clothing"></a>
                                                <h6 class="fs-base mb-2">ملابس</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">ملابس نسائية</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">ملابس رجالية</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">ملابس اطفال</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/02.jpg" alt="Shoes"></a>
                                                <h6 class="fs-base mb-2">أحذية</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">أحذية المرأة</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">احذية رجالية</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">أحذية الأطفال</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/03.jpg" alt="Gadgets"></a>
                                                <h6 class="fs-base mb-2">الأدوات</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">الهواتف الذكية &amp; أجهزة لوحية</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">أدوات يمكن ارتداؤها</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">قراء الكتاب الإلكتروني</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/04.jpg" alt="Furniture"></a>
                                                <h6 class="fs-base mb-2">أثاث &amp; ديكور</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">الأثاث المنزلي</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">أثاث المكاتب</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">الإضاءة والديكور</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/05.jpg" alt="Accessories"></a>
                                                <h6 class="fs-base mb-2">مكملات</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">القبعات</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">نظارة شمسيه</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">أكياس</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                                            <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/06.jpg" alt="Entertainment"></a>
                                                <h6 class="fs-base mb-2">ترفيه</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">لعب الاطفال</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">ألعاب الفيديو</a></li>
                                                    <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">في الخارج / تخييم</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- Primary menu-->
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">الرئيسية</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">متجر الأزياء v.1.0</span><small class="d-block text-muted">تصميم متجر كلاسيكي</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="img/home/preview/th01.jpg" alt="Fashion Store v.1"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">متجر للالكترونيات</span><small class="d-block text-muted">سلايدر + لافتات ترويجية</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="img/home/preview/th03.jpg" alt="Electronics Store"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">المتجر</span><small class="d-block text-muted">متعدد البائعين والسلع الرقمية</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="img/home/preview/th04.jpg" alt="Marketplace"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">دكان بقالة</span><small class="d-block text-muted">العرض الكامل + القائمة الجانبية</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="img/home/preview/th06.jpg" alt="Grocery Store"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">خدمة توصيل الطعام</span><small class="d-block text-muted">طعام &amp; توصيل المشروبات</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="img/home/preview/th07.jpg" alt="Food Delivery Service"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">متجر الأزياء v.2</span><small class="d-block text-muted">سلايدر + فئات مميزة</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="img/home/preview/th02.jpg" alt="Fashion Store v.2"></a></div>
                                    </li>
                                    <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">متجر منتج واحد</span><small class="d-block text-muted">منتج واحد / ماركة أحادية</small></a>
                                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="img/home/preview/th05.jpg" alt="Single Product / Brand Store"></a></div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">محل</a>
                                <div class="dropdown-menu p-0">
                                    <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                            <div class="widget widget-links mb-4">
                                                <h6 class="fs-base mb-3">تخطيطات المتجر</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ls.html">متجر الشبكة - الشريط الجانبي الأيسر</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-rs.html">متجر الشبكة - الشريط الجانبي الأيمن</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ft.html">تسوق الشبكة - المرشحات في الأعلى</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ls.html">قائمة المتاجر - الشريط الجانبي الأيسر</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-list-rs.html">قائمة المتاجر - الشريط الجانبي الأيمن</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ft.html">قائمة التسوق - المرشحات في الأعلى</a></li>
                                                </ul>
                                            </div>
                                            <div class="widget widget-links">
                                                <h6 class="fs-base mb-3">المتجر</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="marketplace-category.html">صفحة الفئة</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="marketplace-single.html">صفحة عنصر واحد</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="marketplace-vendor.html">صفحة البائع</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="marketplace-cart.html">عربة التسوق</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="marketplace-checkout.html">الدفع</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                            <div class="widget widget-links">
                                                <h6 class="fs-base mb-3">صفحات التسوق</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-categories.html">فئات التسوق</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v1.html">صفحة المنتج الإصدار 1</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v2.html">صفحة المنتج الإصدار 2</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="shop-cart.html">عربة التسوق</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="checkout-details.html">تفاصيل الدفع</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="checkout-shipping.html">الخروج - الشحن</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="checkout-payment.html">الخروج - الدفع</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="checkout-review.html">تسجيل الخروج - مراجعة</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="checkout-complete.html">أتمت تحقيق</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="order-tracking.html">تتبع الطلب</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="comparison.html">مقارنة السلعة</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                                            <div class="widget widget-links mb-4">
                                                <h6 class="fs-base mb-3">دكان بقالة</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="grocery-catalog.html">بيان المنتج</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="grocery-single.html">صفحة منتج واحد</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="grocery-checkout.html">الدفع</a></li>
                                                </ul>
                                            </div>
                                            <div class="widget widget-links">
                                                <h6 class="fs-base mb-3">توصيل طلبات الطعام</h6>
                                                <ul class="widget-list">
                                                    <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-category.html">صفحة الفئة</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-single.html">صنف واحد (مطعم)</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-cart.html">عربة التسوق (طلبك)</a></li>
                                                    <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-checkout.html">الخروج (العنوان والدفع)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">الحساب</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">حساب مستخدم المتجر</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="account-orders.html">تاريخ الطلبات</a></li>
                                            <li><a class="dropdown-item" href="account-profile.html">إعدادات الملف الشخصي</a></li>
                                            <li><a class="dropdown-item" href="account-address.html">عناوين الحساب</a></li>
                                            <li><a class="dropdown-item" href="account-payment.html">طرق الدفع</a></li>
                                            <li><a class="dropdown-item" href="account-wishlist.html">قائمة الرغبات</a></li>
                                            <li><a class="dropdown-item" href="account-tickets.html">تذاكري</a></li>
                                            <li><a class="dropdown-item" href="account-single-ticket.html">تذكره لشخص واحد</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">لوحة معلومات البائع</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="dashboard-settings.html">إعدادات</a></li>
                                            <li><a class="dropdown-item" href="dashboard-purchases.html">المشتريات</a></li>
                                            <li><a class="dropdown-item" href="dashboard-favorites.html">المفضلة</a></li>
                                            <li><a class="dropdown-item" href="dashboard-sales.html">مبيعات</a></li>
                                            <li><a class="dropdown-item" href="dashboard-products.html">منتجات</a></li>
                                            <li><a class="dropdown-item" href="dashboard-add-new-product.html">اضافة منتج جديد</a></li>
                                            <li><a class="dropdown-item" href="dashboard-payouts.html">المدفوعات</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="account-signin.html">تسجيل الدخول / التسجيل</a></li>
                                    <li><a class="dropdown-item" href="account-password-recovery.html">استعادة كلمة السر</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">الصفحات</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">متغيرات نافبار</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="navbar-1-level-light.html">1 مستوى الضوء</a></li>
                                            <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 مستوى الظلام</a></li>
                                            <li><a class="dropdown-item" href="navbar-2-level-light.html">2 مستوى الضوء</a></li>
                                            <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 مستوى الظلام</a></li>
                                            <li><a class="dropdown-item" href="navbar-3-level-light.html">3 مستوى الضوء</a></li>
                                            <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 مستوى الظلام</a></li>
                                            <li><a class="dropdown-item" href="home-electronics-store.html">متجر للالكترونيات</a></li>
                                            <li><a class="dropdown-item" href="home-marketplace.html">المتجر</a></li>
                                            <li><a class="dropdown-item" href="home-grocery-store.html">قائمة جانبية (بقالة)</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="about.html">معلومات عنا</a></li>
                                    <li><a class="dropdown-item" href="contacts.html">جهات الاتصال</a></li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">مركز المساعدة</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="help-topics.html">مواضيع التعليمات</a></li>
                                            <li><a class="dropdown-item" href="help-single-topic.html">موضوع واحد</a></li>
                                            <li><a class="dropdown-item" href="help-submit-request.html">تقديم طلب</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">تقديم طلب</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="404-simple.html">404 - نص بسيط</a></li>
                                            <li><a class="dropdown-item" href="404-illustration.html">404 - رسم توضيحي</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="sticky-footer.html">عرض تذييل مثبت</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">مقالات</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">تخطيطات قائمة المدونة</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-list-sidebar.html">قائمة مع الشريط الجانبي</a></li>
                                            <li><a class="dropdown-item" href="blog-list.html">لا قائمة الشريط الجانبي</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#">تخطيطات شبكة المدونة</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-grid-sidebar.html">شبكة مع الشريط الجانبي</a></li>
                                            <li><a class="dropdown-item" href="blog-grid.html">الشبكة لا يوجد شريط جانبي</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">تخطيطات وظيفة واحدة</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-single-sidebar.html">مقالة مع الشريط الجانبي</a></li>
                                            <li><a class="dropdown-item" href="blog-single.html">رقم المادة الشريط الجانبي</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">المستندات / المكونات</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="docs/dev-setup.html">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="ci-book"></i></div>
                                                <div class="ms-2"><span class="d-block text-heading">توثيق</span><small class="d-block text-muted">تخصيص البداية</small></div>
                                            </div></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="components/typography.html">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="ci-server"></i></div>
                                                <div class="ms-2"><span class="d-block text-heading">عناصر<span class="badge bg-info ms-2">40+</span></span><small class="d-block text-muted">بناء أسرع للصفحة</small></div>
                                            </div></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="docs/changelog.html">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="ci-edit"></i></div>
                                                <div class="ms-2"><span class="d-block text-heading">التغيير<span class="badge bg-success ms-2">v2.2.0</span></span><small class="d-block text-muted">تحديثات منتظمة</small></div>
                                            </div></a></li>
                                    <li class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="mailto:support@createx.studio">
                                            <div class="d-flex">
                                                <div class="lead text-muted pt-1"><i class="ci-help"></i></div>
                                                <div class="ms-2"><span class="d-block text-heading">يدعم</span><small class="d-block text-muted">support@createx.studio</small></div>
                                            </div></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>