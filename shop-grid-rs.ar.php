<?php
include 'templates/header-ar.php'
?>
      <!-- Page Title-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">محل</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">الشبكة الشريط الجانبي الأيمن</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">تسوق الشريط الجانبي الأيمن للشبكة</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-center justify-content-sm-between align-items-center pt-2 pb-4 pb-sm-5">
              <div class="d-flex flex-wrap">
                <div class="d-flex align-items-center flex-nowrap me-3 me-sm-4 pb-3">
                  <label class="text-light fs-sm opacity-75 text-nowrap me-2 d-none d-sm-block" for="sorting">ترتيب حسب:</label>
                  <select class="form-select" id="sorting">
                    <option>شعبية</option>
                    <option>منخفض - هايت السعر</option>
                    <option>مرتفع - منخفض السعر</option>
                    <option>متوسط ​​تقييم</option>
                    <option>ترتيب من الألف إلى الياء</option>
                    <option>ترتيب من الألف إلى الياء</option>
                  </select><span class="fs-sm text-light opacity-75 text-nowrap ms-2 d-none d-md-block">من 287 منتجات</span>
                </div>
              </div>
              <div class="d-flex pb-3"><a class="nav-link-style nav-link-light me-3" href="#"><i class="ci-arrow-left"></i></a><span class="fs-md text-light">1 / 5</span><a class="nav-link-style nav-link-light ms-3" href="#"><i class="ci-arrow-right"></i></a></div>
              <div class="d-none d-sm-flex pb-3"><a class="btn btn-icon nav-link-style bg-light text-dark disabled opacity-100 me-2" href="#"><i class="ci-view-grid"></i></a><a class="btn btn-icon nav-link-style nav-link-light" href="shop-list-rs.html"><i class="ci-view-list"></i></a></div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/01.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">أحذية رياضية &amp; كيدز</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">أحذية رياضية نسائية ملون</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-75">
                        <label class="form-option-label" for="s-75">7.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                        <label class="form-option-label" for="s-80">8</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-85">
                        <label class="form-option-label" for="s-85">8.5</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size1" id="s-90">
                        <label class="form-option-label" for="s-90">9</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card"><span class="badge bg-danger badge-shadow">Sale</span>
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">قميص نسائي</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">بلوزة من الدانتيل القطني</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                        <del class="fs-sm text-muted">38.<small>50</small></del>
                      </div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="white" checked>
                        <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="blue">
                        <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="yellow">
                        <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color1" id="pink">
                        <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                      </div>
                    </div>
                    <div class="d-flex mb-2">
                      <select class="form-select form-select-sm me-2">
                        <option>XS</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                      </select>
                      <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    </div>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/03.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">سراويل نسائية</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">أمي السراويل عالية الخصر</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size2" id="xs">
                        <label class="form-option-label" for="xs">XS</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size2" id="s" checked>
                        <label class="form-option-label" for="s">S</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size2" id="m">
                        <label class="form-option-label" for="m">M</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size2" id="l">
                        <label class="form-option-label" for="l">L</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/04.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">ملابس رياضية</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">سترة رياضية نسائية</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size3" id="xs2" checked>
                        <label class="form-option-label" for="xs2">XS</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size3" id="s2">
                        <label class="form-option-label" for="s2">S</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size3" id="m2">
                        <label class="form-option-label" for="m2">M</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size3" id="l2">
                        <label class="form-option-label" for="l2">L</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/05.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">نظارات رجالية</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">النظارات الشمسية المستقطبة</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-muted fs-sm">إنتهى من المخزن</span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm d-block w-100 mb-2" href="shop-single-v1.html">عرض التفاصيل</a>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/06.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">حقائب ظهر</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">حقيبة ظهر تي إتش جينز سيتي</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color2" id="khaki" checked>
                        <label class="form-option-label rounded-circle" for="khaki"><span class="form-option-color rounded-circle" style="background-color: #97947c;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color2" id="jeans">
                        <label class="form-option-label rounded-circle" for="jeans"><span class="form-option-color rounded-circle" style="background-color: #99a8be;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color2" id="white2">
                        <label class="form-option-label rounded-circle" for="white2"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Banner-->
            <div class="py-sm-2">
              <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden mb-4 rounded-3">
                <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                  <h4 class="fs-lg fw-light mb-2">كونفيرس اول ستار</h4>
                  <h3 class="mb-4">اجعل يومك مريحًا</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">تسوق الآن</a>
                </div><img class="d-block ms-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
              </div>
            </div>
            <!-- Products grid-->
            <div class="row mx-n2">
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/07.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">ملابس السباحة النسائية</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">قطعتين بيكيني مطبوع</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size4" id="xs3" checked>
                        <label class="form-option-label" for="xs3">XS</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size4" id="s3">
                        <label class="form-option-label" for="s3">S</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size4" id="m3">
                        <label class="form-option-label" for="m3">M</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/08.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">لعب الاطفال</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">لينة الباندا تيدي بير</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$14.<small>99</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/09.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">مستحضرات التجميل</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">أحمر شفاه ميتاليك (قرمزي)</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$12.<small>99</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color3" id="crimson" checked>
                        <label class="form-option-label rounded-circle" for="crimson"><span class="form-option-color rounded-circle" style="background-color: #bd3c82;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color3" id="creamy">
                        <label class="form-option-label rounded-circle" for="creamy"><span class="form-option-color rounded-circle" style="background-color: #ebae81;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color3" id="palm">
                        <label class="form-option-label rounded-circle" for="palm"><span class="form-option-color rounded-circle" style="background-color: #ca8799;"></span></label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/10.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">اكسسوارات رجالية</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">5 عبوات من الأساور متعددة الألوان</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$7.<small>99</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/11.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">صنادل رجالية</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">صندل ناعم للقدم</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$99.<small>50</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color4" id="blue2" checked>
                        <label class="form-option-label rounded-circle" for="blue2"><span class="form-option-color rounded-circle" style="background-color: #879fb3;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color4" id="brown">
                        <label class="form-option-label rounded-circle" for="brown"><span class="form-option-color rounded-circle" style="background-color: #9c6d4a;"></span></label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="color4" id="black">
                        <label class="form-option-label rounded-circle" for="black"><span class="form-option-color rounded-circle" style="background-color: #333333;"></span></label>
                      </div>
                    </div>
                    <div class="d-flex mb-2">
                      <select class="form-select form-select-sm me-2">
                        <option>9.5</option>
                        <option>10</option>
                        <option>10.5</option>
                        <option>11</option>
                        <option>11.5</option>
                      </select>
                      <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    </div>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/12.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">قبعات الرجال</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">3- قبعة كولور صن ستاش</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$25.<small>99</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size5" id="s4" checked>
                        <label class="form-option-label" for="s4">S</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size5" id="m4">
                        <label class="form-option-label" for="m4">M</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size5" id="l4">
                        <label class="form-option-label" for="l4">L</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card"><span class="badge bg-danger badge-shadow">تخفيض السعر</span>
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/13.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">قمصان رجالية</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">قطن بولو قصة عادية</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$11.<small>50</small></span>
                        <del class="fs-sm text-muted">$13.<small>50</small></del>
                      </div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size6" id="s5">
                        <label class="form-option-label" for="s5">S</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size6" id="m5">
                        <label class="form-option-label" for="m5">M</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size6" id="l5" checked>
                        <label class="form-option-label" for="l5">L</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size6" id="xl5">
                        <label class="form-option-label" for="xl5">XL</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/14.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">جينز رجالي</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">بنطال جينز بقصة ضيقة</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size7" id="s6">
                        <label class="form-option-label" for="s6">S</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size7" id="m6">
                        <label class="form-option-label" for="m6">M</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size7" id="l6" checked>
                        <label class="form-option-label" for="l6">L</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size7" id="xl6">
                        <label class="form-option-label" for="xl6">XL</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
                <hr class="d-sm-none">
              </div>
              <!-- Product-->
              <div class="col-md-4 col-sm-6 px-2 mb-4">
                <div class="card product-card">
                  <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/15.jpg" alt="Product"></a>
                  <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">صدريات الرجال</a>
                    <h3 class="product-title fs-sm"><a href="shop-single-v1.html">ترينش كوت بصدر واحد</a></h3>
                    <div class="d-flex justify-content-between">
                      <div class="product-price"><span class="text-accent">$79.<small>99</small></span></div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                    </div>
                  </div>
                  <div class="card-body card-body-hidden">
                    <div class="text-center pb-2">
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size8" id="m7">
                        <label class="form-option-label" for="m7">M</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size8" id="l7" checked>
                        <label class="form-option-label" for="l7">L</label>
                      </div>
                      <div class="form-check form-option form-check-inline mb-2">
                        <input class="form-check-input" type="radio" name="size8" id="xl7">
                        <label class="form-option-label" for="xl7">XL</label>
                      </div>
                    </div>
                    <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>أضف إلى السلة</button>
                    <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>نظرة سريعة</a></div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="my-3">
            <!-- Pagination-->
            <nav class="d-flex justify-content-between pt-2" aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#"><i class="ci-arrow-left me-2"></i>السابق</a></li>
              </ul>
              <ul class="pagination">
                <li class="page-item d-sm-none"><span class="page-link page-link-static">1 / 5</span></li>
                <li class="page-item active d-none d-sm-block" aria-current="page"><span class="page-link">1<span class="visually-hidden">(تيار)</span></span></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">2</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">4</a></li>
                <li class="page-item d-none d-sm-block"><a class="page-link" href="#">5</a></li>
              </ul>
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#" aria-label="Next">التالي<i class="ci-arrow-right ms-2"></i></a></li>
              </ul>
            </nav>
          </section>
          <!-- Sidebar-->
          <aside class="col-lg-4">
            <!-- Sidebar-->
            <div class="offcanvas offcanvas-collapse offcanvas-end bg-white w-100 rounded-3 shadow-lg ms-lg-auto py-1" id="shop-sidebar" style="max-width: 22rem;">
              <div class="offcanvas-header align-items-center shadow-sm">
                <h2 class="h5 mb-0">Filters</h2>
                <button class="btn-close ms-auto" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body py-grid-gutter px-lg-grid-gutter">
                <!-- Categories-->
                <div class="widget widget-categories mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">فئات</h3>
                  <div class="accordion mt-n1" id="shop-categories">
                    <!-- Shoes-->
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shoes" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="shoes">أحذية</a></h3>
                      <div class="accordion-collapse collapse" id="shoes" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links widget-filter">
                            <div class="input-group input-group-sm mb-2">
                              <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                            </div>
                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">مشاهدة الكل</span><span class="fs-xs text-muted ms-3">1,953</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">Pumps &amp; High Heels</span><span class="fs-xs text-muted ms-3">247</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">راقصات الباليه &amp; الشقق</span><span class="fs-xs text-muted ms-3">156</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">صنادل</span><span class="fs-xs text-muted ms-3">310</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">أحذية</span><span class="fs-xs text-muted ms-3">402</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">أحذية</span><span class="fs-xs text-muted ms-3">393</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">جزمة الكاحل</span><span class="fs-xs text-muted ms-3">50</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">المتسكعون</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">الانزلاق على</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">شباشب</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">شباشب &amp; البغال</span><span class="fs-xs text-muted ms-3">24</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حذاء رياضي</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">أوكسفورد</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                              <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">أحذية الذكية</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Clothing-->
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button" href="#clothing" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="clothing">ملابس</a></h3>
                      <div class="accordion-collapse collapse show" id="clothing" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links widget-filter">
                            <div class="input-group input-group-sm mb-2">
                              <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                            </div>
                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">مشاهدة الكل</span><span class="fs-xs text-muted ms-3">2,548</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">بليزر &amp; بدلة</span><span class="fs-xs text-muted ms-3">235</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">البلوزات</span><span class="fs-xs text-muted ms-3">410</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">بالأزرار &amp; صداري</span><span class="fs-xs text-muted ms-3">107</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">فساتين</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">زنط &amp; بلوزات</span><span class="fs-xs text-muted ms-3">122</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">جاكيتات &amp; المعاطف</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">جينز</span><span class="fs-xs text-muted ms-3">215</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">الملابس الداخلية</span><span class="fs-xs text-muted ms-3">150</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">ملابس الأمومة</span><span class="fs-xs text-muted ms-3">8</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">ملابس نوم</span><span class="fs-xs text-muted ms-3">26</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">قمصان</span><span class="fs-xs text-muted ms-3">164</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">السراويل القصيرة</span><span class="fs-xs text-muted ms-3">147</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">جوارب &amp; الجوارب</span><span class="fs-xs text-muted ms-3">139</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">ملابس رياضية</span><span class="fs-xs text-muted ms-3">65</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">ملابس سباحة</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">قمصان &amp; سترات</span><span class="fs-xs text-muted ms-3">209</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">بلايز</span><span class="fs-xs text-muted ms-3">132</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">بنطلون</span><span class="fs-xs text-muted ms-3">105</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">ثياب داخلية</span><span class="fs-xs text-muted ms-3">87</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Bags-->
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#bags" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="bags">أكياس</a></h3>
                      <div class="accordion-collapse collapse" id="bags" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links widget-filter">
                            <div class="input-group input-group-sm mb-2">
                              <input class="widget-filter-search form-control rounded-end" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                            </div>
                            <ul class="widget-list widget-filter-list pt-1" style="height: 12rem;" data-simplebar data-simplebar-auto-hide="false">
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">مشاهدة الكل</span><span class="fs-xs text-muted ms-3">801</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقائب اليد</span><span class="fs-xs text-muted ms-3">238</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقائب ظهر</span><span class="fs-xs text-muted ms-3">116</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">محافظ</span><span class="fs-xs text-muted ms-3">104</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقائب سفر</span><span class="fs-xs text-muted ms-3">115</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حزم قطني</span><span class="fs-xs text-muted ms-3">17</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">اكياس واقية من المطر</span><span class="fs-xs text-muted ms-3">9</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقيبة / اكسسوارات السفر</span><span class="fs-xs text-muted ms-3">93</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">أكياس حفاظات</span><span class="fs-xs text-muted ms-3">5</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">أكياس الغداء</span><span class="fs-xs text-muted ms-3">8</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقائب رسول</span><span class="fs-xs text-muted ms-3">2</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقائب الكمبيوتر المحمول</span><span class="fs-xs text-muted ms-3">31</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقائب</span><span class="fs-xs text-muted ms-3">45</span></a></li>
                                <li class="widget-list-item widget-filter-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span class="widget-filter-item-text">حقائب رياضية</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Sunglasses-->
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#sunglasses" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="sunglasses">نظارة شمسيه</a></h3>
                      <div class="collapse" id="sunglasses" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links">
                            <ul class="widget-list">
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>مشاهدة الكل</span><span class="fs-xs text-muted ms-3">1,842</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>أزياء النظارات الشمسية</span><span class="fs-xs text-muted ms-3">953</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>نظارات شمسية رياضية</span><span class="fs-xs text-muted ms-3">589</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>النظارات الشمسية الكلاسيكية</span><span class="fs-xs text-muted ms-3">300</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Watches-->
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#watches" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="watches">ساعات</a></h3>
                      <div class="accordion-collapse collapse" id="watches" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links">
                            <ul class="widget-list">
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>مشاهدة الكل</span><span class="fs-xs text-muted ms-3">734</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>ساعات الموضة</span><span class="fs-xs text-muted ms-3">572</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>ساعات عادية</span><span class="fs-xs text-muted ms-3">110</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>ساعات فاخرة</span><span class="fs-xs text-muted ms-3">34</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>ساعات رياضية</span><span class="fs-xs text-muted ms-3">18</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Accessories-->
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#accessories" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="accessories">مكملات</a></h3>
                      <div class="accordion-collapse collapse" id="accessories" data-bs-parent="#shop-categories">
                        <div class="accordion-body">
                          <div class="widget widget-links">
                            <ul class="widget-list">
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>مشاهدة الكل</span><span class="fs-xs text-muted ms-3">920</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>أحزمة</span><span class="fs-xs text-muted ms-3">364</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>القبعات</span><span class="fs-xs text-muted ms-3">405</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>مجوهرات</span><span class="fs-xs text-muted ms-3">131</span></a></li>
                                <li class="widget-list-item"><a class="widget-list-link d-flex justify-content-between align-items-center" href="#"><span>مستحضرات التجميل</span><span class="fs-xs text-muted ms-3">20</span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Price range-->
                <div class="widget mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Price</h3>
                  <div class="range-slider" data-start-min="250" data-start-max="680" data-min="0" data-max="1000" data-step="1">
                    <div class="range-slider-ui"></div>
                    <div class="d-flex pb-1">
                      <div class="w-50 pe-2 me-2">
                        <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                          <input class="form-control range-slider-value-min" type="text">
                        </div>
                      </div>
                      <div class="w-50 ps-2">
                        <div class="input-group input-group-sm"><span class="input-group-text">$</span>
                          <input class="form-control range-slider-value-max" type="text">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Filter by Brand-->
                <div class="widget widget-filter mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Brand</h3>
                  <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="بحث"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                  </div>
                  <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="adidas">
                        <label class="form-check-label widget-filter-item-text" for="adidas">شركة اديداس</label>
                      </div><span class="fs-xs text-muted">425</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ataylor">
                        <label class="form-check-label widget-filter-item-text" for="ataylor">آن تايلور</label>
                      </div><span class="fs-xs text-muted">15</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="armani">
                        <label class="form-check-label widget-filter-item-text" for="armani">أرماني</label>
                      </div><span class="fs-xs text-muted">18</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="banana">
                        <label class="form-check-label widget-filter-item-text" for="banana">جمهورية الموز</label>
                      </div><span class="fs-xs text-muted">103</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="bilabong">
                        <label class="form-check-label widget-filter-item-text" for="bilabong">بيلابونج</label>
                      </div><span class="fs-xs text-muted">27</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="birkenstock">
                        <label class="form-check-label widget-filter-item-text" for="birkenstock">بيركنستوك</label>
                      </div><span class="fs-xs text-muted">10</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="klein">
                        <label class="form-check-label widget-filter-item-text" for="klein">كالفن كلاين</label>
                      </div><span class="fs-xs text-muted">365</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="columbia">
                        <label class="form-check-label widget-filter-item-text" for="columbia">كولومبيا</label>
                      </div><span class="fs-xs text-muted">508</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="converse">
                        <label class="form-check-label widget-filter-item-text" for="converse">الحديث</label>
                      </div><span class="fs-xs text-muted">176</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="dockers">
                        <label class="form-check-label widget-filter-item-text" for="dockers">عمال الرصيف</label>
                      </div><span class="fs-xs text-muted">54</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fruit">
                        <label class="form-check-label widget-filter-item-text" for="fruit">ثمرة النول</label>
                      </div><span class="fs-xs text-muted">739</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hanes">
                        <label class="form-check-label widget-filter-item-text" for="hanes">هانس</label>
                      </div><span class="fs-xs text-muted">92</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="choo">
                        <label class="form-check-label widget-filter-item-text" for="choo">جيمي تشو</label>
                      </div><span class="fs-xs text-muted">17</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="levis">
                        <label class="form-check-label widget-filter-item-text" for="levis">ليفي</label>
                      </div><span class="fs-xs text-muted">361</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="lee">
                        <label class="form-check-label widget-filter-item-text" for="lee">لي</label>
                      </div><span class="fs-xs text-muted">264</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wearhouse">
                        <label class="form-check-label widget-filter-item-text" for="wearhouse">ملابس الرجال</label>
                      </div><span class="fs-xs text-muted">75</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="newbalance">
                        <label class="form-check-label widget-filter-item-text" for="newbalance">الرصيد الجديد</label>
                      </div><span class="fs-xs text-muted">218</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="nike">
                        <label class="form-check-label widget-filter-item-text" for="nike">نايك</label>
                      </div><span class="fs-xs text-muted">810</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="navy">
                        <label class="form-check-label widget-filter-item-text" for="navy">البحرية القديمة</label>
                      </div><span class="fs-xs text-muted">147</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="polo">
                        <label class="form-check-label widget-filter-item-text" for="polo">بولو رالف لورين</label>
                      </div><span class="fs-xs text-muted">64</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="puma">
                        <label class="form-check-label widget-filter-item-text" for="puma">بوما</label>
                      </div><span class="fs-xs text-muted">370</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="reebok">
                        <label class="form-check-label widget-filter-item-text" for="reebok">ريبوك</label>
                      </div><span class="fs-xs text-muted">506</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="skechers">
                        <label class="form-check-label widget-filter-item-text" for="skechers">سكيتشرز</label>
                      </div><span class="fs-xs text-muted">209</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="hilfiger">
                        <label class="form-check-label widget-filter-item-text" for="hilfiger">تومي هيلفيغر</label>
                      </div><span class="fs-xs text-muted">487</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="armour">
                        <label class="form-check-label widget-filter-item-text" for="armour">تحت الدرع</label>
                      </div><span class="fs-xs text-muted">90</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="urban">
                        <label class="form-check-label widget-filter-item-text" for="urban">تجار الملابس في المناطق الحضرية</label>
                      </div><span class="fs-xs text-muted">152</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="vsecret">
                        <label class="form-check-label widget-filter-item-text" for="vsecret">سر فيكتوريا</label>
                      </div><span class="fs-xs text-muted">238</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wolverine">
                        <label class="form-check-label widget-filter-item-text" for="wolverine">ولفيرين</label>
                      </div><span class="fs-xs text-muted">29</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="wrangler">
                        <label class="form-check-label widget-filter-item-text" for="wrangler">رانجلر</label>
                      </div><span class="fs-xs text-muted">115</span>
                    </li>
                  </ul>
                </div>
                <!-- Filter by Size-->
                <div class="widget widget-filter mb-4 pb-4 border-bottom">
                  <h3 class="widget-title">Size</h3>
                  <div class="input-group input-group-sm mb-2">
                    <input class="widget-filter-search form-control rounded-end pe-5" type="text" placeholder="Search"><i class="ci-search position-absolute top-50 end-0 translate-middle-y fs-sm me-3"></i>
                  </div>
                  <ul class="widget-list widget-filter-list list-unstyled pt-1" style="max-height: 11rem;" data-simplebar data-simplebar-auto-hide="false">
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-xs">
                        <label class="form-check-label widget-filter-item-text" for="size-xs">XS</label>
                      </div><span class="fs-xs text-muted">34</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-s">
                        <label class="form-check-label widget-filter-item-text" for="size-s">S</label>
                      </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-m">
                        <label class="form-check-label widget-filter-item-text" for="size-m">M</label>
                      </div><span class="fs-xs text-muted">198</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-l">
                        <label class="form-check-label widget-filter-item-text" for="size-l">L</label>
                      </div><span class="fs-xs text-muted">72</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-xl">
                        <label class="form-check-label widget-filter-item-text" for="size-xl">XL</label>
                      </div><span class="fs-xs text-muted">46</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-39">
                        <label class="form-check-label widget-filter-item-text" for="size-39">39</label>
                      </div><span class="fs-xs text-muted">112</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-40">
                        <label class="form-check-label widget-filter-item-text" for="size-40">40</label>
                      </div><span class="fs-xs text-muted">85</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-41">
                        <label class="form-check-label widget-filter-item-text" for="size-40">41</label>
                      </div><span class="fs-xs text-muted">210</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-42">
                        <label class="form-check-label widget-filter-item-text" for="size-42">42</label>
                      </div><span class="fs-xs text-muted">57</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-43">
                        <label class="form-check-label widget-filter-item-text" for="size-43">43</label>
                      </div><span class="fs-xs text-muted">30</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-44">
                        <label class="form-check-label widget-filter-item-text" for="size-44">44</label>
                      </div><span class="fs-xs text-muted">61</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-45">
                        <label class="form-check-label widget-filter-item-text" for="size-45">45</label>
                      </div><span class="fs-xs text-muted">23</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-46">
                        <label class="form-check-label widget-filter-item-text" for="size-46">46</label>
                      </div><span class="fs-xs text-muted">19</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-47">
                        <label class="form-check-label widget-filter-item-text" for="size-47">47</label>
                      </div><span class="fs-xs text-muted">15</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-48">
                        <label class="form-check-label widget-filter-item-text" for="size-48">48</label>
                      </div><span class="fs-xs text-muted">12</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center mb-1">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-49">
                        <label class="form-check-label widget-filter-item-text" for="size-49">49</label>
                      </div><span class="fs-xs text-muted">8</span>
                    </li>
                    <li class="widget-filter-item d-flex justify-content-between align-items-center">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="size-50">
                        <label class="form-check-label widget-filter-item-text" for="size-50">50</label>
                      </div><span class="fs-xs text-muted">6</span>
                    </li>
                  </ul>
                </div>
                <!-- Filter by Color-->
                <div class="widget">
                  <h3 class="widget-title">الالوان</h3>
                  <div class="d-flex flex-wrap">
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-blue-gray">
                      <label class="form-option-label rounded-circle" for="color-blue-gray"><span class="form-option-color rounded-circle" style="background-color: #b3c8db;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-blue-gray">ازرق رمادي</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-burgundy">
                      <label class="form-option-label rounded-circle" for="color-burgundy"><span class="form-option-color rounded-circle" style="background-color: #ca7295;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-burgundy">بورجوندي</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-teal">
                      <label class="form-option-label rounded-circle" for="color-teal"><span class="form-option-color rounded-circle" style="background-color: #91c2c3;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-teal">Teal</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-brown">
                      <label class="form-option-label rounded-circle" for="color-brown"><span class="form-option-color rounded-circle" style="background-color: #9a8480;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-brown">بني</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-coral-red">
                      <label class="form-option-label rounded-circle" for="color-coral-red"><span class="form-option-color rounded-circle" style="background-color: #ff7072;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-coral-red">المرجان الأحمر</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-navy">
                      <label class="form-option-label rounded-circle" for="color-navy"><span class="form-option-color rounded-circle" style="background-color: #696dc8;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-navy">القوات البحرية</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-charcoal">
                      <label class="form-option-label rounded-circle" for="color-charcoal"><span class="form-option-color rounded-circle" style="background-color: #4e4d4d;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-charcoal">فحم</label>
                    </div>
                    <div class="form-check form-option text-center mb-2 mx-1" style="width: 4rem;">
                      <input class="form-check-input" type="checkbox" id="color-sky-blue">
                      <label class="form-option-label rounded-circle" for="color-sky-blue"><span class="form-option-color rounded-circle" style="background-color: #8bcdf5;"></span></label>
                      <label class="d-block fs-xs text-muted mt-n1" for="color-sky-blue">السماء الزرقاء</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </aside>
        </div>
      </div>
    </main>
    <!-- Footer-->
<?php
include 'templates/footer-ar.php'
?>