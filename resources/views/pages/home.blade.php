<x-app title="Home Page" sidebar=" ">
    @section('breadcrumbs')
        <div class="content-header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        {{ Breadcrumbs::render('bc_home') }}
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('content')
        <div class="row">
            <div class="col-12">
                <h1>Home</h1>
            </div>
        </div>
    @endsection
</x-app>
