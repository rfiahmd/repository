@extends('layouts.template')

@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Fakultas</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{ route('dashboard') }}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg>
              </a>
            </li>
            <li class="breadcrumb-item active">Fakultas</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid datatable-init">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
              <div class="card-header pb-0 card-no-border d-flex justify-content-between align-items-center ">
                <h5>Form Tambah</h5>
              </div>
              <div class="card-body">
               
                <form class="row g-3 needs-validation custom-input" novalidate="">
                    <div class="col-md-12 position-relative"><label class="form-label"
                        for="validationTooltip01">Judul</label><input class="form-control"
                        id="validationTooltip01" type="text" placeholder="Mark" required="">
                      <div class="valid-tooltip">Kata Kunci</div>
                    </div>
                    
                    <div class="col-md-4 position-relative">
                      <label class="form-label"
                        for="validationTooltip02">Tahun Publikasi</label>
                        <input class="form-control"
                        id="validationTooltip02" type="text" placeholder="Otto" required="">
                      <div class="valid-tooltip">File Path</div>
                    </div>
                    <div class="col-md-4 position-relative">
                      <label class="form-label" for="formFile">File Path</label>
                      <input class="form-control" id="formFile" type="file" required>
                    </div>
                    <div class="col-md-4 position-relative">
                      <label class="form-label" for="formFile">File Path</label>
                      <input class="form-control" id="formFile" type="file" required>
                    </div>
                    <div class="col-md-3 position-relative"><label class="form-label"
                        for="validationTooltip04">State</label><select class="form-select"
                        id="validationTooltip04" required="">
                        <option selected="" disabled="" value="">Choose...</option>
                        <option>U.S </option>
                        <option>Thailand </option>
                        <option>India </option>
                        <option>U.K</option>
                      </select>
                      <div class="invalid-tooltip">Please select a valid state.</div>
                    </div>
                    <div class="col-md-3 position-relative"><label class="form-label"
                        for="validationTooltip05">Zip</label><input class="form-control" id="validationTooltip05"
                        type="text" required="">
                      <div class="invalid-tooltip">Please provide a valid zip.</div>
                    </div>
                    <div class="col-12"><button class="btn btn-primary" type="submit">Submit form</button></div>
                  </form>

              </div>
            </div>
        </div>
    </div>
  </div>
@endsection
