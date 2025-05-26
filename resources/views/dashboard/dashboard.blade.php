@extends('layouts.template')

@section('content')
  <div class="container-fluid">
    @role('admin')
      @include('dashboard.role.admin-dashboard')
    @elserole('dosen')
      @include('dashboard.role.dosen-dashboard')
    @elserole('mahasiswa')
      @include('dashboard.role.mahasiswa-dashboard')
    @else
      <p>Role tidak dikenali.</p>
    @endrole
  </div>
@endsection
