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
                    <h4><i class="fa fa-fw fa-gift"></i> Add credit</h4>
                </div>
                <div class="panel-body">
                    <p>
                        <form name="creditForm" id="creditForm" style="margin-top:20px" role="form" method="POST"
                              action="{{ url('/addCredit') }}">
                            <!--Mandatory token! Do not touch!-->
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('creditAmount') ? ' has-error' : '' }}">
                                <div class="controls">
                                    <label>
                                        Amount:
                                    </label>
                                    <input id="creditAmount" type="number" step="any" class="form-control" name="creditAmount"
                                           required autofocus>
                                    @if ($errors->has('creditAmount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('creditAmount') }}</strong>
                                    </span>
                                    @endif
                                    <p class="help-block"></p>
                                 </div>
                            </div>
                            <div class="form-group{{ $errors->has('creditName') ? ' has-error' : '' }}">
                                <div class="controls">
                                    <label>
                                        Description:
                                    </label>
                                    <input id="creditName" type="text" class="form-control" name="creditName" required>
                                    @if ($errors->has('creditName'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('creditName') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('creditCategory') ? ' has-error' : '' }}">
                                <div class="controls">
                                    <label>
                                        Category:
                                    </label>
                                    <select id="creditCategory" type="text" class="form-control" name="creditCategory" required>
                                        <option value="1" selected>Uncategorized</option>
                                        <option value="2">Food</option>
                                        <option value="3">Monthly</option>
                                        <option value="4">Blackjack and whores</option>
                                    </select>
                                    @if ($errors->has('creditCategory'))
                                        <span class="help-block">
                                             <strong>{{ $errors->first('creditCategory') }}</strong>
                                         </span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Add credit
                            </button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
