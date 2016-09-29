@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Thanks for Joining us!
                    <br>
                    <br>
                    As a financial advisor your job is to render financial services to clients as per EFS standards. We are glad to have you onboard.

                </div>

                <div class="panel-body">
                    <p>Click on below links to view Portfolio Planner Options</p>
                    <p style="color: blue;font-size:100%;font-family:Calibri"><a href="{{ action('CustomerController@index') }}">View a Customer's Profile >></a></p>
                    <p style="color:blue;font-size:100%;font-family:Calibri"><a href="{{ action('InvestmentController@index') }}">Update Non-Stock Investments >></a></p>
                    <p style="color: blue;font-size: 100%;font-family: Calibri"><a href="{{ action('StockController@index') }}">Update Stock Portfolio >></a></p>
                    <p style="color: blue;font-size: 100%;font-family: Calibri"><a href="{{ action('MutualfundController@index') }}">View Customer's Mutual Funds >></a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<style>
    .widget1{
        position: relative;
    }
    .widget2{
        position: relative;
    }
</style>-->
<div>
    Below widgets provide an overview of current market trends. Use our currency converter to see FOREX rates.
</div>
<br>
<br>
<div class="col-lg-3">
    <iframe src="http://tsw.forexprostools.com?&forex=1,2,3,5,7,9,10&commodities=8830,8836,8831,8849,8833,8862,8832&indices=175,166,172,27,167,40830,179&stocks=284,280,282,287,286,288,295&tabs=1,2,3,4" width="317" height="467"></iframe>
</div>
<div class="col-md">
    <iframe frameborder="0" scrolling="no" height="375" width="197" allowtransparency="true" marginwidth="0" marginheight="0" src="http://tools.investing.com/currency-converter/index.php?from=17&to=12"></iframe>
</div>
<br>
<br>
<br>
<br>
<br>
<br>


<div class="panel-footer">
    <p style="text-align: center">&copy; 2016 Eagle Financial Services, Inc.</p>
    <p style="text-align: center">Website Developed by <a href="https://www.linkedin.com/in/shiva-ram-chennapragada-549a5258">Shiva Ram Chennapragada</a></p>
    <div class="poweredBy" style="text-align: center;font-family:arial,helvetica,sans-serif; direction:ltr;"><span style="font-size: 11px;color: #333333;text-decoration: none;">Technical Summary and Currency Converter Widgets Powered by <a href="http://www.investing.com/" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com</a></span></div>
</div>
@endsection

