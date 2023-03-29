<?php

namespace App\Http\Controllers;

use App\Models\Admint;
use App\Models\Product;
use App\Models\Video;
use Illuminate\Http\Request;

class admindash extends Controller
{
    public function index()
    {
        return view('frontend.Login');
    }
    function submit_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $admin = Admint::where(['username' => $request['username'], 'password' => $request['password']])->count();
        $username = $request['username'];
        if ($admin > 0) {
            $request->session()->put('username', $username);
            session(['adminSession' => true]);
            return redirect('/admindash');
        } else {
            return redirect()->back()->withInput($request->only('username', 'remember'))->withErrors([
                'approve' => 'You have entered an invalid Username or Password !',
            ]);
        }
    }
    public function galleryview()
    {
        $products = Product::all();
        $data = compact('products');
        return view('frontend.gallerymange')->with($data);
    }
    public function videoview()
    {
        $videos = Video::all();
        $data = compact('videos');
        return view('frontend.videomange')->with($data);
    }
    public function page()
    {
        return view('frontend.addvideo');
    }
    public function store(Request $request)
    {
        $videos = new Video;
        $videos->title = $request['title'];
        $videos->link = $request['link'];
        $videos->save();
        return Redirect('/videomange');
    }
    public function delete($id)
    {
        $videos = Video::find($id)->delete();
        return redirect()->back();
    }
}
