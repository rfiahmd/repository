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
                          <li class="info" style="margin-right: 7px">
                            <button type="button" class="btn p-0 border-0 bg-transparent text-secondary"
                              data-bs-toggle="modal" data-bs-target="#modalDetailDokumen{{ $index }}">
                              <i class="fa-solid fa-circle-info"></i>
                            </button>
                          </li>
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
                    <!-- Modal Detail Dokumen -->
                    <div class="modal fade" id="modalDetailDokumen{{ $index }}" tabindex="-1"
                      aria-labelledby="modalLabel{{ $index }}" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header bg-primary text-white">
                            <h5 class="modal-title" id="modalLabel{{ $index }}">Detail Dokumen</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                              aria-label="Tutup"></button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              {{-- Thumbnail --}}
                              <div class="col-md-4 mb-3 text-center">
                                @if ($item->thumbnail_path)
                                  <img src="{{ asset('storage/dokumen/thumbnail/' . $item->thumbnail_path) }}"
                                    class="img-fluid rounded shadow" alt="Thumbnail">
                                @else
                                  <img src="{{ asset('images/default_thumbnail.png') }}" class="img-fluid rounded shadow"
                                    alt="No Thumbnail">
                                @endif
                              </div>

                              {{-- Informasi Dokumen --}}
                              <div class="col-md-8">
                                <h5>{{ $item->judul }}</h5>
                                <p><strong>Kategori:</strong> {{ $item->kategori->nama_kategori ?? '-' }}</p>
                                <p><strong>Tahun Publikasi:</strong> {{ $item->tahun_publikasi }}</p>
                                <p><strong>Kata Kunci:</strong> {{ $item->kata_kunci }}</p>
                                <p><strong>Fakultas:</strong> {{ $item->fakultas->nama_fakultas ?? '-' }}</p>
                                <p><strong>Jurusan:</strong> {{ $item->jurusan->nama_jurusan ?? '-' }}</p>
                                @if ($item->dosen)
                                  <p><strong>Dosen Pembimbing:</strong> {{ $item->dosen->name }}</p>
                                @endif
                                <hr>
                                <p><strong>Abstrak:</strong></p>
                                <p>{{ $item->abstrak }}</p>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <a href="{{ route('auth.dokumen.download', $item) }}" class="btn btn-success">
                              <i class="fa-solid fa-download"></i> Unduh Dokumen
                            </a>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                          </div>
                        </div>
                      </div>
                    </div>
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
