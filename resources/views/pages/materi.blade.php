@extends('layouts.app', ['title' => 'Mata Kuliah'], ['page' => '/matkul'])
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-4 mb-3">
            <div class="row d-flex flex-wrap flex-column">
                <div class="col">
                    <div class="card shadow" style="width: 100%;">
                        <div class="card-body">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne" aria-expanded="false"
                                            aria-controls="flush-collapseOne">
                                            Pertemuan 1
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to
                                            demonstrate the <code>.accordion-flush</code> class. This is the first
                                            item's
                                            accordion body.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                            aria-controls="flush-collapseTwo">
                                            Pertemuan 2
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to
                                            demonstrate the <code>.accordion-flush</code> class. This is the second
                                            item's
                                            accordion body. Let's imagine this being filled with some actual content.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Pertemuan 3
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">Placeholder content for this accordion, which is
                                            intended to
                                            demonstrate the <code>.accordion-flush</code> class. This is the third
                                            item's
                                            accordion body. Nothing more exciting happening here in terms of content,
                                            but
                                            just
                                            filling up the space to make it look, at least at first glance, a bit more
                                            representative of how this would look in a real-world application.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="card shadow">
                        <div class="card-body">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Pertemuan</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card" style="width: 100%; height: 100%;">
                <div class="card-body">
                    <h3 class="judul">Pemrogramman Berorientasi Objek</h3>
                    <div class="videoWrapper">
                        <iframe src="//www.youtube.com/embed/" allowfullscreen></iframe>
                    </div>

                    <div class="card mt-3">
                        <div class="card-header">
                            <strong>Deskripsi</strong>
                        </div>
                        <div class="card-body">
                            <p class="text-medium-emphasis small text-truncate">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Eligendi, consequatur eaque recusandae
                                fugiat unde quod?
                            </p>
                            <div class="example">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#">Instruksi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Materi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Peserta</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/matkul/materi/tugas">Tugas</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>
@endsection
