@extends('app')

@section('content')
        <!DOCTYPE html>
<html>
<head>
    <title>Search Box Example 1</title>
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW" />
    <!-- CSS styles for standard search box -->
    <style type="text/css">
        #tfheader{
            background-color:#c3dfef;
        }
        #tfnewsearch{
            float:right;
            padding:20px;
        }
        .tftextinput{
            margin: 0;
            padding: 5px 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-size:14px;
            border:1px solid #0076a3; border-right:0px;
            border-top-left-radius: 5px 5px;
            border-bottom-left-radius: 5px 5px;
        }
        .tfbutton {
            margin: 0;
            padding: 5px 15px;
            font-family: Arial, Helvetica, sans-serif;
            font-size:14px;
            outline: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            color: #ffffff;
            border: solid 1px #0076a3; border-right:0px;
            background: #0095cd;
            background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
            background: -moz-linear-gradient(top,  #00adee,  #0078a5);
            border-top-right-radius: 5px 5px;
            border-bottom-right-radius: 5px 5px;
        }
        .tfbutton:hover {
            text-decoration: none;
            background: #007ead;
            background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
            background: -moz-linear-gradient(top,  #0095cc,  #00678e);
        }
        /* Fixes submit button height problem in Firefox */
        .tfbutton::-moz-focus-inner {
            border: 0;
        }
        .tfclear{
            clear:both;
        }
    </style>
</head>
<body>
<!-- HTML for SEARCH BAR -->
<div id="tfheader">
    <form id="tfnewsearch" method="get" action="http://www.google.com">
        <input type="text" class="tftextinput" name="q" size="21" maxlength="120"><input type="submit" value="search" class="tfbutton">
    </form>
    <div class="tfclear"></div>
</div>
</body>
</html>


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
    <h1>Customer</h1>
    <a href="{{url('/customers/create')}}" class="btn btn-success">Create Customer</a>
    <hr>
    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr class="bg-info">
            <th> Cust Number</th>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Primary Email</th>
            <th>Home Phone</th>
            <th>Cell Phone</th>
            <th colspan="3">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($customers as $customer)
            <tr>
                <td>{{ $customer->cust_number }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->address }}</td>
                <td>{{ $customer->city }}</td>
                <td>{{ $customer->state }}</td>
                <td>{{ $customer->zip }}</td>
                <td>{{ $customer->email }}</td>
                <td>{{ $customer->home_phone }}</td>
                <td>{{ $customer->cell_phone }}</td>
                <td><a href="{{url('customers',$customer->id)}}" class="btn btn-primary">Read</a></td>
                <td><a href="{{route('customers.edit',$customer->id)}}" class="btn btn-warning">Update</a></td>
                <td>
                    {!! Form::open(['method' => 'DELETE', 'route'=>['customers.destroy', $customer->id]]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>

    </table>
@endsection

