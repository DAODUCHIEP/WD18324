<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showThongTinSv(){
        $students = [
            [

                'id' => '1',
                'name' => 'hiep',
                'age' => 20
            ],
            
            [

                'id' => '2',
                'name' => 'hiepp',
                'age' => 21
            ]
            
        ];
                
        return view('thong-tin-sv')->with([
            'students' => $students
        ]);
        
    }
}