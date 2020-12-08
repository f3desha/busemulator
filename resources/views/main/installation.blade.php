@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Installation guide</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        Read README.md in the root of project<br><br>

                        <h2>Workflow</h2>
                        Use Admin account to:<br>
                        <a href="/docs/#store-a-newly-created-route-point">Create as many Route Points as you want</a><br>
                        <a href="/docs/#store-a-newly-created-route">Create Route</a><br>
                        <a href="/docs/#add-a-point-to-route">Add route points to Route</a><br>
                        <a href="/docs/#store-a-newly-created-bus">Create new Bus</a><br>
                        <a href="/docs/#assign-route-to-bus">Assign Route to bus</a><br>
                        <a href="/docs/#change-users-role-to-driver">Promote regular user to driver or use seeded drivers</a><br>
                        <a href="/docs/#assign-driver-to-bus">Assign Driver to bus</a><br><br>

                        Use Driver account to:<br>
                        <a href="/docs/#drive-a-bus">Drive a bus this driver assigned to</a><br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
