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
                <li class="breadcrumb-item text-nowrap"><a href="#">Account</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Payment methods</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">My payment methods</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <!-- Sidebar-->
          <aside class="col-lg-4 pt-4 pt-lg-0 pe-xl-5">
            <div class="bg-white rounded-3 shadow-lg pt-1 mb-5 mb-lg-0">
              <div class="d-md-flex justify-content-between align-items-center text-center text-md-start p-4">
                <div class="d-md-flex align-items-center">
                  <div class="img-thumbnail rounded-circle position-relative flex-shrink-0 mx-auto mb-2 mx-md-0 mb-md-0" style="width: 6.375rem;"><span class="badge bg-warning position-absolute end-0 mt-n2" data-bs-toggle="tooltip" title="Reward points">384</span><img class="rounded-circle" src="img/shop/account/avatar.jpg" alt="Susan Gardner"></div>
                  <div class="ps-md-3">
                    <h3 class="fs-base mb-0">Susan Gardner</h3><span class="text-accent fs-sm">s.gardner@example.com</span>
                  </div>
                </div><a class="btn btn-primary d-lg-none mb-2 mt-3 mt-md-0" href="#account-menu" data-bs-toggle="collapse" aria-expanded="false"><i class="ci-menu me-2"></i>Account menu</a>
              </div>
              <div class="d-lg-block collapse" id="account-menu">
                <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">Dashboard</h3>
                </div>
                <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-orders.html"><i class="ci-bag opacity-60 me-2"></i>Orders<span class="fs-sm text-muted ms-auto">1</span></a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-wishlist.html"><i class="ci-heart opacity-60 me-2"></i>Wishlist<span class="fs-sm text-muted ms-auto">3</span></a></li>
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-tickets.html"><i class="ci-help opacity-60 me-2"></i>Support tickets<span class="fs-sm text-muted ms-auto">1</span></a></li>
                </ul>
                <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">Account settings</h3>
                </div>
                <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-profile.html"><i class="ci-user opacity-60 me-2"></i>Profile info</a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-address.html"><i class="ci-location opacity-60 me-2"></i>Addresses</a></li>
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="account-payment.html"><i class="ci-card opacity-60 me-2"></i>Payment methods</a></li>
                  <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                </ul>
              </div>
            </div>
          </aside>
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-none d-lg-flex justify-content-between align-items-center pt-lg-3 pb-4 pb-lg-5 mb-lg-3">
              <h6 class="fs-base text-light mb-0">Primary payment method is used by default</h6><a class="btn btn-primary btn-sm" href="account-signin.html"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
            <!-- Payment methods list-->
            <div class="table-responsive fs-md mb-4">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>Your credit / debit cards</th>
                    <th>Name on card</th>
                    <th>Expires on</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-3 align-middle">
                      <div class="d-flex align-items-center"><img src="img/card-visa.png" width="39" alt="Visa">
                        <div class="ps-2"><span class="fw-medium text-heading me-1">Visa</span>ending in 4999<span class="align-middle badge bg-info ms-2">Primary</span></div>
                      </div>
                    </td>
                    <td class="py-3 align-middle">Susan Gardner</td>
                    <td class="py-3 align-middle">08 / 2019</td>
                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div></a></td>
                  </tr>
                  <tr>
                    <td class="py-3 align-middle">
                      <div class="d-flex align-items-center"><img src="img/card-master.png" width="39" alt="MesterCard">
                        <div class="ps-2"><span class="fw-medium text-heading me-1">MasterCard</span>ending in 0015</div>
                      </div>
                    </td>
                    <td class="py-3 align-middle">Susan Gardner</td>
                    <td class="py-3 align-middle">11 / 2021</td>
                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div></a></td>
                  </tr>
                  <tr>
                    <td class="py-3 align-middle">
                      <div class="d-flex align-items-center"><img src="img/card-paypal.png" width="39" alt="PayPal">
                        <div class="ps-2"><span class="fw-medium text-heading me-1">PayPal</span>s.gardner@example.com</div>
                      </div>
                    </td>
                    <td class="py-3 align-middle">&mdash;</td>
                    <td class="py-3 align-middle">&mdash;</td>
                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div></a></td>
                  </tr>
                  <tr>
                    <td class="py-3 align-middle">
                      <div class="d-flex align-items-center"><img src="img/card-visa.png" width="39" alt="Visa">
                        <div class="ps-2"><span class="fw-medium text-heading me-1">Visa</span>ending in 6073</div>
                      </div>
                    </td>
                    <td class="py-3 align-middle">Susan Gardner</td>
                    <td class="py-3 align-middle">09 / 2021</td>
                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div></a></td>
                  </tr>
                  <tr>
                    <td class="py-3 align-middle">
                      <div class="d-flex align-items-center"><img src="img/card-visa.png" width="39" alt="Visa">
                        <div class="ps-2"><span class="fw-medium text-heading me-1">Visa</span>ending in 9791</div>
                      </div>
                    </td>
                    <td class="py-3 align-middle">Susan Gardner</td>
                    <td class="py-3 align-middle">05 / 2021</td>
                    <td class="py-3 align-middle"><a class="nav-link-style me-2" href="#" data-bs-toggle="tooltip" title="Edit"><i class="ci-edit"></i></a><a class="nav-link-style text-danger" href="#" data-bs-toggle="tooltip" title="Remove">
                        <div class="ci-trash"></div></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-sm-end"><a class="btn btn-primary" href="#add-payment" data-bs-toggle="modal">Add payment method</a></div>
          </section>
        </div>
      </div>
    </main>
    <!-- Footer-->
  <?php
include 'templates/footer-ar.php'
?>