@extends('layouts.template')

@section('content')
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6">
          <h3>Dokumen</h3>
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
            <li class="breadcrumb-item active">Dokumen</li>
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
            <h5>Data Dokumen</h5>

            @php
              $role = Auth::user()->getRoleNames()->first(); // ambil role pertama
              $createRoute = $role === 'mahasiswa' ? route('mahasiswa.documents.create') : route('documents.create'); // dosen (dan fallback lainnya)
              $editRoute = $role === 'mahasiswa' ? 'mahasiswa.documents.edit' : 'documents.edit';
              $isMahasiswa = auth()->user()->hasRole('mahasiswa');
              $routeName = $isMahasiswa ? 'mahasiswa.documents.destroy' : 'documents.destroy';
            @endphp

            @if ($role === 'mahasiswa' || ($role === 'dosen' && !request()->has('filter')))
              {{-- Tombol tambah dokumen --}}
              <a href="{{ $createRoute }}" class="btn btn-primary btn-sm">
                + Tambah Dokumen
              </a>
            @endif

          </div>
          {{-- Tabel --}}
          <div class="card-body">
            <div class="table-responsive custom-scrollbar">
              <table class="display table-striped border" id="basic-1">
                <thead>
                  <tr>
                    <th>No</th>
                    @if ($filter === 'bimbingan')
                      <th>Mahasiswa</th>
                    @elseif ($role === 'mahasiswa')
                      <th>Dosen Pembimbing</th>
                    @endif
                    <th>Judul</th>
                    <th>Tahun</th>
                    <th>Kategori</th>
                    {{-- <th>Fakultas</th> --}}
                    <th>Jurusan</th>
                    <th>Diunduh</th>
                    <th>Verifikasi</th>
                    <th>Publikasi</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dokumens as $index => $dokumen)
                    <tr>
                      <td>{{ $index + 1 }}.</td>
                      @if ($filter === 'bimbingan')
                        <td>{{ $dokumen->user->name ?? '-' }}</td>
                      @elseif ($role === 'mahasiswa')
                        <td>{{ $dokumen->dosen->name ?? '-' }}</td>
                      @endif
                      <td>@judul($dokumen->judul)</td>
                      <td>{{ $dokumen->tahun_publikasi }}</td>
                      <td>{{ $dokumen->kategori->nama_kategori ?? '-' }}</td>
                      {{-- <td>{{ $dokumen->fakultas->kode_fakultas ?? '-' }}</td> --}}
                      <td>{{ $dokumen->jurusan->nama_jurusan ?? '-' }}</td>
                      <td>{{ $dokumen->jumlah_diunduh }}x</td>
                      <td>
                        <span class="badge bg-{{ $dokumen->is_verified ? 'success' : 'warning' }}">
                          {{ $dokumen->is_verified ? 'Verif' : 'Belum' }}
                        </span>
                      </td>
                      <td>
                        <span class="badge bg-{{ $dokumen->is_published ? 'primary' : 'secondary' }}">
                          {{ $dokumen->is_published ? 'Publik' : 'Privat' }}
                        </span>
                      </td>
                      <td>
                        <ul class="action">
                          <li class="info" style="margin-right: 7px">
                            <button type="button" class="btn p-0 border-0 bg-transparent text-secondary">
                              <i class="fa-solid fa-circle-info"></i>
                            </button>
                          </li>
                          @can('verifikasi-dokumen')
                            <li class="unverify" style="margin-right: 7px">
                              <form id="unverify-form-{{ $dokumen }}"
                                action="{{ route('documents.unverify.dosen', $dokumen) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('PUT')
                                <button type="button" class="btn p-0 border-0 bg-transparent text-danger"
                                  onclick="confirmUnverify({{ $dokumen }})" title="Batalkan Verifikasi">
                                  <i class="fa-solid fa-xmark"></i>
                                </button>
                              </form>
                            </li>
                          @endcan
                          @if (!$dokumen->is_verified)
                            <li class="edit">
                              <a href="{{ route($editRoute, $dokumen) }}" class="text-warning">
                                <i class="fa-regular fa-pen-to-square"></i>
                              </a>
                            </li>
                            <li class="delete">
                              <form action="{{ route($routeName, $dokumen) }}" method="POST"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" onclick="confirmDelete(this)"
                                  class="btn p-0 border-0 bg-transparent text-danger">
                                  <i class="fa-solid fa-trash-can"></i>
                                </button>
                              </form>
                            </li>
                          @endif
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
