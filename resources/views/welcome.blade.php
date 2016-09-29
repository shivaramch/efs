@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    Eagle Financial Services, your Midwest Financial Services Partner.

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .links{
        display: inline;
        background-color: beige;
    }
</style>
<div class="links">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="customer.jpg" alt="customers">
                <div class="caption">
                    <h2>Customer</h2>
                    <p>We see our success in our customers success, it gives us an immense pleasure when our advises turn out to be fruitful. </p>
                    <p><a class="btn btn-default" href="{{ action('HomeController@index') }}" role="button">View details &raquo;</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="nonstock.jpg" alt="nonstock">
                <div class="caption">
                    <h2>Non-Stock Investments</h2>
                    <p>Our team also provides advises for Non-Stock investments.</p>
                    <p><a class="btn btn-default" href="{{ action('HomeController@index') }}" role="button">View details &raquo;</a></p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="stocks.jpg" alt="stocks">
                <div class="caption">
                    <h2>Stock Portfolio</h2>
                    <p>Our Stock portfolios vary across industries.</p>
                    <p><a class="btn btn-default" href="{{ action('HomeController@index') }}" role="button">View details &raquo;</a></p><br/>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="thumbnail">
                <img src="mutualfunds.gif" alt="mutualfunds">
                <div class="caption">
                    <h2>Mutual Funds</h2>
                    <p>Invest wisely earn more.</p>
                    <p><a class="btn btn-default" href="{{ action('HomeController@index') }}" role="button">View details &raquo;</a></p><br/>
                </div>
            </div>
        </div>
        <!--<div class="widget">
            <iframe src="http://tsw.forexprostools.com?&forex=1,2,3,5,7,9,10&commodities=8830,8836,8831,8849,8833,8862,8832&indices=175,166,172,27,167,40830,179&stocks=284,280,282,287,286,288,295&tabs=1,2,3,4" width="317" height="467"></iframe><div class="poweredBy" style="font-family:arial,helvetica,sans-serif; direction:ltr;"><span style="font-size: 11px;color: #333333;text-decoration: none;">Technical Summary Widget Powered by <a href="http://www.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a></span></div>
        </div>-->
        <br/>
    </div>

    <hr>

    <footer>
        <p style="text-align: center">&copy; 2016 Eagle Financial Services, Inc.</p>
        <p style="text-align: center">Website Developed by <a href="https://www.linkedin.com/in/shiva-ram-chennapragada-549a5258">Shiva Ram Chennapragada</a></p>
    </footer>
</div> <!-- /container -->
@endsection
