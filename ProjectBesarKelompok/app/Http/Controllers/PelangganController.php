<?php
namespace App\Http\Controllers;
session_start();
use App\Pelanggan;
use App\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller {

    public function index(){
        if (!isset($_SESSION['id_pelanggan'])) {
            return redirect('pelanggan/login');
        } else {
            $check_pemesanan = count(Pemesanan::where('id_pelanggan', $_SESSION['id_pelanggan'])->get());

            if($check_pemesanan == 0){
                $pemesanan_terakhir = 0;
                $total_pemesanan = 0;
            } else {
                $row_pemesanan_terakhir = Pemesanan::where('id_pelanggan', $_SESSION['id_pelanggan'])->orderBy('id_pelanggan', 'desc')->first();
                $pemesanan_terakhir = $row_pemesanan_terakhir->total_pemesanan;
                $total_pemesanan = Pemesanan::where('id_pelanggan', $_SESSION['id_pelanggan'])->sum('total_pemesanan');
            }

            $row = Pelanggan::where('id_pelanggan', $_SESSION['id_pelanggan'])->first();
            $pelanggan = [
                'id_pelanggan' => $row['id_pelanggan'],
                'nama_pelanggan' => $row['nama_pelanggan'],
                'email_pelanggan' => $row['email_pelanggan'],
            ];
            return view('pelanggan.index', compact('pelanggan', 'pemesanan_terakhir', 'total_pemesanan'));
        }
        
        return view('pelanggan.index', compact('pelanggan'));
    }

    public static function getPelanggan(){
        if (!isset($_SESSION['id_pelanggan'])) {
            return false;
        } else {
            $row = Pelanggan::where('id_pelanggan', $_SESSION['id_pelanggan'])->first();
            $pelanggan = [
                'id_pelanggan' => $row['id_pelanggan'],
                'nama_pelanggan' => $row['nama_pelanggan'],
                'email_pelanggan' => $row['email_pelanggan'],
                'username_pelanggan' => $row['username_pelanggan'],
            ];
            return $pelanggan;
        }
    }

    public static function showLoginForm(){
        if (!isset($_SESSION['id_pelanggan'])) {
            $alert = false;
            return view('pelanggan.auth.login', compact('alert'));
        } else {
            return redirect('pelanggan');
        }
    }

    public static function login(Request $request){
    	$email_pelanggan = $request->email;
    	$password_pelanggan = md5($request->password);

    	$row = Pelanggan::where('email_pelanggan', $email_pelanggan)->where('password_pelanggan', $password_pelanggan)->exists();
    	if($row){
            $isemail_pelanggan = (int) ['email_pelanggan'];
            $ispassword_pelanggan = (int) ['password_pelanggan'];
        }

    	if($row){
            $pelanggan = Pelanggan::where('email_pelanggan', $email_pelanggan)->where('password_pelanggan', $password_pelanggan)->get();
            foreach ($pelanggan as $pelanggan) {
                $_SESSION = [
                    'id_pelanggan' => $pelanggan->id_pelanggan,
                ];
            }
            return redirect('/');
    		
    	} else {
            $alert = true;
    		return view('pelanggan.auth.login', compact('alert'));
    	}
    }

    public function showRegisterForm(){
        return view('pelanggan.auth.register');
    }

    public function register(Request $request){
        $data = [
            'nama_pelanggan' => $request->name,
            'email_pelanggan' => $request->email,
            'username_pelanggan' => $request->username,
            'password_pelanggan' => md5($request->password),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];

        Pelanggan::insert($data);

        $pelanggan = Pelanggan::where('email_pelanggan', $data['email_pelanggan'])->where('password_pelanggan', $data['password_pelanggan'])->get();

        foreach ($pelanggan as $pelanggan) {
            $_SESSION = [
                'id_pelanggan' => $pelanggan->id_pelanggan,
                'nama_pelanggan' => $pelanggan->nama_pelanggan,
                'email_pelanggan' => $pelanggan->email_pelanggan,
                'username_pelanggan' => $pelanggan->username_pelanggan,
            ];
        }
        return redirect('/');
    }

    public function logout(){
        session_destroy();

        return redirect('');
    }
}
