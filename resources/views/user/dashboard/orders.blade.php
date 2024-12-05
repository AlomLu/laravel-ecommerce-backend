@extends("user.layout.UserPanelMasterApp")
@section("content")
    
<div class="order-list">
    <h5>your orders</h5>
    <table class="table">
        <thead>
            <tr>
                <th>serial no.</th>
                <th>order id</th>
                <th>order date</th>
                <th>payment status</th>
                <th>delivery status</th>
                <th>shipment status</th>
                <th>price</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>01</td>
                <td>784532</td>
                <td>2024/12/01</td>
                <td>paid</td>
                <td>ddddddd</td>
                <td>ddddddd</td>
                <td>TK 14,852</td>
                <td><a href=""><i class="fa-solid fa-trash"></i></a></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection