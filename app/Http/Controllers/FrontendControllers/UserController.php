<?php

namespace App\Http\Controllers\FrontendControllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function user_list()
    {
        $users = User::all();
        // $users=User::orderBy('id','DESC')->get();
        return view('Frontend.Pages.Users.Users_list', compact('users'));
    }

    public function user_list_download()
    {
        $users = User::all();
        $data['users'] = $users;
        // dd($data);
        $pdf = Pdf::loadView('Frontend.Pages.Users.Users_list', $data);
        return $pdf->download('User_list.pdf');
    }

    public function user_list_download_excel()
    {
        dd('Hello');
    }
}
