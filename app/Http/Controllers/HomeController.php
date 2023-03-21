<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\Access;
use App\Models\Selection;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $access = Access::where('tokens', csrf_token())->first();
        if($access != null){
            $selections = Selection::where('accesses_id', $access->id)->get();
            
            foreach($selections as $selection){
                $essentials = $selection->essentials;
                $marketing = $selection->marketing;
                $preferences = $selection->preferences;
                $analysis = $selection->analysis;
            }

            if($marketing == '1'){
                $marketing = '';
            }else{
                $marketing = null;
            }

            if($analysis == '1'){
                $analitycs1 = '';
                $analitycs2 = 'G-5CNSHPT6QM';
                $clarity = '';
            }else {
                $analitycs1 = null;
                $analitycs2 = null;
                $clarity = null;
            }
        }else{
            $marketing = '';
            $analitycs1 = '';
            $analitycs2 = 'G-5CNSHPT6QM';
            $clarity = '';
        }
        $date = Carbon::now()->format('Y');
        return view('home', compact('date', 'marketing', 'analitycs1', 'analitycs2', 'clarity'));
    }
    public function privacity()
    {
        $access = Access::where('tokens', csrf_token())->first();
        if($access != null){
            $selections = Selection::where('accesses_id', $access->id)->get();
            foreach($selections as $selection){
                $essentials = $selection->essentials;
                $marketing = $selection->marketing;
                $preferences = $selection->preferences;
                $analysis = $selection->analysis;
            }

            if($marketing == '1'){
                $marketing = '';
            }else{
                $marketing = null;
            }

            if($analysis == '1'){
                $analitycs1 = '';
                $analitycs2 = 'G-5CNSHPT6QM';
                $clarity = '';
            }else {
                $analitycs1 = null;
                $analitycs2 = null;
                $clarity = null;
            }
        }else{
            $marketing = '';
            $analitycs1 = '';
            $analitycs2 = 'G-5CNSHPT6QM';
            $clarity = '';
        }
        $date = Carbon::now()->format('Y');
        return view('privacity', compact('date', 'marketing', 'analitycs1', 'analitycs2', 'clarity'));
    }
    public function cookies()
    {
        $access = Access::where('tokens', csrf_token())->first();
        if($access != null){
            $selections = Selection::where('accesses_id', $access->id)->get();
            foreach($selections as $selection){
                $essentials = $selection->essentials;
                $marketing = $selection->marketing;
                $preferences = $selection->preferences;
                $analysis = $selection->analysis;
            }

            if($marketing == '1'){
                $marketing = '';
            }else{
                $marketing = null;
            }

            if($analysis == '1'){
                $analitycs1 = '';
                $analitycs2 = 'G-5CNSHPT6QM';
                $clarity = '';
            }else {
                $analitycs1 = null;
                $analitycs2 = null;
                $clarity = null;
            }
        }else{
            $marketing = '';
            $analitycs1 = '';
            $analitycs2 = 'G-5CNSHPT6QM';
            $clarity = '';
        }
        $date = Carbon::now()->format('Y');
        return view('cookies', compact('date', 'marketing', 'analitycs1', 'analitycs2', 'clarity'));
    }
    public function contact()
    {
        $access = Access::where('tokens', csrf_token())->first();
        if($access != null){
            $selections = Selection::where('accesses_id', $access->id)->get();
            foreach($selections as $selection){
                $essentials = $selection->essentials;
                $marketing = $selection->marketing;
                $preferences = $selection->preferences;
                $analysis = $selection->analysis;
            }

            if($marketing == '1'){
                $marketing = '';
            }else{
                $marketing = null;
            }

            if($analysis == '1'){
                $analitycs1 = '';
                $analitycs2 = 'G-5CNSHPT6QM';
                $clarity = '';
            }else {
                $analitycs1 = null;
                $analitycs2 = null;
                $clarity = null;
            }
        }else{
            $marketing = '';
            $analitycs1 = '';
            $analitycs2 = 'G-5CNSHPT6QM';
            $clarity = '';
        }
        $date = Carbon::now()->format('Y');
        return view('contact', compact('date', 'marketing', 'analitycs1', 'analitycs2', 'clarity'));
    }

    public function form(Request $request)
    {
        $recaptcha = 'g-recaptcha-response';

        if($request->privacity != 'true'){
            return redirect()->back()->with('danger', 'Debes aceptar la política de privacidad')->with('advice', 'Revisa los errores');
        }else{
            if($request->name == null){
                return redirect()->back()->with('danger', 'Debes completar todos los campos')->with('advice', 'Revisa los errores');
            }
            if($request->email == null){
                return redirect()->back()->with('danger', 'Debes completar todos los campos')->with('advice', 'Revisa los errores');
            }
            if($request->phone == null){
                return redirect()->back()->with('danger', 'Debes completar todos los campos')->with('advice', 'Revisa los errores');
            }
            if($request->message == null){
                return redirect()->back()->with('danger', 'Debes completar todos los campos')->with('advice', 'Revisa los errores');
            }
            if($request->recaptcha == null){
                return redirect()->back()->with('danger', 'Debes marcar No soy un robot')->with('advice', 'Revisa los errores');
            }

            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            $text = $request->message;
            
            Mail::mailer('smtp3')->to('cursos-online@academiatecnas.com')->send(new Message($name, $email, $text, $phone));
            // Mail::mailer('smtp3')->to('a.lopez@consultoria-coremkt.com')->send(new Message($name, $email, $text));
        }
        return redirect()->back()->with('success', '¡Gracias por el mensaje!');
    }
    public function session(Request $request)
    {
        $url = url()->previous();

        $accesses = new Access();
        $accesses->tokens = $request->_token;
        $accesses->save();

        $accesses_id = $accesses->id;    
        
        $selection = new Selection();
        
        if($request->marketing != null){
            $selection->marketing = '1';
            $selection->accesses_id = $accesses_id;
        }

        if($request->analysis != null){
            $selection->analysis = '1';
            $selection->accesses_id = $accesses_id;
        }

        if($request->marketing == null){
            $selection->marketing = '0';
            $selection->accesses_id = $accesses_id;
        }

        if($request->analysis == null){
            $selection->analysis = '0';
            $selection->accesses_id = $accesses_id;
        }

        $selection->save();
        
        return redirect()->away($url);
    }
}