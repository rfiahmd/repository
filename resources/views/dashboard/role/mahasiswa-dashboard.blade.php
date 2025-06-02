<div class="col-xxl-4 col-xl-4 col-sm-12 box-col-4">
  <div class="row">
    <div class="col-xl-12">
      <div class="card widget-1">
        <div class="card-body">
          <div class="widget-content">
            <div class="widget-round secondary">
              <div class="bg-round">
                <svg>
                  <use href="{{ asset('') }}assets/svg/icon-sprite.svg#c-revenue"></use>
                </svg>
                <svg class="half-circle svg-fill">
                  <use href="{{ asset('') }}assets/svg/icon-sprite.svg#halfcircle"></use>
                </svg>
              </div>
            </div>
            <div>
              <h4><span class="counter" data-target="{{ $totalDokumen }}">0</span></h4>
              <span class="f-light">Total Dokumen</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-12">
      <div class="card widget-1">
        <div class="card-body">
          <div class="widget-content">
            <div class="widget-round success">
              <div class="bg-round">
                <svg>
                  <use href="{{ asset('') }}assets/svg/icon-sprite.svg#c-customer"></use>
                </svg>
                <svg class="half-circle svg-fill">
                  <use href="{{ asset('') }}assets/svg/icon-sprite.svg#halfcircle"></use>
                </svg>
              </div>
            </div>
            <div>
              <h4><span class="counter" data-target="{{ $totalDokumenDiterima }}">0</span></h4>
              <span class="f-light">Total Dokumen Diterima</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xxl-4 col-xl-4 col-sm-12 box-col-4">
  <div class="row">
    <div class="col-xl-12">
      <div class="card widget-1">
        <div class="card-body">
          <div class="widget-content">
            <div class="widget-round warning">
              <div class="bg-round"><svg>
                  <use href="{{ asset('') }}assets/svg/icon-sprite.svg#c-profit">
                  </use>
                </svg><svg class="half-circle svg-fill">
                  <use href="{{ asset('') }}assets/svg/icon-sprite.svg#halfcircle">
                  </use>
                </svg></div>
            </div>
            <div>
              <h4> <span class="counter" data-target="{{ $totalDokumenDitolak }}">0</span></h4><span class="f-light">Total
                Dokumen Ditolak</span>
            </div>
          </div>
          <div class="font-danger f-w-500"><i class="bookmark-search me-1" data-feather="trending-down"></i><span
              class="txt-danger">-20%</span></div>
        </div>
      </div>
      <div class="col-xl-12">
        <div class="card widget-1">
          <div class="card-body">
            <div class="widget-content">
              <div class="widget-round primary">
                <div class="bg-round"><svg class="fill-primary">
                    <use href="{{ asset('') }}assets/svg/icon-sprite.svg#c-invoice">
                    </use>
                  </svg><svg class="half-circle svg-fill">
                    <use href="{{ asset('') }}assets/svg/icon-sprite.svg#halfcircle">
                    </use>
                  </svg></div>
              </div>
              <div>
                <h4 class="counter" data-target="{{ $totalDokumenDipublikasi }}">0</h4><span class="f-light">Total Dokumen Dipublis</span>
              </div>
            </div>
            <div class="font-success f-w-500"><i class="bookmark-search me-1" data-feather="trending-up"></i><span
                class="txt-success">+50%</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-xl-5 col-md-6 ord-xl-4 ord-md-5 box-ord-4">
  <div class="card activity-log notification main-timeline">
    <div class="card-header card-no-border">
      <div class="header-top">
        <h5>Activity Log </h5>
        <div class="card-header-right-icon">
          <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="activityButton"
              type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                class="icon-more-alt"></i></button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="activityButton"><a class="dropdown-item"
                href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                class="dropdown-item" href="#!">Yesterday</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body pt-0 dark-timeline basic-timeline">
      <ul>
        <li class="d-flex">
          <div class="timeline-dot-primary"></div>
          <div class="w-100 ms-3">
            <div class="d-flex justify-content-between align-items-center">
              <p class="mb-0 f-16 f-w-500">Brooklyn Simmons<span class="f-w-400">(Commented:<a
                    href="#!">&nbsp;NFT App</a>)</span></p><span class="c-light">7:00 AM </span>
            </div>
            <p class="mb-0 f-light pb-1">This smithe design looks great...</p>
            <p class="date-content p-0">22 Feb 2024</p>
          </div>
        </li>
        <li class="d-flex">
          <div class="timeline-dot-secondary"></div>
          <div class="w-100 ms-3">
            <div class="d-flex justify-content-between align-items-center">
              <p class="mb-0 f-16 f-w-500">Leslie Alexander<span class="f-w-400">(Shared images:<a
                    href="#!">&nbsp; Barkha</a>)</span></p><span class="c-light">5:12 AM </span>
            </div>
            <p class="mb-0 f-light pb-1">Food Delivery App figma &amp; Ai...</p>
            <ul class="common-flex pb-1">
              <li><img class="img-fluid" src="{{ asset('') }}assets/images/dashboard/bg-1.png"
                  alt="background">
              </li>
              <li><img class="img-fluid" src="{{ asset('') }}assets/images/dashboard/bg-2.png"
                  alt="background">
              </li>
              <li><img class="img-fluid" src="{{ asset('') }}assets/images/dashboard/bg-3.png"
                  alt="background">
              </li>
            </ul>
            <p class="date-content p-0">15 Feb 2024</p>
          </div>
        </li>
        <li class="d-flex">
          <div class="timeline-dot-success"></div>
          <div class="w-100 ms-3">
            <div class="d-flex justify-content-between align-items-center">
              <p class="mb-0 f-16 f-w-500">Kristin Watson <span class="f-w-400">(Add new screen: <a
                    href="#!">&nbsp;Cuba Admin</a>)</span></p><span class="c-light">7:00 AM </span>
            </div>
            <p class="mb-0 f-light pb-1">Make sure your AI file is cloud storage...</p>
            <p class="date-content p-0">10 Jan 2024</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="col-xxl-7 col-lg-8 ord-xl-6 ord-md-6 box-ord-6 box-col-8e">
  <div class="card">
    <div class="card-header card-no-border">
      <div class="header-top">
        <h5>Recent Orders</h5>
        <div class="card-header-right-icon">
          <div class="dropdown icon-dropdown"><button class="btn dropdown-toggle" id="recentButton" type="button"
              data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="recentButton"><a class="dropdown-item"
                href="#!">Today</a><a class="dropdown-item" href="#!">Tomorrow</a><a
                class="dropdown-item" href="#!">Yesterday</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body px-0 pt-0 common-option">
      <div class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
        <table class="table" id="main-recent-order">
          <thead>
            <tr>
              <th></th>
              <th>Product Name</th>
              <th>Customers</th>
              <th>Qty</th>
              <th>Total Price</th>
              <th>Order Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/16.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Bag</a>
                    <p class="c-o-light">#452140 </p>
                  </div>
                </div>
              </td>
              <td>Jenny Wilson</td>
              <td>2 PCS</td>
              <td>$2,854</td>
              <td>16 Jan,2024</td>
              <td> <button class="btn button-light-success txt-success f-w-500">Delivered</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/25.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Sofa</a>
                    <p class="c-o-light">#844967</p>
                  </div>
                </div>
              </td>
              <td>Esther Howard</td>
              <td>1 PCS</td>
              <td>$9,943</td>
              <td>21 Feb,2024</td>
              <td> <button class="btn button-light-warning txt-warning f-w-500">In Progress</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/26.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Lamp</a>
                    <p class="c-o-light">#321489</p>
                  </div>
                </div>
              </td>
              <td>Darrell Steward</td>
              <td>1 PCS</td>
              <td>$8,195</td>
              <td>09 Mar,2024</td>
              <td> <button class="btn button-light-info txt-info f-w-500">Pending</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/24.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Watch</a>
                    <p class="c-o-light">#954687</p>
                  </div>
                </div>
              </td>
              <td>Dianne Russell</td>
              <td>3 PCS</td>
              <td>$1,706</td>
              <td>14 Apr,2024</td>
              <td> <button class="btn button-light-danger txt-danger f-w-500">Canceled</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/6.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Football</a>
                    <p class="c-o-light">#896748</p>
                  </div>
                </div>
              </td>
              <td>Darrell Steward</td>
              <td>2 PCS</td>
              <td>$7,580</td>
              <td>14 Apr,2024</td>
              <td> <button class="btn button-light-danger txt-danger f-w-500">Canceled</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/10.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">T-shirt</a>
                    <p class="c-o-light">#321489</p>
                  </div>
                </div>
              </td>
              <td>Darrell Steward</td>
              <td>1 PCS</td>
              <td>$8,195</td>
              <td>09 Mar,2024</td>
              <td> <button class="btn button-light-info txt-info f-w-500">Pending</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/11.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Sleeper</a>
                    <p class="c-o-light">#452140 </p>
                  </div>
                </div>
              </td>
              <td>Courtney Henry</td>
              <td>2 PCS</td>
              <td>$2,854</td>
              <td>16 Jan,2024</td>
              <td> <button class="btn button-light-success txt-success f-w-500">Delivered</button></td>
            </tr>
            <tr>
              <td></td>
              <td>
                <div class="d-flex align-items-center gap-2">
                  <div class="currency-icon warning"><img class="img-fluid"
                      src="{{ asset('') }}assets/images/dashboard-2/order/sub-product/14.png" alt="">
                  </div>
                  <div> <a class="f-14 mb-0 f-w-500 c-light" href="product-details.html">Shoes</a>
                    <p class="c-o-light">#844967</p>
                  </div>
                </div>
              </td>
              <td>Esther Howard</td>
              <td>1 PCS</td>
              <td>$9,943</td>
              <td>21 Feb,2024</td>
              <td> <button class="btn button-light-warning txt-warning f-w-500">In Progress</button></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
