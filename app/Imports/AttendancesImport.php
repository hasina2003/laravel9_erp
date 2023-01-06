<?php

namespace App\Imports;

use App\Models\Attendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;


class AttendancesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Attendance([
            'emp_id'     => $row['emp_id'],
            'att_year'    => $row['att_year'], 
            'att_month' => $row['att_month'],
            'att_date'     => $row['att_date'],
            'att_status'    => $row['att_status'], 
            'edit_date' => $row['edit_date'],
        ]);
    }
}
