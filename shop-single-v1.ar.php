<?php
include 'templates/header-ar.php'
?>      <!-- Page Title-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>الرئيسية</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">متجر</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">صفحة المنتج الإصدار 1</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">سويت شيرت رياضي بغطاء للرأس</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Gallery + details-->
        <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5">
          <div class="px-lg-3">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pe-lg-0 pt-lg-4">
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
                  <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item video-item" href="https://www.youtube.com/watch?v=1vrXpMLLK14">
                      <div class="product-gallery-thumblist-item-text"><i class="ci-video"></i>فيديو</div></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0">
                <div class="product-details ms-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 المراجعات</span></a>
                    <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button>
                  </div>
                  <div class="mb-3"><span class="h3 fw-normal text-accent me-1">$18.<small>99</small></span>
                    <del class="text-muted fs-lg me-3">$25.<small>00</small></del><span class="badge bg-danger badge-shadow align-middle mt-n2">تخفيض السعر</span>
                  </div>
                  <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">اللون:</span><span class="text-muted" id="colorOption">أحمر / أزرق داكن / أبيض</span></div>
                  <div class="position-relative me-n4 mb-3">
                    <div class="form-check form-option form-check-inline mb-2">
                      <input class="form-check-input" type="radio" name="color" id="color1" data-bs-label="colorOption" value="Red/Dark blue/White" checked>
                      <label class="form-option-label rounded-circle" for="color1"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                    </div>
                    <div class="form-check form-option form-check-inline mb-2">
                      <input class="form-check-input" type="radio" name="color" id="color2" data-bs-label="colorOption" value="Beige/White/Dark grey">
                      <label class="form-option-label rounded-circle" for="color2"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                    </div>
                    <div class="form-check form-option form-check-inline mb-2">
                      <input class="form-check-input" type="radio" name="color" id="color3" data-bs-label="colorOption" value="Dark grey/White/Orange">
                      <label class="form-option-label rounded-circle" for="color3"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                    </div>
                    <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>المنتج متاح</div>
                  </div>
                  <form class="mb-grid-gutter" method="post">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center pb-1">
                        <label class="form-label" for="product-size">القياس:</label><a class="nav-link-style fs-sm" href="#size-chart" data-bs-toggle="modal"><i class="ci-ruler lead align-middle me-1 mt-n1"></i>دليل المقاسات</a>
                      </div>
                      <select class="form-select" required id="product-size">
                        <option value="">أختر الحجم</option>
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
                  <!-- Product panels-->
                  <div class="accordion mb-4" id="productPanels">
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button" href="#productInfo" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Product info</a></h3>
                      <div class="accordion-collapse collapse show" id="productInfo" data-bs-parent="#productPanels">
                        <div class="accordion-body">
                          <h6 class="fs-sm mb-2">تكوين</h6>
                          <ul class="fs-sm ps-4">
                            <li>ضلع مرن: قطن 95٪، إيلاستين 5٪</li>
                            <li>البطانة: قطن 100٪</li>
                            <li>قطن 80٪ ، بوليستر 20٪</li>
                          </ul>
                          <h6 class="fs-sm mb-2">Art. No.</h6>
                          <ul class="fs-sm ps-4 mb-0">
                            <li>183260098</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>خيارات الشحن</a></h3>
                      <div class="accordion-collapse collapse" id="shippingOptions" data-bs-parent="#productPanels">
                        <div class="accordion-body fs-sm">
                          <div class="d-flex justify-content-between border-bottom pb-2">
                            <div>
                              <div class="fw-semibold text-dark">ساعي</div>
                              <div class="fs-sm text-muted">2 - 4 ايام</div>
                            </div>
                            <div>$26.50</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">الشحن المحلي</div>
                              <div class="fs-sm text-muted">تصل إلى أسبوع واحد</div>
                            </div>
                            <div>$10.00</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">معدل</div>
                              <div class="fs-sm text-muted">5 - 7 ايام</div>
                            </div>
                            <div>$33.85</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">UPS الشحن الأرضي</div>
                              <div class="fs-sm text-muted">4 - 6 days</div>
                            </div>
                            <div>$18.00</div>
                          </div>
                          <div class="d-flex justify-content-between pt-2">
                            <div>
                              <div class="fw-semibold text-dark">الاستلام المحلي من المتجر</div>
                              <div class="fs-sm text-muted">&mdash;</div>
                            </div>
                            <div>$0.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#localStore" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="ci-location text-muted fs-lg align-middle mt-n1 me-2"></i>ابحث في المتجر المحلي</a></h3>
                      <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                        <div class="accordion-body">
                          <select class="form-select">
                            <option value>اختر بلدك</option>
                            <option value="Argentina">الأرجنتين</option>
                            <option value="Belgium">بلجيكا</option>
                            <option value="France">فرنسا</option>
                            <option value="Germany">ألمانيا</option>
                            <option value="Spain">إسبانيا</option>
                            <option value="UK">المملكة المتحدة</option>
                            <option value="USA">الولايات المتحدة الأمريكية</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Sharing-->
                  <label class="form-label d-inline-block align-middle my-2 me-3">يشارك:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="ci-facebook"></i>Facebook</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product description section 1-->
        <div class="row align-items-center py-md-3">
          <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2"><img class="d-block rounded-3" src="img/shop/single/prod-img.jpg" alt="Image"></div>
          <div class="col-lg-4 col-md-6 offset-lg-1 py-4 order-md-1">
            <h2 class="h3 mb-4 pb-2">مواد عالية الجودة</h2>
            <h6 class="fs-base mb-3">مزيج من القطن الناعم</h6>
            <p class="fs-sm text-muted pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.</p>
            <h6 class="fs-base mb-3">تعليمات الغسيل</h6>
            <ul class="nav nav-tabs mb-3" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#wash" data-bs-toggle="tab" role="tab"><i class="ci-wash fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#bleach" data-bs-toggle="tab" role="tab"><i class="ci-bleach fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#hand-wash" data-bs-toggle="tab" role="tab"><i class="ci-hand-wash fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#ironing" data-bs-toggle="tab" role="tab"><i class="ci-ironing fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#dry-clean" data-bs-toggle="tab" role="tab"><i class="ci-dry-clean fs-xl"></i></a></li>
            </ul>
            <div class="tab-content text-muted fs-sm">
              <div class="tab-pane fade show active" id="wash" role="tabpanel">30 درجة غسيل آلي معتدل</div>
              <div class="tab-pane fade" id="bleach" role="tabpanel">لا تستخدم أي مبيض</div>
              <div class="tab-pane fade" id="hand-wash" role="tabpanel">غسيل يدوي عادي (30 درجة)</div>
              <div class="tab-pane fade" id="ironing" role="tabpanel">كي بدرجة حرارة منخفضة</div>
              <div class="tab-pane fade" id="dry-clean" role="tabpanel">لا تستخدم التنظيف الجاف</div>
            </div>
          </div>
        </div>
        <!-- Product description section 2-->
        <div class="row align-items-center py-4 py-lg-5">
          <div class="col-lg-5 col-md-6 offset-lg-1"><img class="d-block rounded-3" src="img/shop/single/prod-map.png" alt="Map"></div>
          <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
            <h2 class="h3 mb-4 pb-2">اين صنع؟</h2>
            <h6 class="fs-base mb-3">شركة تصنيع الملابس المحدودة.</h6>
            <p class="fs-sm text-muted pb-2">​برج سام ، 6 شارع رقم 32 ، دكا 1875 ، بنغلاديش</p>
            <div class="d-flex mb-2">
              <div class="me-4 pe-2 text-center">
                <h4 class="h2 text-accent mb-1">3258</h4>
                <p>Workers</p>
              </div>
              <div class="me-4 pe-2 text-center">
                <h4 class="h2 text-accent mb-1">43%</h4>
                <p>Female</p>
              </div>
              <div class="text-center">
                <h4 class="h2 text-accent mb-1">57%</h4>
                <p>Male</p>
              </div>
            </div>
            <h6 class="fs-base mb-3">معلومات المصنع</h6>
            <p class="fs-sm text-muted pb-md-2">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
      </div>
      <!-- Reviews-->
      <div class="border-top border-bottom my-lg-3 py-5">
        <div class="container pt-md-2" id="reviews">
          <div class="row pb-3">
            <div class="col-lg-4 col-md-5">
              <h2 class="h3 mb-4">74 Reviews</h2>
              <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 التصنيف العام</span>
              <p class="pt-3 fs-sm text-muted">58 من 74 (77٪)<br>أوصى العملاء بهذا المنتج</p>
            </div>
            <div class="col-lg-8 col-md-7">
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">43</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">16</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">9</span>
              </div>
              <div class="d-flex align-items-center mb-2">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">4</span>
              </div>
              <div class="d-flex align-items-center">
                <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                <div class="w-100">
                  <div class="progress" style="height: 4px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div><span class="text-muted ms-3">2</span>
              </div>
            </div>
          </div>
          <hr class="mt-4 mb-3">
          <div class="row pt-4">
            <!-- Reviews list-->
            <div class="col-md-7">
              <div class="d-flex justify-content-end pb-4">
                <div class="d-flex align-items-center flex-nowrap">
                  <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">ترتيب حسب:</label>
                  <select class="form-select form-select-sm" id="sort-reviews">
                    <option>الأحدث</option>
                    <option>الأقدم</option>
                    <option>شائع</option>
                    <option>تقييم عالي</option>
                    <option>تصنيف منخفض</option>
                  </select>
                </div>
              </div>
              <!-- Review-->
              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/01.jpg" width="50" alt="Rafael Marquez">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">رافائيل ماركيز</h6><span class="fs-ms text-muted">28 يونيو 2019</span>
                    </div>
                  </div>
                  <div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                    <div class="fs-ms text-muted">وجد 83٪ من المستخدمين هذه المراجعة مفيدة</div>
                  </div>
                </div>
                <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                <ul class="list-unstyled fs-ms pt-1">
                  <li class="mb-1"><span class="fw-medium">الايجابيات:&nbsp;</span>نتيجة كبيرة ، تسلسل فولي ، زماني</li>
                  <li class="mb-1"><span class="fw-medium">سلبيات:&nbsp;</span>مهندس معماري ، quis autem</li>
                </ul>
                <div class="text-nowrap">
                  <button class="btn-like" type="button">15</button>
                  <button class="btn-dislike" type="button">3</button>
                </div>
              </div>
              <!-- Review-->
              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/02.jpg" width="50" alt="Barbara Palson">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">باربرا بالسون</h6><span class="fs-ms text-muted">17 مايو 2019</span>
                    </div>
                  </div>
                  <div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                    </div>
                    <div class="fs-ms text-muted">وجد 99٪ من المستخدمين هذه المراجعة مفيدة</div>
                  </div>
                </div>
                <p class="fs-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <ul class="list-unstyled fs-ms pt-1">
                  <li class="mb-1"><span class="fw-medium">الايجابيات:&nbsp;</span>نتيجة كبيرة ، تسلسل فولي ، زماني</li>
                  <li class="mb-1"><span class="fw-medium">سلبيات:&nbsp;</span>مهندس معماري ، quis autem</li>
                </ul>
                <div class="text-nowrap">
                  <button class="btn-like" type="button">34</button>
                  <button class="btn-dislike" type="button">1</button>
                </div>
              </div>
              <!-- Review-->
              <div class="product-review pb-4 mb-4 border-bottom">
                <div class="d-flex mb-3">
                  <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/03.jpg" width="50" alt="Daniel Adams">
                    <div class="ps-3">
                      <h6 class="fs-sm mb-0">دانيال ادامز</h6><span class="fs-ms text-muted">8 مايو 2019</span>
                    </div>
                  </div>
                  <div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                    <div class="fs-ms text-muted">وجد 75٪ من المستخدمين هذه المراجعة مفيدة</div>
                  </div>
                </div>
                <p class="fs-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                <ul class="list-unstyled fs-ms pt-1">
                  <li class="mb-1"><span class="fw-medium">الايجابيات:&nbsp;</span>نتيجة كبيرة ، تسلسل فولي</li>
                  <li class="mb-1"><span class="fw-medium">سلبيات:&nbsp;</span>مهندس معماري إيقاعات ، quis autem ، تسلسل voluptatem</li>
                </ul>
                <div class="text-nowrap">
                  <button class="btn-like" type="button">26</button>
                  <button class="btn-dislike" type="button">9</button>
                </div>
              </div>
              <div class="text-center">
                <button class="btn btn-outline-accent" type="button"><i class="ci-reload me-2"></i>تحميل المزيد من المراجعات</button>
              </div>
            </div>
            <!-- Leave review form-->
            <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
              <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                <h3 class="h4 pb-2">أكتب مراجعة</h3>
                <form class="needs-validation" method="post" novalidate>
                  <div class="mb-3">
                    <label class="form-label" for="review-name">اسمك<span class="text-danger">*</span></label>
                    <input class="form-control" type="text" required id="review-name">
                    <div class="invalid-feedback">يرجى إدخال اسمك!</div><small class="form-text text-muted">سيتم عرضها على التعليق.</small>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="review-email">بريدك الالكتروني<span class="text-danger">*</span></label>
                    <input class="form-control" type="email" required id="review-email">
                    <div class="invalid-feedback">يرجى تقديم عنوان بريد إلكتروني صالح!</div><small class="form-text text-muted">المصادقة فقط - لن نرسل لك بريدًا عشوائيًا.</small>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="review-rating">تقييم<span class="text-danger">*</span></label>
                    <select class="form-select" required id="review-rating">
                      <option value="">اختر التصنيف</option>
                      <option value="5">5 النجوم</option>
                      <option value="4">4 النجوم</option>
                      <option value="3">3 النجوم</option>
                      <option value="2">2 النجوم</option>
                      <option value="1">1 نجمة</option>
                    </select>
                    <div class="invalid-feedback">الرجاء اختيار التصنيف!</div>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="review-text">تقييم<span class="text-danger">*</span></label>
                    <textarea class="form-control" rows="6" required id="review-text"></textarea>
                    <div class="invalid-feedback">الرجاء كتابة مراجعة!</div><small class="form-text text-muted">يجب ألا يقل تعليقك عن 50 حرفًا.</small>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="review-pros">الايجابيات</label>
                    <textarea class="form-control" rows="2" placeholder="مفصولة بفواصل" id="review-pros"></textarea>
                  </div>
                  <div class="mb-3 mb-4">
                    <label class="form-label" for="review-cons">سلبيات</label>
                    <textarea class="form-control" rows="2" placeholder="مفصولة بفواصل" id="review-cons"></textarea>
                  </div>
                  <button class="btn btn-primary btn-shadow d-block w-100" type="submit">إرسال مراجعة</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product carousel (Style with)-->
      <div class="container pt-5">
        <h2 class="h3 text-center pb-4">أسلوب مع</h2>
        <div class="tns-carousel tns-controls-static tns-controls-outside">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/14.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">جينز رجالي</a>
                  <h3 class="product-title fs-sm"><a href="#">بنطال جينز بقصة ضيقة</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static"><span class="badge bg-danger badge-shadow">Sale</span>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/17.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">قمصان رجالية</a>
                  <h3 class="product-title fs-sm"><a href="#">تي شيرت قطني بقصة عادية</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$9.<small>50</small></span>
                      <del class="fs-sm text-muted">$11.<small>50</small></del>
                    </div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/18.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">احذية رجالية</a>
                  <h3 class="product-title fs-sm"><a href="#">حقائب جلدية للرجال</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$64.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/19.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">قمصان رجالية</a>
                  <h3 class="product-title fs-sm"><a href="#">3 مجموعة ألوان من القمصان</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$27.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/13.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">قمصان رجالية</a>
                  <h3 class="product-title fs-sm"><a href="#">قطن بولو قصة عادية</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$13.<small>50</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product carousel (You may also like)-->
      <div class="container py-5 my-md-3">
        <h2 class="h3 text-center pb-4">ربما يعجبك أيضا</h2>
        <div class="tns-carousel tns-controls-static tns-controls-outside">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">هودي الرجال</a>
                  <h3 class="product-title fs-sm"><a href="#">مقنعين كتلة اللون Top</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/21.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">هودي الرجال</a>
                  <h3 class="product-title fs-sm"><a href="#">بلوزة بغطاء للرأس بلون كتلة</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$26.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/22.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">هودي الرجال</a>
                  <h3 class="product-title fs-sm"><a href="#">بلوزة بغطاء للرأس بلون كتلة</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$24.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/23.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">هودي الرجال</a>
                  <h3 class="product-title fs-sm"><a href="#">بلوزة بغطاء للرأس بلون كتلة</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$24.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="أضف إلى قائمة الامنيات"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/24.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">هودي الرجال</a>
                  <h3 class="product-title fs-sm"><a href="#">بلوزة بغطاء للرأس بلون كتلة</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$25.<small>00</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <?php
include 'templates/footer-ar.php'
?>