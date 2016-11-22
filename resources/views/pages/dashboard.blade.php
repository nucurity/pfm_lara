@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="col-md-4">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-check"></i>Navigation</h4>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>
                            <a href="{{ url('/dashboard') }}">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/debit') }}">
                                Debit
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/credit') }}">
                                Credit
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-fw fa-gift"></i> Dashboard</h4>
                </div>
                <div class="panel-body">
                    <p>

                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
