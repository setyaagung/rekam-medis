<?php

namespace App\Http\Controllers;

use App\Model\Dokter;
use App\Model\RekamMedis;
use App\Model\Taruna;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $tarunas = Taruna::count();
        $dokters = Dokter::count();
        $users = User::count();
        $rms = RekamMedis::count();
        return view('backend.dashboard', compact('tarunas', 'dokters', 'users', 'rms'));
    }
}
