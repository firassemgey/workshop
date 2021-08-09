<?php
include 'templates/header.php'

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
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Support tickets</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Support tickets</h1>
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
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="account-tickets.html"><i class="ci-help opacity-60 me-2"></i>Support tickets<span class="fs-sm text-muted ms-auto">1</span></a></li>
                </ul>
                <div class="bg-secondary px-4 py-3">
                  <h3 class="fs-sm mb-0 text-muted">Account settings</h3>
                </div>
                <ul class="list-unstyled mb-0">
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-profile.html"><i class="ci-user opacity-60 me-2"></i>Profile info</a></li>
                  <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-address.html"><i class="ci-location opacity-60 me-2"></i>Addresses</a></li>
                  <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-payment.html"><i class="ci-card opacity-60 me-2"></i>Payment methods</a></li>
                  <li class="d-lg-none border-top mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.html"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                </ul>
              </div>
            </div>
          </aside>
          <!-- Content  -->
          <section class="col-lg-8">
            <!-- Toolbar-->
            <div class="d-flex justify-content-between align-items-center pt-lg-2 pb-4 pb-lg-5 mb-lg-3">
              <div class="d-flex align-items-center">
                <label class="d-none d-lg-block fs-sm text-light text-nowrap opacity-75 me-2" for="ticket-sort">Sort tickets:</label>
                <label class="d-lg-none fs-sm text-nowrap opacity-75 me-2" for="ticket-sort">Sort tickets:</label>
                <select class="form-select" id="ticket-sort">
                  <option>All</option>
                  <option>Open</option>
                  <option>Closed</option>
                </select>
              </div><a class="btn btn-primary btn-sm d-none d-lg-inline-block" href="account-signin.html"><i class="ci-sign-out me-2"></i>Sign out</a>
            </div>
            <!-- Tickets list-->
            <div class="table-responsive fs-md mb-4">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>Ticket Subject</th>
                    <th>Date Submitted | Updated</th>
                    <th>Type</th>
                    <th>Priority</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My new ticket</a></td>
                    <td class="py-3">09/27/2019 | 09/30/2019</td>
                    <td class="py-3">Website problem</td>
                    <td class="py-3"><span class="badge bg-warning m-0">High</span></td>
                    <td class="py-3"><span class="badge bg-success m-0">Open</span></td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">Another ticket</a></td>
                    <td class="py-3">08/21/2019 | 08/23/2019</td>
                    <td class="py-3">Partner request</td>
                    <td class="py-3"><span class="badge bg-info m-0">Medium</span></td>
                    <td class="py-3"><span class="badge bg-secondary m-0">Closed</span></td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">Yet another ticket</a></td>
                    <td class="py-3">11/19/2018 | 11/20/2018</td>
                    <td class="py-3">Complaint</td>
                    <td class="py-3"><span class="badge bg-danger m-0">Urgent</span></td>
                    <td class="py-3"><span class="badge bg-secondary m-0">Closed</span></td>
                  </tr>
                  <tr>
                    <td class="py-3"><a class="nav-link-style fw-medium" href="account-single-ticket.html">My old ticket</a></td>
                    <td class="py-3">06/19/2018 | 06/20/2018</td>
                    <td class="py-3">Info inquiry</td>
                    <td class="py-3"><span class="badge bg-success m-0">Low</span></td>
                    <td class="py-3"><span class="badge bg-secondary m-0">Closed</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="text-end">
              <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#open-ticket">Submit new ticket</button>
            </div>
          </section>
        </div>
      </div>
    </main>
    <!-- Footer-->
  <?php

include 'templates/footer.php'
?>