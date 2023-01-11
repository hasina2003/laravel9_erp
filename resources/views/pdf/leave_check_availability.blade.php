
<style>
    #attendances {
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #attendances td, #attendances th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #attendances tr:nth-child(even){background-color: #f2f2f2;}

    #attendances tr:hover {background-color: #ddd;}

    #attendances th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>


<div class="nk-block-head-content">
     <h3 class="nk-block-title page-title">Leave Details <strong class="text-primary small">Year : 2023</strong></h3>
    <!--  <div class="nk-block-des text-soft">
        <ul class="list-inline">
         <li>Created At: <span class="text-base">01 Jan, 2023 01:02 PM</span></li>
        </ul>
     </div> -->
</div>

<table id="attendances" width="100%">
    <thead>
    <tr>
        <td>Emp Id</td>
        <td>Leave Type</td>
        <td>Total Day</td>
        <td>Leave From</td>
        <td>Leave To</td>
        <td>Taken Day</td>
        <td>Rest Day</td>
    </tr>
    </thead>
    @foreach($chk_leave as $data)
        <tbody>
        <tr>
            <td>{{ $data->emp_id }}</td>
            <td>{{ $data->leave_type}}</td>
            <td>{{ $data->leave_day}}</td>
            <td>{{ $data->leave_from }}</td>
             <td>{{ $data->leave_to }}</td>
            <td>{{ $data->leave_total_day }}</td>
            <td>{{ $data->leave_day - $data->leave_total_day}}</td>
            
        </tr>
        </tbody>
    @endforeach

</table>

