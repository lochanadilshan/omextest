<?php

namespace App\Imports;

use App\Customer;
use Maatwebsite\Excel\Concerns\ToModel;

class CustomerImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Customer([
            
                'fname' => $row[0],
                'lname' => $row[1],
                'email' => $row[2],
                'pNotification' => $row[3],
                'password' => $row[4],
                
                
            ]);
    
    }
}
