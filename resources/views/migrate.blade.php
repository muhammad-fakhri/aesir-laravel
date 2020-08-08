@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif

                    Migrate all anime storage data from any storage to Harddisk External 2 (4 TB)?
                    <a href="{{ route('migrating') }}">
                        <h3>Yes</h3>
                    </a>
                    <a href="{{ route('home') }}">
                        <h3>No</h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
