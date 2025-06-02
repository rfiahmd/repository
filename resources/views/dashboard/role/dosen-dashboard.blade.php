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
              <h4><span class="counter" data-target="{{ $totalDokumenDiterima }}">0</span></h4>
              <span class="f-light">Total Dokumen Diterima</span>
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
              <h4><span class="counter" data-target="{{ $totalDokumenDitolak }}">0</span></h4>
              <span class="f-light">Total Dokumen Ditolak</span>
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
              <h4> <span class="counter" data-target="{{ $totalDokumenDipublikasi }}">0</span></h4><span class="f-light">Total
                Dokumen Dipublis</span>
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
                <h4 class="counter" data-target="{{ $totalMahasiswaBimbingan }}">0</h4><span class="f-light">Total Mahasiswa Bimbingan</span>
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
  <div class="card">
    <div class="card-header card-no-border">
      <div class="header-top">
        <h5>Dokumen Terbaru</h5>
      </div>
    </div>
    <div class="card-body px-0 pt-0 common-option">
      <div class="recent-table table-responsive currency-table recent-order-table custom-scrollbar">
        <table class="table" id="main-recent-order">
          <thead>
            <tr>
              {{-- <th></th> --}}
              <th>Product Name</th>
              <th>Customers</th>
              <th>Qty</th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              {{-- <td></td> --}}
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
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<div class="col-xxl-7 col-lg-8 ord-xl-6 ord-md-6 box-ord-6 box-col-8e">
  <div class="card">
    <div class="card-header card-no-border">
      <div class="header-top">
        <h5>Dokumen Terbaru</h5>
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
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
