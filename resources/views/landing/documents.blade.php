@extends('layouts.landingpage')
@section('content-header')
    <div class="space-100"></div>
    <div class="header-text">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                    <div class="jumbotron">
                        <h1 class="text-white">Choose Your Book and Enjoy</h1>
                    </div>
                    <div class="title-bar white">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-40"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="space-100"></div>
@endsection
@section('content')
    <section>
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 pull-right">
                    <h4>Search Box</h4>
                    <div class="space-5"></div>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter book name">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary"><i
                                        class="icofont icofont-search-alt-2"></i></button>
                            </div>
                        </div>
                    </form>
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="pull-right col-xs-12 col-sm-7 col-md-6">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="sort">Sont By : </label>
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <select name="sort" id="sort" class="form-control">
                                                <option value="">Best Match</option>
                                                <option value="">Best Book</option>
                                                <option value="">Latest Book</option>
                                                <option value="">Old Book</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="space-20"></div>
                    <div class="row">
                        @foreach ($dokumen as $document => $item)
                            <div class="col-xs-12 col-md-6">
                                <div class="category-item well yellow">
                                    <div class="media">
                                        <div class="media-left">
                                            <img width="150px"
                                                src="{{ asset('storage/dokumen/thumbnail/' . $item->thumbnail_path) }}"
                                                class="media-object" alt="">
                                        </div>
                                        <div class="media-body">
                                            <h5>{{ $item->judul }}</h5>
                                            <h6>{{ $item->kategori->nama_kategori }}</h6>
                                            <h6>{{ $item->tahun_publikasi }}</h6>
                                            <div class="space-10"></div>
                                            <p>{{ $item->abstrak }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="shop-pagination pull-right">
                                <ul id="pagination-demo" class="pagination-sm pagination">
                                    <li class="page-item first"><a href="#" class="page-link">First</a></li>
                                    <li class="page-item prev"><a href="#" class="page-link">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                                    <li class="page-item"><a href="#" class="page-link">6</a></li>
                                    <li class="page-item"><a href="#" class="page-link">7</a></li>
                                    <li class="page-item next"><a href="#" class="page-link">Next</a></li>
                                    <li class="page-item last"><a href="#" class="page-link">Last</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar-Start -->
                <div class="col-xs-12 col-md-2">
                    <aside>
                        <h3><i class="icofont icofont-filter"></i> Filter By</h3>
                        <div class="space-30"></div>
                        <div class="sigle-sidebar">
                            <h4>Category</h4>
                            <hr>
                            <ul class="list-unstyled menu-tip">
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Methematics</a></li>
                                <li><a href="#">Geography</a></li>
                                <li><a href="#">Technology</a></li>
                            </ul>
                            <a href="#" class="btn btn-primary btn-xs">See All</a>
                        </div>
                    </aside>
                </div>
                <!-- Sidebar-End -->
            </div>
        </div>
        <div class="space-80"></div>
    </section>
@endsection
