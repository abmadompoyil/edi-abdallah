<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\FromCollection;
class UsersExport implements  FromCollection
{
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function model(array $row)
    {
        return new User([
            'id'  => $row['id'],
            'name'  => $row['name'],
            'email' => $row['email'],
            'phone' => $row['phone'],
            'status' => $row['created_at'],
            'at'    => $row['at_field'],
        ]);
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return User::where('role_id',$this->type)->get();
    }
}
