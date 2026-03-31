@extends('layout.dashboard')
@section('content')
@include('components.topbar')




<div class="cards">

    <div class="card">
        <h3>Website View</h3>
        <div class="small">Last Campaign Performance</div>

        <div class="chart">
            <div class="bar" style="height:15px"></div>
            <div class="bar" style="height:30px"></div>
            <div class="bar" style="height:20px"></div>
            <div class="bar blue" style="height:40px"></div>
            <div class="bar" style="height:10px"></div>
            <div class="bar" style="height:20px"></div>
            <div class="bar" style="height:35px"></div>
        </div>

        <div class="footer">campaign sent 2 days ago</div>
    </div>


    <div class="card">
        <h3>Daily Sales</h3>
        <div class="small">15% increase in today sales</div>

        <div class="chart">
            <div class="bar" style="height:20px"></div>
            <div class="bar" style="height:25px"></div>
            <div class="bar" style="height:10px"></div>
            <div class="bar blue" style="height:40px"></div>
            <div class="bar" style="height:20px"></div>
            <div class="bar" style="height:30px"></div>
        </div>

        <div class="footer">updated 4 min ago</div>
    </div>


    <div class="card">
        <h3>Completed Tasks</h3>
        <div class="small">Last Campaign Performance</div>

        <div class="chart">
            <div class="bar" style="height:20px"></div>
            <div class="bar" style="height:30px"></div>
            <div class="bar" style="height:10px"></div>
            <div class="bar blue" style="height:40px"></div>
            <div class="bar" style="height:20px"></div>
            <div class="bar" style="height:25px"></div>
        </div>

        <div class="footer">just updated</div>
    </div>


    <div class="card">
        <h3>Orders Overview</h3>

        <p style="margin-bottom:10px;">$2400, Design changes</p>
        <p style="font-size:13px;color:gray;">22 DEC 7:20 PM</p>

        <br>

        <p>New order #1832412</p>
        <p style="font-size:13px;color:gray;">21 DEC 11 PM</p>

    </div>

</div>

@endsection