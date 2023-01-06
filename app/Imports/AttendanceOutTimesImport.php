<?php

namespace App\Imports;

use App\Models\AttendancesOutTimeFromFile;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AttendanceOutTimesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AttendancesOutTimeFromFile([
            'emp_id'     => $row['emp_id'],
            'att_in_time'     => $row['att_in_time'],
            'att_status'     => $row['att_status'],
        ]);
    }
}
