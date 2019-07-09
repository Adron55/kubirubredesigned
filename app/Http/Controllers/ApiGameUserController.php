<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ApiGameUserController extends Controller
{
    public function initGame()
    {
        $clients = User::where('status', 2)
            ->leftJoin('company_infos', 'company_infos.user_id', '=', 'users.id')
//            ->leftJoin('coupons', 'coupons.company_id', '=', 'users.id')
            ->take(6)
            ->select('company_infos.company_name',
                'users.path',
                'users.id'
            )
            ->inRandomOrder()
            ->get();

        return response()->json(['status' => 'success', 'clients' => $clients]);
    }
}
