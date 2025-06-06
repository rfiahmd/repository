@extends('layouts.template')

@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Verifikasi</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">
                <svg class="stroke-icon">
                  <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                </svg></a></li>
            <li class="breadcrumb-item active">Verifikasi</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid datatable-init">
    <div class="row">
      <div class="col-sm-12">
        <div class="card">
          <div class="card-header pb-0 card-no-border d-flex justify-content-between align-items-center">
            <h5>Data Verifikasi</h5>
          </div>

          {{-- Tabel --}}
          <div class="card-body">
            <div class="table-responsive custom-scrollbar">
              <table class="display table-striped border" id="basic-1">
                <thead>
                  <tr>
                    <th>No</th>
                    @if (auth()->user()->hasRole('admin'))
                      <th>Dosen</th>
                    @else
                      <th>Mahasiswa</th>
                    @endif
                    <th>Judul</th>
                    <th>Kata Kunci</th>
                    <th>Kategori</th>
                    <th>Fakultas</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dokumens as $index => $item)
                    <tr>
                      <td>{{ $index + 1 }}.</td>
                      <td>{{ $item->user->name ?? '-' }}</td>
                      <td>{{ $item->judul }}</td>
                      <td>{{ $item->kata_kunci }}</td>
                      <td>{{ $item->kategori->nama_kategori ?? '-' }}</td>
                      <td>{{ $item->fakultas->nama_fakultas ?? '-' }}</td>
                      <td>{{ $item->jurusan->nama_jurusan ?? '-' }}</td>
                      <td>
                        <ul class="action">
                          <li class="verify">
                            <form id="verify-form-{{ $item->id }}"
                              action="{{ auth()->user()->hasRole('admin')
                                  ? route('documents.verify.dosen', $item->id)
                                  : route('documents.verify.mahasiswa', $item->id) }}"
                              method="POST" style="display: inline;">
                              @csrf
                              @method('PUT')
                              <a href="javascript:void(0)" onclick="confirmVerify({{ $item->id }})">
                                <i class="fa-solid fa-check" style="color: green; cursor: pointer;"
                                  title="Verifikasi Dokumen"></i>
                              </a>
                            </form>
                          </li>
                        </ul>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
