<?php

namespace App\Http\Controllers;

use App\Models\Take;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class TakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('landing.landing');
    }
    public function login(){
        return view('login.login');
    }
    public function payment(){
        $takes = Take::all();
        $takes = Http::get('https://akmalweb.my.id/api/payment/')->json();
        return view('dashboard.payment', compact('takes'));
    }
  
    public function loginAccount(Request $request){
        //   dd($request->all());
        $request->validate([
            'password' => 'required|min:1',
            'jeniskelamin' => 'required',
            'nama' => 'required',
            'sekolah' => 'required',
            'email' => 'required|email:dns',
            'nomor' => 'required',
            'noayah' => 'required',
            'noibu' => 'required',
        ]);
        User::create([ 
            'password' => bcrypt($request->password),
            'jeniskelamin' => $request->jeniskelamin,
            'nama' => $request->nama,
            'sekolah' => $request->sekolah,
            'email' => $request->email,
            'nomor' => $request->nomor,
            'noayah' => $request->noayah,
            'noibu' => $request->noibu,
            'done_time' => \Carbon\Carbon::now(),
            'role' => 'user'
         
         ]);
         return redirect('/downloadPDF');
    }
    
    public function auth(Request $request){
        // dd($request->all());
    $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ],[
            'email.exists' => 'email ini belum tersedia',
                'email.required' => 'email harus diisi',
               'password.required' => 'password harus diisi',
        ]);
        $user =$request->only('email', 'password');
        if(Auth::attempt($user)) {
            return redirect()->route('payment');
        }else{
            return redirect()->back()->with('error', 'Gagal login, silahkan cek kembali');
        }
      }

    public function dashboard(){
        $takes = Take::all();
        return view('dashboard.dashboard', compact('takes'));
    }
    public function detail(){
        $takes = User::all();
        return view('dashboard.detail', compact('takes'));
   }

   public function image(){
$takes = Take::all();
    return view('dashboard.bukti', compact('takes'));
   }
    public function pendaftaran(Request $request)
    {
        $takes = Http::get('https://akmalweb.my.id/api/daftar_smp.php')->json();
        return view('form.pendaftaran', compact('takes'));
    }
    public function pdf(){
        $takes  = User::all();
        return view('pdf.pdf', compact('takes'));
    }
    public function error(){
        return view('landing.error');
    }
    public function updateCompleted($id)
    {
        
        Take::where('user_id', $id)->update([
            'status' => 'validasi',
            'done_time' => \Carbon\Carbon::now(),
        ]);
        return redirect()->back()->with('done', 'Pembayaran sudah di verifikasi');
    }

    public function updateRefuse($id){
        Take::where('user_id', $id)->update([
            'status' => 'tolak',
            'done_time' => \Carbon\Carbon::now(),
        ]);
        return redirect()->back()->with('tolak', 'Pembayaran telah ditolak');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
//    public function downloadPDF(){
//     $takes = take::all();
//     $data = 
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'bank' => 'required',
            'pemilik' => 'required',
            'nominal' => 'required',
            'bukti' => 'required|image|mimes:jpg,png,jpeg,gif,svg',

        ]);
        $image = $request->file('bukti');
    $imgName = time(). rand().'.'.$image->extension();

    if(!file_exists(public_path('/assets/img/'.$image->getClientOriginalName()))){
       $destinationPath = public_path('/assets/img/');

       $image->move($destinationPath, $imgName);
       $uploaded = $imgName;
    } else {
       $uploaded = $image->getClientOriginalName();
    }

        Take::create([
            'user_id' => Auth::user()->id,
            'bank' => $request->bank,
            'pemilik' => $request->pemilik,
            'nominal' => $request->nominal,
            'bukti' => $uploaded,
            'status' => 'proses',
        ]);

        return redirect('/payment')->with('waitPay', 'silahkan tunggu verifikasi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function show(Take $take)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function edit(Take $take)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Take $take)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Take::find($id)->delete();

        return redirect('/dashboard ')->with('tolak', 'Pembayaran telah ditolak');
    }
}
