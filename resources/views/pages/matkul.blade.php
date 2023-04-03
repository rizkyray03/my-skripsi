<x-app title="Mata Kuliah">
    @section('content')
        <div class="row">
            <!--main-content-card-->
            <div class="col-lg-9 col-md-8">
                <div class="card shadow" style="width: 100%; height: 100%;">
                    <div class="card-body">
                        <div class="row">
                            <x-matkul></x-matkul>
                            <x-matkul></x-matkul>
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
