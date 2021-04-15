<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesGenerator extends Controller
{
    //generate fees
    public function generate(Request $req){
       //Check if request is not == 100,000
       if($req->fees != 100000){
           return back()->with('error', 'School fees Incomplete');
       }

       //Section
       $sections = $req->fees / 10000;

       for($i=1; $i < $sections; $i++){
           $data = [
               'Tuition fee: 10000',
                'Medical: 10000',
                'Security: 10000',
                'Books: 10000',
                'Lessons: 10000',
                'ICT: 10000',
                'Exams: 10000',
                'Lab Fees: 10000',
                'PTA: 10000',
                'Boarding Fees: 10000',
                'Total: 100000'
            ];
            return redirect('/')->with(['data', $data]);
       }
    }

}
