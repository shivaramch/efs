@extends('app')
@section('content')
    <h1>Create New Mutualfund</h1>
    {!! Form::open(['url' => 'mutualfunds']) !!}

    <div class="form-group">
        {!! Form::select('customer_id', $customers) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fund_manager', 'Mutual Fund Manager:') !!}
        {!! Form::text('fund_manager',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('fund_type', 'Mutual Fund Type:') !!}
        {!! Form::text('fund_type',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('classification', 'Classification:') !!}
        {!! Form::text('classification',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('net_asset_value', 'Net Asset Value:') !!}
        {!! Form::text('net_asset_value',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('annual_return', 'Annual Return: ') !!}
        {!! Form::text('annual_return',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('purchased', 'Date Purchased: ') !!}
        {!! Form::text('purchased',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('returned', 'Date Returned: ') !!}
        {!! Form::text('returned',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop