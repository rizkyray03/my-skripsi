@extends('layouts.app' , ['title' => 'Mata Kuliah'])
@section('content')
<style>
  a{
    text-decoration: none;
  }
</style>
    <div class="main mt-5 mb-5">
        <h1>Mata Kuliah</h1>
        <div class="matkul-section">
          <div class="row d-flex flex-wrap justify-content-between align-items-center">
            <div class="col-lg-3 col-12 mb-2">
              <div class="card-body">
                  <div class="card" style="width: 12rem;">
                      <img src="{{ asset('img/blender.jpg') }}" class="card-img-top" alt="computer-aided">
                      <div class="card-body">
                        <span class="badge bg-secondary">SISTEM INFORMASI</span>
                        <h5 class="card-title"><a href="#">Computer Aided Design</a></h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Belajar</li>
                      </ul>
                      {{-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                      </div> --}}
                    </div>
              </div>
            </div>
            <div class="col-lg-3 col-12">
              <div class="card-body">
                  <div class="card" style="width: 12rem;">
                      <img src="{{ asset('img/blender.jpg') }}" class="card-img-top" alt="computer-aided">
                      <div class="card-body">
                        <span class="badge bg-secondary">SISTEM INFORMASI</span>
                        <h5 class="card-title"><a href="#">Computer Aided Design</a></h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Belajar</li>
                      </ul>
                      {{-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                      </div> --}}
                    </div>
              </div>
            </div>
            <div class="col-lg-3 col-12">
              <div class="card-body">
                  <div class="card" style="width: 12rem;">
                      <img src="{{ asset('img/blender.jpg') }}" class="card-img-top" alt="computer-aided">
                      <div class="card-body">
                        <span class="badge bg-secondary">SISTEM INFORMASI</span>
                        <h5 class="card-title"><a href="#">Computer Aided Design</a></h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Belajar</li>
                      </ul>
                      {{-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                      </div> --}}
                    </div>
              </div>
            </div>
            <div class="col-lg-3 col-12">
              <div class="card-body">
                  <div class="card" style="width: 12rem;">
                      <img src="{{ asset('img/blender.jpg') }}" class="card-img-top" alt="computer-aided">
                      <div class="card-body">
                        <span class="badge bg-secondary">SISTEM INFORMASI</span>
                        <h5 class="card-title"><a href="#">Computer Aided Design</a></h5>
                        {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">Belajar</li>
                      </ul>
                      {{-- <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                      </div> --}}
                    </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection