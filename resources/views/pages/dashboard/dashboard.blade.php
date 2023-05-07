<x-app title="Dashboard" sidebar=" ">
    @section('breadcrumbs')
        <x-breadcrumbs>
            {{ Breadcrumbs::render('bc_dashboard') }}
        </x-breadcrumbs>
    @endsection

    @section('content')
        <div class="row">
            <div class="col-12">
                <h1>Selamat Datang Admin!</h1>
            </div>
        </div>
    @endsection
</x-app>
