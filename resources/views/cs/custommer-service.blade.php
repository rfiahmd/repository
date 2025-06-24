@extends('layouts.template')

@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Custommer Service</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg></a></li>
            <li class="breadcrumb-item active">Custommer Service</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid main-scope-project datatable-init">
    <div class="row scope-bottom-wrapper">
      <div class="col-xxl-2 recent-xl-23 col-xl-3 box-col-3">
        <div class="card">
          <div class="card-body">
            <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="overview-project-tab" data-bs-toggle="pill" href="#dosen" role="tab"
                  aria-controls="overview-project" aria-selected="false">
                  <div class="absolute-border"></div>
                  <div class="nav-rounded">
                    <div class="product-icons">
                      <i style="margin-left: 10px" class="fa-solid fa-chalkboard-user"></i> <!-- Ikon untuk Dosen -->
                    </div>
                  </div>
                  <div class="product-tab-content">
                    <h6>Dosen</h6>
                  </div>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" id="target-project-tab" data-bs-toggle="pill" href="#mahasiswa" role="tab"
                  aria-controls="target-project" aria-selected="false">
                  <div class="absolute-border"></div>
                  <div class="nav-rounded">
                    <div class="product-icons">
                      <i style="margin-left: 10px" class="fa-solid fa-user-graduate"></i> <!-- Ikon untuk Mahasiswa -->
                    </div>
                  </div>
                  <div class="product-tab-content">
                    <h6>Mahasiswa</h6>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-xxl-10 recent-xl-77 col-xl-9 box-col-9">
        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="add-product-pills-tabContent">
              <div class="tab-pane fade show active" id="dosen" role="tabpanel"
                aria-labelledby="overview-project-tab">
                <div class="row">
                  <div class="col-xxl-12 box-col-12">
                    <div class="card">
                      <div class="card-header pb-0 card-no-border d-flex justify-content-between align-items-center">
                        <h5>Data Dosen</h5>
                        <button class="btn btn-primary btn-sm open-create" data-role="dosen" data-bs-toggle="offcanvas"
                          data-bs-target="#offcanvasCreate">
                          + Tambah Dosen
                        </button>
                      </div>

                      {{-- Tabel Dosen --}}
                      <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                          <table class="display table-striped border" id="table-dosen">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($dosen as $index => $item)
                                <tr>
                                  <td>{{ $index + 1 }}.</td>
                                  <td>{{ $item->nip_nim }}</td>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->username }}</td>
                                  <td>{{ $item->email }}</td>
                                  <td>
                                    <ul class="action">
                                      <li class="edit">
                                        <a type="button" data-bs-toggle="offcanvas"
                                          data-bs-target="#editUser{{ $item->id }}">
                                          <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                      </li>
                                      <li class="delete">
                                        <form action="{{ route('custommer-service.destroy', $item->id) }}" method="POST"
                                          style="display: inline;">
                                          @csrf
                                          @method('DELETE')
                                          <a type="button" onclick="confirmDelete(this)">
                                            <i class="fa-solid fa-trash-can"></i>
                                          </a>
                                        </form>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                              @empty
                                <tr>
                                  <td colspan="6" class="text-center">Data dosen tidak tersedia.</td>
                                </tr>
                              @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="mahasiswa" role="tabpanel" aria-labelledby="target-project-tab">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header pb-0 card-no-border d-flex justify-content-between align-items-center">
                        <h5>Data Mahasiswa</h5>
                        <button class="btn btn-primary btn-sm open-create" data-role="mahasiswa"
                          data-bs-toggle="offcanvas" data-bs-target="#offcanvasCreate">
                          + Tambah Mahasiswa
                        </button>
                      </div>

                      {{-- Tabel Mahasiswa --}}
                      <div class="card-body">
                        <div class="table-responsive custom-scrollbar">
                          <table class="display table-striped border" id="table-mahasiswa">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>Aksi</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($mahasiswa as $index => $item)
                                <tr>
                                  <td>{{ $index + 1 }}.</td>
                                  <td>{{ $item->name }}</td>
                                  <td>{{ $item->nip_nim }}</td>
                                  <td>
                                    <ul class="action">
                                      <li class="edit">
                                        <a type="button" data-bs-toggle="offcanvas"
                                          data-bs-target="#editUser{{ $item->id }}">
                                          <i class="fa-regular fa-pen-to-square"></i>
                                        </a>
                                      </li>
                                      <li class="delete">
                                        <form action="{{ route('custommer-service.destroy', $item->id) }}"
                                          method="POST" style="display: inline;">
                                          @csrf
                                          @method('DELETE')
                                          <a type="button" onclick="confirmDelete(this)">
                                            <i class="fa-solid fa-trash-can"></i>
                                          </a>
                                        </form>
                                      </li>
                                    </ul>
                                  </td>
                                </tr>
                              @empty
                                <tr>
                                  <td colspan="4" class="text-center">Data mahasiswa tidak tersedia.</td>
                                </tr>
                              @endforelse
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Offcanvas Add Section --}}
  <div class="card-body common-flex common-offcanvas">
    <div class="offcanvas offcanvas-end" id="offcanvasCreate" tabindex="-1" aria-labelledby="offcanvasRightLabel">
      <div class="offcanvas-header pb-0">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Form Tambah</h5>
        <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body custom-input custom-scrollbar">
        <form action="{{ route('custommer-service.store') }}" method="POST" class="needs-validation" novalidate>
          @csrf

          {{-- Akan diisi dinamis lewat JS --}}
          <input type="hidden" name="role" id="inputRole">

          <div class="modal-body">
            <div class="mb-3">
              <label for="nip_nim" class="form-label">NIP / NIM <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="nip_nim" required>
              <div class="invalid-feedback">NIP / NIM harus diisi</div>
            </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" required>
              <div class="invalid-feedback">Nama harus diisi</div>
            </div>
            <div class="mb-3">
              <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="username" required>
              <div class="invalid-feedback">Username harus diisi</div>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email" required>
              <div class="invalid-feedback">Email harus valid</div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
              <input type="password" class="form-control" name="password" required>
              <div class="invalid-feedback">Password harus diisi</div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="offcanvas">Tutup</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  @foreach ($all as $u)
    <div class="card-body common-flex common-offcanvas">
      <div class="offcanvas offcanvas-end" id="editUser{{ $u->id }}" tabindex="-1"
        aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header pb-0">
          <h5 class="offcanvas-title" id="offcanvasRightLabel">Form Edit</h5>
          <button class="btn-close" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body custom-input custom-scrollbar">
          <form action="{{ route('custommer-service.update', $u->id) }}" method="POST" class="needs-validation"
            novalidate>
            @csrf
            @method('PUT')

            <div class="modal-body">
              <div class="mb-3">
                <label class="form-label">NIP / NIM <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="nip_nim" value="{{ old('nip_nim', $u->nip_nim) }}"
                  required>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $u->name) }}"
                  required>
              </div>
              <div class="mb-3">
                <label class="form-label">Username <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username"
                  value="{{ old('username', $u->username) }}" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" value="{{ old('email', $u->email) }}"
                  required>
              </div>
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="offcanvas">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  @endforeach

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const roleInput = document.getElementById('inputRole');
      const openButtons = document.querySelectorAll('.open-create');

      openButtons.forEach(button => {
        button.addEventListener('click', function() {
          const role = this.getAttribute('data-role');
          roleInput.value = role;
        });
      });
    });
  </script>
@endsection
