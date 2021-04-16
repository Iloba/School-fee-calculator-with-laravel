<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeesGenerator extends Controller
{
    //generate fees
    public function generate(Request $req){

        //Complete Fees
        $completeFees = 100000;


       //Check if request is not == 100,000
       if($req->fees != $completeFees){
           return back()->with('error', 'School fees Incomplete');
       }


       for($i=0; $i <= 10; $i++){
       return  $this->breakDown($completeFees);
       }
       

       
     

    }

   public function breakDown($completeFees){

        $books = $completeFees * 10 / 100;
        $health = $completeFees * 10 / 100;
        $ict = $completeFees * 10 / 100;
        $feeding = $completeFees * 10 / 100;
        $accomodation = $completeFees * 10 / 100;
        $tuition = $completeFees * 10 / 100;
        $lesson = $completeFees * 10 / 100;
        $exams = $completeFees * 10 / 100;
        $stationary = $completeFees * 10 / 100;
        $security = $completeFees * 10 / 100;
        

        return '<h3> Here is the Breakdown of the Fees</h3>'.'The Fees For Books is '.$books. '<br>'.
        ' The Fees for Health is'. $health. '<br>'.'The Fees for ICT is'. $ict.
         '<br>'. 'The Fees for Feeding is'. $feeding. '<br>'. 'The Accomadation Fee is'.
          $accomodation. '<br>'.'The Tution Fee is'. $tuition. '<br>'. 'The Lesson fee is'. $lesson. 
          '<br>'. 'The Fees For Exam is'. $exams. '<br>'. 'The Fees for Stationary is'. $stationary
          .'<br>'. 'The Fees for Security is'. $security. '<br>' . '<b>Total: 100000</b>';

   }

}
