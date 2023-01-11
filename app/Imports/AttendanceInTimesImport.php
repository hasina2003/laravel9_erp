<?php

namespace App\Imports;

use App\Models\AttendancesInTimeFromFile;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AttendanceInTimesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new AttendancesInTimeFromFile([
            'emp_id'     => $row['emp_id'],
            'att_time'     => $row['att_time'],
        ]);
    }
}
