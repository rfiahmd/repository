@extends('layouts.landingpage')
@section('content-header')
    <div class="space-100"></div>
    <div class="header-text">
        <div class="container">
            <div class="row wow fadeInUp">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 text-center">
                    <div class="jumbotron">
                        <h1 class="text-white">Satu Portal untuk Seluruh Karya Ilmiah Mahasiswa UNIBA Madura</h1>
                        <p class="text-white">Karya Ilmiah Mahasiswa dan Dosen dalam Genggaman
                            <br /> Dari skripsi hingga jurnal, temukan semua dokumen akademik dalam satu tempat.
                        </p>
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
    <section class="gray-bg" id="sc2">
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2>Tentang <strong>Kami</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-30"></div>
                    <p>UNIBA Madura Repository adalah platform digital yang dirancang untuk menyimpan, mengelola, dan
                        membagikan karya ilmiah dari mahasiswa dan dosen Universitas Bahaudin Mudhary.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="hidden-xs hidden-sm col-sm-5 pull-right  wow fadeInRight">
                    <div class="space-60"></div>
                    <div class="my-slider">
                        <ul>
                            <li><img src="{{ asset('assetLP') }}/images/about-slide/slide1.jpg" alt="library"></li>
                            <li><img src="{{ asset('assetLP') }}/images/about-slide/slide2.jpg" alt="library"></li>
                            <li><img src="{{ asset('assetLP') }}/images/about-slide/slide3.jpg" alt="library"></li>
                            <li><img src="{{ asset('assetLP') }}/images/about-slide/slide4.jpg" alt="library"></li>
                            <li><img src="{{ asset('assetLP') }}/images/about-slide/slide5.jpg" alt="library"></li>
                            <li><img src="{{ asset('assetLP') }}/images/about-slide/slide6.jpg" alt="library"></li>
                        </ul>
                    </div>
                    <div class="mama"></div>
                </div>
                <div class="col-xs-12 col-md-7">
                    <ul class="list-unstyled list-inline text-yellow tip">
                        <li><i class="icofont icofont-square"></i></li>
                        <li><i class="icofont icofont-square"></i></li>
                        <li><i class="icofont icofont-square"></i></li>
                    </ul>
                    <div class="space-15"></div>
                    <p>UNIBA Madura Repository adalah platform digital yang dirancang untuk menyimpan, mengelola, dan
                        membagikan karya ilmiah dari mahasiswa dan dosen Universitas Bahaudin Mudhary. Website ini bertujuan
                        mendukung keterbukaan akses informasi akademik dan mendorong pengembangan ilmu pengetahuan di
                        lingkungan kampus.

                    </p>
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 wow fadeIn">
                            <ul class="list-unstyled list-inline icon-bar">
                                <li><i class="icofont icofont-id-card"></i></li>
                            </ul>
                            <h3>Member Access</h3>
                            <p>Dosen dan mahasiswa dapat mendaftar sebagai anggota untuk mengunggah dan mengelola karya
                                ilmiah secara mandiri.
                            </p>
                            <div class="space-30"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 wow fadeIn">
                            <ul class="list-unstyled list-inline icon-bar">
                                <li><i class="icofont icofont-medal-alt"></i></li>
                            </ul>
                            <h3>Karya Berkualitas</h3>
                            <p>Setiap dokumen yang diunggah telah melalui proses seleksi dan validasi untuk memastikan
                                kualitas akademik.
                            </p>
                            <div class="space-30"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 wow fadeIn">
                            <ul class="list-unstyled list-inline icon-bar">
                                <li><i class="icofont icofont-read-book-alt"></i></li>
                            </ul>
                            <h3>Akses Bebas</h3>
                            <p>Semua jurnal, skripsi, dan tugas yang dipublikasikan dapat diakses secara gratis oleh siapa
                                pun tanpa batasan waktu.
                            </p>
                            <div class="space-30"></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 wow fadeIn">
                            <ul class="list-unstyled list-inline icon-bar">
                                <li><i class="icofont icofont-book-alt"></i></li>
                            </ul>
                            <h3>UUpdate Berkala</h3>
                            <p>Repository diperbarui secara rutin oleh tim pengelola untuk memastikan informasi tetap
                                relevan dan up-to-date.


                            </p>
                            <div class="space-30"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
    </section>
    <section id="sc5">
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2>Kategori <strong>Dokumen</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-30"></div>
                    <p>Website repository ini menyediakan berbagai kategori dokumen seperti skripsi, laporan tugas akhir,
                        jurnal ilmiah, dan dokumen akademik lainnya untuk memudahkan pencarian dan akses informasi oleh
                        mahasiswa dan dosen Universitas Bahaudin Mudhary.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row team_slide text-center">
                @foreach ($kategoris as $index => $kategori)
                    <div class="col-xs-12">
                        <div class="category-item well green text-cetnr">
                            <div class="category_icon">
                                <i class="icofont icofont-globe-alt"></i>
                            </div>
                            <div class="space-20"></div>
                            <div class="title-bar">
                                <ul class="list-inline list-unstyled">
                                    <li><i class="icofont icofont-square"></i></li>
                                </ul>
                            </div>
                            <div class="space-20"></div>
                            <h5>{{ $kategori->nama_kategori }}</h5>
                            <p>{{ $kategori->deskripsi ?? '-' }}</p>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="space-80"></div>
        </div>
    </section>
    <section id="sc4">
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2>Team <strong>Work</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar blue">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                    <div class="space-30"></div>
                    <p> Kami adalah tim developer website yang terdiri dari individu kreatif dan berpengalaman di bidang
                        pengembangan web. Dengan keahlian di berbagai teknologi seperti frontend, backend, UI/UX, Sistem
                        Analis, Manajemen Project dan
                        manajemen database, kami siap menghadirkan solusi digital yang responsif, fungsional, dan
                        user-friendly. Kami percaya bahwa kolaborasi dan inovasi adalah kunci untuk menciptakan website yang
                        tidak hanya menarik secara visual, tetapi juga efektif dalam memenuhi kebutuhan pengguna.</p>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row team_slide text-center">
                <div class="col-xs-12">
                    <div class="well single-team">
                        <h4>Berry Dwi Nurislam</h4>
                        <span>front end</span>
                        <div class="space-10"></div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <div class="team-member-photo relative">
                            <img src="{{ asset('assetLP') }}/images/team/berry.jpg" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="well single-team">
                        <div class="team-member-photo relative">
                            <img src="{{ asset('assetLP') }}/images/team/rofi.jpg" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <h4>Ach. Rofi'i</h4>
                        <span>Backend</span>
                        <div class="space-10"></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="well single-team">
                        <h4>Ifadatur Rahmah</h4>
                        <span>Manajemen Database</span>
                        <div class="space-10"></div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <div class="team-member-photo relative">
                            <img src="{{ asset('assetLP') }}/images/team/ifa.jpg" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="well single-team">
                        <div class="team-member-photo relative">
                            <img src="{{ asset('assetLP') }}/images/team/danu.jpg" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <h4>Bagus Danu Raharjo</h4>
                        <span>UI/UX</span>
                        <div class="space-10"></div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="well single-team">
                        <h4>Widya Khairul Ummah</h4>
                        <span>Manajemen Project</span>
                        <div class="space-10"></div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <div class="team-member-photo relative">
                            <img src="{{ asset('assetLP') }}/images/team/widya.jpg" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="well single-team">
                        <div class="team-member-photo relative">
                            <img src="{{ asset('assetLP') }}/images/team/ana.jpg" alt="library">
                            <div class="team_overlay_icon">
                                <a href="books.html" class="btn btn-default">See Prolife</a>
                            </div>
                        </div>
                        <div class="space-20"></div>
                        <div class="title-bar">
                            <ul class="list-inline list-unstyled">
                                <li><i class="icofont icofont-square"></i></li>
                            </ul>
                        </div>
                        <div class="space-20"></div>
                        <h4>Nurul Hasanah</h4>
                        <span>Sistem Analis</span>
                        <div class="space-10"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-80"></div>
    </section>
    <section class="bg-primary relative">
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <h2 class="text-white">Lets Take <strong>Your Book</strong></h2>
                    <div class="space-20"></div>
                    <div class="title-bar left white">
                        <ul class="list-inline list-unstyled">
                            <li><i class="icofont icofont-square"></i></li>
                            <li><i class="icofont icofont-square"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="space-60"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-7">
                    <form action="#">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control bg-none"
                                        placeholder="Enter your name...">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" class="form-control bg-none"
                                        placeholder="Enter your email...">
                                </div>
                            </div>
                            <div class="space-20"></div>
                            <div class="col-xs-12 col-sm-6">
                                <button type="submit" class="btn btn-default">Create Accout <i
                                        class="fa fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="hidden-xs col-sm-5 outer-image wow fadeInRight">
                    <img src="{{ asset('assetLP') }}/images/bgsatu.png" alt="library">
                </div>
            </div>
        </div>
        <div class="space-80"></div>
    </section>
@endsection
