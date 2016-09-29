@extends('app')

@section('content')
    <script>
        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }
    </script>
    <h1>Mutualfund</h1>
    <a href="{{url('/mutualfunds/create')}}" class="btn btn-success">Create Investment</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th>Cust No</th>
            <th>Mutual Fund Manager</th>
            <th>Mutual Fund Type</th>
            <th>Classification</th>
            <th>Net Asset Value</th>
            <th>Annual Return</th>
            <th>Date Purchased</th>
            <th>Date Returned</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mutualfunds as $mutualfund)
            <tr>
                <td>{{ $mutualfund->customer->cust_id }}</td>
                <td>{{ $mutualfund->fund_manager }}</td>
                <td>{{ $mutualfund->fund_type }}</td>
                <td>{{ $mutualfund->classification }}</td>
                <td>{{ $mutualfund->net_asset_value }}</td>
                <td>{{ $mutualfund->annual_return }}</td>
                <td>{{ $mutualfund->purchased }}</td>
                <td>{{ $mutualfund->returned }}</td>
                <td><a href="{{url('mutualfunds',$mutualfund->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('mutualfunds.edit',$mutualfund->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['mutualfunds.destroy', $mutualfund->id],'onsubmit' => 'return ConfirmDelete()']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection
