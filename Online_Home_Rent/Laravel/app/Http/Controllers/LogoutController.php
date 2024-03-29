<?php namespace App\Http\Controllers;
use App\Model\User_Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;
class LogoutController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Home Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders your application's "dashboard" for users that
    | are authenticated. Of course, you are free to change or remove the
    | controller as you wish. It is just here to get your app started!
    |
    */

    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function LogOut()
    {
        \Session::flush();
        return new RedirectResponse(url('/'));
    }

}