@extends('app')
@section('content')
    <h1>Mutualfund</h1>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tbody>
            <tr class="bg-info">
            <tr>
                <td>Mutual Fund Manager</td>
                <td><?php echo ($mutualfund['fund_manager']); ?></td>
            </tr>
            <tr>
                <td>Mutual Fund Type</td>
                <td><?php echo ($mutualfund['fund_type']); ?></td>
            </tr>
            <tr>
                <td>Classification</td>
                <td><?php echo ($mutualfund['classification']); ?></td>
            </tr>
            <tr>
                <td>Net Asset Value</td>
                <td><?php echo ($mutualfund['net_asset_value']); ?></td>
            </tr>
            <tr>
                <td>Annual Return</td>
                <td><?php echo ($mutualfund['annual_return']); ?></td>
            </tr>
            <tr>
                <td>Date Purchased</td>
                <td><?php echo ($mutualfund['purchased']); ?></td>
            </tr>
            <tr>
                <td>Date Returned</td>
                <td><?php echo ($mutualfund['returned']); ?></td>
            </tr>
            </tbody>
        </table>
    </div>
@stop