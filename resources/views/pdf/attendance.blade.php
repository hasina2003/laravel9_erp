
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

<table id="attendances" width="100%">
    <thead>
    <tr>
        <td>emp_id</td>
        <td>att_year</td>
        <td>att_month</td>
        <td>att_date</td>
        <td>attendance</td>
    </tr>
    </thead>
    @foreach($attendances as $attendance)
        <tbody>
        <tr>
            <td>{{ $attendance->emp_id }}</td>
            <td>{{ $attendance->att_year }}</td>
            <td>{{ $attendance->att_month }}</td>
            <td>{{ $attendance->att_date }}</td>
            <td>{{ $attendance->att_status }}</td>
        </tr>
        </tbody>
    @endforeach

</table>

