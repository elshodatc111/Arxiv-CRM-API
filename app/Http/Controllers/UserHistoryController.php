<?php

namespace App\Http\Controllers;

use App\Models\UserHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserHistoryController extends Controller{
    public function show($User_ID){
        $Historys = DB::table('user_student_history')->where('UserID',$User_ID)->orderby('Data', 'ASC')->get();
        return $Historys;
    }
}
