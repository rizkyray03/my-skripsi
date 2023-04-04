<x-app title="Mata Kuliah" sidebar="show">
    @section('content')
        <div class="row">
            <!--main-content-card-->
            <div class="col-lg-9 col-md-8">
                <div class="card shadow" style="width: 100%; height: 100%;">
                    <div class="card-body">
                        <div class="row d-flex text-wrap">
                            <x-matkul>
                                <span class="badge bg-secondary">SISTEM INFORMASI</span>
                                <h5 class="card-title mt-1"><a href="/matkul/materi" class="judul-matkul">Computer Aided
                                        Design</a></h5>
                                <p class="card-text text-truncate">
                                    {{ Str::limit('Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam sapiente eligendi saepe quia sequi quam perferendis accusantium itaque assumenda exercitationem perspiciatis maxime, placeat sint quisquam ea ratione molestiae ipsum debitis provident commodi tempore repellendus enim eos. Beatae repellat similique nam ipsam ab culpa veniam assumenda sed? Distinctio voluptatum, maxime nam vitae nesciunt beatae similique quos laboriosam dolorum at, adipisci excepturi nemo eaque tenetur enim totam pariatur aliquam laudantium sed. Cupiditate magnam explicabo, unde facere nihil sapiente eos! Earum reprehenderit assumenda porro molestiae totam repellat deleniti repudiandae laboriosam voluptas voluptatum minus suscipit sunt amet sint in vel, eum labore possimus perspiciatis?', 80) }}
                                </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa-regular fa-folder"></i></i> 10 Materi</li>
                            <li class="list-group-item">
                                <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-danger" style="width: 75%"></div>
                                </div>
                            </li>
                        </ul>
                        </x-matkul>
                        <x-matkul>
                            <span class="badge bg-secondary">SISTEM INFORMASI</span>
                            <h5 class="card-title mt-1"><a href="/matkul/materi" class="judul-matkul">Computer Aided
                                    Design</a></h5>
                            <p class="card-text">Some quick example text to build on the card title</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa-regular fa-folder"></i></i> 10 Materi</li>
                        <li class="list-group-item">
                            <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="75"
                                aria-valuemin="0" aria-valuemax="100">
                                <div class="progress-bar bg-danger" style="width: 75%"></div>
                            </div>
                        </li>
                    </ul>
                    </x-matkul>
                </div>
            </div>
        </div>
        </div>
        <!--main-content-card-->
        <div class="col-lg-3 col-md-4">
            <div class="card shadow" style="width: 100%; height: 100%;">
                <div class="card-body">
                    <div class="row">
                        <p>Online User</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endsection
</x-app>
