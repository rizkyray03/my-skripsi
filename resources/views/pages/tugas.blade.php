@extends('layouts.app', ['title' => 'Tugas'], ['page' => '/materi'])
@section('content')
    <div class="row">
        <div class="col">
            <x-card>
                <div class="card">
                    <div class="card-header">
                        <i class="fa-solid fa-file-arrow-up fa-lg">
                        </i>
                        <p>Tugas pertama</p>
                    </div>
                    <div class="card-body">
                        Lorem ipsum dolor sit amet.
                    </div>
                </div>
            </x-card>
        </div>
    </div>
@endsection
