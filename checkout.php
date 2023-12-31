<!-- Header Start -->
<?php include('header.php'); ?>
<!-- Header End -->


    <!-- Select Category Start -->
    <section>
        <div class="wrapper">
            <div class="row justify-content-center py-4 mx-0 gap-lg-0 gap-4">
                <div class="col-lg-8">
                    <div class="checkout-detail">
                        <div class="p-3">
                            <h5 class="text-center mb-0">Select a package that works for you</h5>
                        </div>
                        <div class="checkout-tabs">
                            <ul class="nav nav-pills mb-3" id="CheckOutTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="rounded-0 active" id="SingleAdsTab" data-bs-toggle="pill"
                                        data-bs-target="#SingleAds" type="button" role="tab" aria-controls="SingleAds"
                                        aria-selected="true">Single Ad</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="rounded-0" id="BulkAdsTab" data-bs-toggle="pill"
                                        data-bs-target="#BulkAds" type="button" role="tab" aria-controls="BulkAds"
                                        aria-selected="false">Bulk Ads</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="SingleAds" role="tabpanel"
                                    aria-labelledby="SingleAdsTab">
                                    <div class="premium-box d-flex align-items-start gap-3 bg-grey p-4 m-4">
                                        <div>
                                            <img src="assets/images/diamond-icon.svg" alt="image">
                                        </div>
                                        <div>
                                            <h6>You’re posting in a paid only category</h6>
                                            <p class="mb-0 small text-muted">In a hurry to sell your items? Connect with
                                                buyers
                                                even faster
                                                with our discounted
                                                packages for multiple ads!</p>
                                        </div>
                                    </div>
                                    <div class="mx-4 p-3 border">
                                        <div class="checkbox-div d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <input type="checkbox" class="check_scale me-3 cursor" id="standard">
                                                <label for="standard" class="fw-500">Standard</label>
                                            </div>
                                            <div class="text-red fw-bold">
                                                AED 39
                                            </div>
                                        </div>
                                    </div>
                                    <div class="featured-box m-4 p-4 border">
                                        <div class="featured-header">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-0">Featured Ad</h6>
                                                <span class="text-uppercase badge bg-primary">FEATURED</span>
                                            </div>
                                            <p class="small text-muted">Featured ads appear above the standard ads, and
                                                after the Premium Ads</p>
                                        </div>
                                        <div class="featured-body d-flex flex-column gap-3">
                                            <div
                                                class="checkbox-div border p-3 d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" class="check_scale me-3 cursor"
                                                        id="standard">
                                                    <label for="standard" class="fw-500">Turbo</label>
                                                </div>
                                                <div class="text-dark fw-bold">
                                                    +AED 40
                                                </div>
                                            </div>
                                            <div
                                                class="checkbox-div border p-3 d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" class="check_scale me-3 cursor"
                                                        id="standard">
                                                    <label for="standard" class="fw-500">Turbo Plus</label>
                                                </div>
                                                <div class="text-dark fw-bold">
                                                    +AED 30
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-4 px-5 pt-4 text-center">
                                        <h6 class="text-grey fw-bold text-center small">Prices are exclusive of VAT</h6>
                                        <p class="small mb-0 text-muted">The applicable products have been automatically
                                            selected based on the products applied on the previous listing</p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="BulkAds" role="tabpanel" aria-labelledby="BulkAdsTab">
                                    <div class="premium-box d-flex align-items-start gap-3 bg-grey p-4 m-4">
                                        <div>
                                            <img src="assets/images/diamond-icon.svg" alt="image">
                                        </div>
                                        <div>
                                            <h6>You’re posting in a paid only category</h6>
                                            <p class="mb-0 small text-muted">In a hurry to sell your items? Connect with
                                                buyers
                                                In a hurry to sell your items? Connect with buyers even faster with our
                                                discounted packages for multiple ads!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="featured-box m-4 p-4 border">
                                        <div class="featured-body d-flex flex-column gap-3">
                                            <div
                                                class="checkbox-div border p-3 d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" class="check_scale me-3 cursor"
                                                        id="standard">
                                                    <label for="standard" class="fw-500">3 Ads</label>
                                                </div>
                                                <div class="text-dark fw-bold">
                                                    AED 49
                                                </div>
                                            </div>
                                            <div
                                                class="checkbox-div border p-3 d-flex align-items-center justify-content-between">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <input type="checkbox" class="check_scale me-3 cursor"
                                                        id="standard">
                                                    <label for="standard" class="fw-500">5 Ads</label>
                                                </div>
                                                <div class="text-dark fw-bold">
                                                    AED 69
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-4 px-5 pt-4 text-center">
                                        <h6 class="text-grey fw-bold text-center small">These ad credits have to be used
                                            within 30 days from purchase date.</h6>
                                        <p class="small mb-0 text-muted">Prices are exclusive of VAT</p>
                                        <p class="small mb-0 text-muted mt-2">The applicable products have been
                                            automatically selected based on the products applied on the previous listing
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="summary-box border p-3">
                        <div class="border-bottom pb-2">
                            <h5 class="text-center">Order Summary</h5>
                        </div>
                        <p class="d-flex align-items-center justify-content-between py-3 mb-0"><span>Basic Ad</span>
                            <span>AED 39</span></p>
                        <div class="apply-box">
                            <input type="text" placeholder="Discount Code" class="form-control">
                            <button class="rounded-3 border bg-grey cursor" disabled>Apply</button>
                        </div>
                        <hr>
                        <p class="d-flex align-items-center justify-content-between py-2 mb-0"><span>Subtotal</span>
                            <span>AED 39.00</span></p>
                        <p class="d-flex align-items-center justify-content-between py-2 mb-0"><span>VAT 5%</span>
                            <span>AED 1.95</span></p>
                        <hr>
                        <p class="d-flex align-items-center justify-content-between py-2 mb-0 fw-bold">
                            <span>Total</span> <span>AED 40.95</span></p>
                        <button class="btn-theme btn-lg w-100 btn_pay">Pay AED 40.95</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Select Category End -->

<!-- Footer Start -->
<?php include('footer.php'); ?>
<!-- Footer End -->