@extends('app')
@section('content')
    <h2 >Customer </h2>

    <div class="container">
        <?php

        $total_stock_purchase_value=0;
        $total_stock_current_value=0;
        $total_investment_acquired_value=0;
        $total_investment_recent_value=0;
        $total_portfolio_stock =0;
        $total_portfolio_investment =0;

        $total_portfolio_orginal_value =0;
        $total_portfolio_current_value =0;
        $total_share_value=0;
        ?>
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Name</td>
                <td><?php echo ($customer['name']);?></td>
            </tr>
            <tr>
                <td>Cust Number</td>
                <td><?php echo ($customer['cust_number']); ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo ($customer['address']); ?></td>
            </tr>
            <tr>
                <td>City </td>
                <td><?php echo ($customer['city']); ?></td>
            </tr>
            <tr>
                <td>State</td>
                <td><?php echo ($customer['state']); ?></td>
            </tr>
            <tr>
                <td>Zip </td>
                <td><?php echo ($customer['zip']); ?></td>
            </tr>
            <tr>
                <td>Home Phone</td>
                <td><?php echo ($customer['home_phone']); ?></td>
            </tr>
            <tr>
                <td>Cell Phone</td>
                <td><?php echo ($customer['cell_phone']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
    <?php
    $stockprice=null;
    $stotal = 0;
    $svalue=0;
    $itotal = 0;
    $ivalue=0;
    $iportfolio = 0;
    $cportfolio = 0;
    ?>

    <br>
    <h2>Stocks </h2>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th> Symbol </th>
                <th>Stock Name</th>
                <th>No. of Shares</th>
                <th>Purchase Price</th>
                <th>Purchase Date</th>
                <th>Original Value</th>
                <th>Current Price</th>
                <th>Current Value</th>
            </tr>
            </thead>

            <tbody>
            @foreach($customer->stocks as $stock)
                <tr>
                    <td>{{ $stock->symbol }}</td>
                    <td>{{ $stock->name }}</td>
                    <td>{{ $stock->shares }}</td>
                    <td>{{ $stock->purchase_price }}</td>
                    <td>{{ $stock->purchased }}</td>
                    <td>{{($stock->shares *$stock->purchase_price )}}</td>
                    <?php $total_stock_purchase_value = $total_stock_purchase_value + ($stock['purchase_price'] * $stock['shares'] )?>
                    <td>
                        <?php
                        $ssymbol= $stock->symbol;
                        $URL = "http://www.google.com/finance/info?q=NSE:" . $ssymbol;
                        $file = fopen("$URL", "r");
                        $r = "";
                        do {
                            $data = fread($file, 500);
                            $r .= $data;
                        } while (strlen($data) != 0);
                        //Remove CR's from ouput - make it one line
                        $json = str_replace("\n", "", $r);

                        //Remove //, [ and ] to build qualified string
                        $data = substr($json, 4, strlen($json) - 5);

                        //decode JSON data
                        $json_output = json_decode($data, true);
                        //echo $sstring, "<br>   ";
                        $price = "\n" . $json_output['l'];
                        $cstockprice=$price;
                        ?>
                        {{ $cstockprice }}
                    </td>
                    <td>{{($cstockprice * $stock['shares'])}}</td>
                    <?php $total_stock_current_value = $total_stock_current_value + ($cstockprice * $stock['shares'] )?>
                </tr>
            @endforeach
            </tbody>
        </table>
        <table class="table table-striped table-bordered table-hover">
            <tr> <th>Total of Initial Stock Portfolio</th>
                <th>Total of Current Stock Portfolio</th>
            </tr>
            <tr>
                <td>${{$total_stock_purchase_value}}</td>
                <td>${{$total_stock_current_value}}</td>
            </tr>
        </table>
    </div>
    <h2>Investments </h2>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr class="bg-info">
                <th> Category </th>
                <th>Description</th>
                <th>Acquired Value</th>
                <th>Acquired Date</th>
                <th>Recent Value</th>
                <th>Recent Date</th>
            </tr>
            </thead>

            <tbody>
            @foreach($customer->investments as $investment)
                <tr>
                    <td>{{ $investment->category }}</td>
                    <td>{{ $investment->description }}</td>
                    <td>{{ $investment->acquired_value }}</td>
                    <?php $total_investment_acquired_value = $total_investment_acquired_value + $investment['acquired_value'] ?>
                    <td>{{ $investment->acquired_date }}</td>
                    <td>{{ $investment->recent_value }}</td>
                    <?php $total_investment_recent_value = $total_investment_recent_value + $investment['recent_value'] ?>
                    <td>{{ $investment->recent_date }}</td>
                </tr>

            @endforeach

            </tbody>
        </table>
            <table class="table table-striped table-bordered table-hover">
                <tr> <th>Total of Initial Stock Portfolio</th>
                    <th>Total of Current Stock Portfolio</th>
                </tr>
                <tr>
                    <td>${{$total_investment_acquired_value}}</td>
                    <td>${{$total_investment_recent_value}}</td>
                </tr>
            </table>

        </div>
       <h3>Mutual Funds </h3>
        <div class="container">
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

        </tr>
        </thead>
        <tbody>
        @foreach ($customer->mutualfunds as $mutualfund)
            <tr>
                <td>{{ $mutualfund->customer->cust_number }}</td>
                <td>{{ $mutualfund->fund_manager }}</td>
                <td>{{ $mutualfund->fund_type }}</td>
                <td>{{ $mutualfund->classification }}</td>
                <td>{{ $mutualfund->net_asset_value }}</td>
                <td>{{ $mutualfund->annual_return }}</td>
                <td>{{ $mutualfund->purchased }}</td>
                <td>{{ $mutualfund->returned }}</td>
        @endforeach
                </table>
    </div>
    <h2>Summary of Portfolios</h2>
    <table class="table table-striped table-bordered table-hover">
        <tr> <th>Total of Initial Portfolio</th>
            <th>Total of Current  Portfolio</th>
        </tr>
        <tr>
            <td>${{$total_investment_acquired_value+$total_stock_purchase_value}}</td>
            <td>${{$total_investment_recent_value+$total_stock_current_value}}</td>
        </tr>
    </table>
@stop