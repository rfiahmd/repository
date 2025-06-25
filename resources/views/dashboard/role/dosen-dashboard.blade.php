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

