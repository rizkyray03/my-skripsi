@extends('layouts.app' , ['title' => 'Mata Kuliah'])
@section('content')
    <div class="main mt-5 mb-5">
        <h1>Mata Kuliah</h1>
        <div class="card">
          <div class="row">
            <div class="col-lg-3 col-md-4 mb-2">
              <div class="card-body">
                  <div class="card">
                      <img src="{{ asset('img/blender.jpg') }}" class="card-img-top" alt="computer-aided">
                      <div id="text" class="card-body">
                        <span class="badge bg-secondary">SISTEM INFORMASI</span>
                        <h5 class="card-title mt-1"><a href="#">Computer Aided Design</a></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                      </div>
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa-regular fa-folder"></i></i> 10 Materi</li>
                      </ul>
                    </div>
              </div>
            </div>
            
            
            
          </div>
        </div>
    </div>
@endsection