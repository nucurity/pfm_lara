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
                    <h4><i class="fa fa-fw fa-gift"></i> Add debit</h4>
                </div>
                <div class="panel-body">
                    <p>
                        <form name="creditForm" id="creditForm" style="margin-top:20px" role="form" method="POST"
                              action="{{ url('/addDebit') }}">
                            <!--Mandatory token! Do not touch!-->
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('debitAmount') ? ' has-error' : '' }}">
                                <div class="controls">
                                    <label>
                                        Amount:
                                    </label>
                                    <input id="debitAmount" type="number" step="any" class="form-control" name="debitAmount"
                                           required autofocus>
                                    @if ($errors->has('debitAmount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('debitAmount') }}</strong>
                                    </span>
                                    @endif
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('debitName') ? ' has-error' : '' }}">
                                <div class="controls">
                                    <label>
                                        Description:
                                    </label>
                                    <input id="debitName" type="text" class="form-control" name="debitName" required>
                                    @if ($errors->has('debitName'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('debitName') }}</strong>
                                         </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('debitCategory') ? ' has-error' : '' }}">
                                <div class="controls">
                                    <label>
                                        Category:
                                    </label>
                                    <select id="debitCategory" type="text" class="form-control" name="debitCategory" required>
                                        <option value="1" selected>Uncategorized</option>
                                        <option value="2">Income</option>
                                    </select>
                                    @if ($errors->has('debitCategory'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('debitCategory') }}</strong>
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
