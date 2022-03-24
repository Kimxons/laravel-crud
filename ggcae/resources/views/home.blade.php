@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Schedule') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="info">
                        <tr>
                            <th>
                                Name: {{ Auth::user()->name }}
                                <span id="displayFname"> </span> <span id="displayLname"> </span>
                            </th>

                            <th></th><th></th><th></th><th></th>
                            <th></th><th></th><th></th><th></th>

                            <th>
                                Email: {{ Auth::user()->email }}
                                <span id="displayLicense"> </span>
                            </th>

                        </tr>
                    </table>
                    
                </div>

                <div class = "grid-item">
                    <h2>Your Online Class Schedule</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection