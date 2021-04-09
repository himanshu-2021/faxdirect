<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function userLogin(Request $request)
    {
        return view('admin.login');
    }
    public function userRegister(Request $request)
    {
        return view('admin.register');
    }
    public function userRegisterPost(Request $request)
    {
        $validator = \Validator::make($request->all(), [
            'name'  => 'bail|required',
            'email'  => 'bail|required|unique:users|email',
            'bussiness_name'  => 'bail|required',
            'password'  => 'bail|required | min:4| max:7',
            'confirm_password' => 'bail|required|same:password|min:4',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        $date=date('d-m-Y');
        $v = array('name' => $data['name'], 'email' => $data['email'], 'bussiness_name' => $data['bussiness_name'], 'password' => Hash::make($data['password']), 'role' => 'admin','created_at'=>$date ,'updated_at'=>$date);
        if (!empty($data)) {
            try {
                $subdomain = str_replace('-','',$request['bussiness_name']);
                $subdomain_db = "fax_".$subdomain."_".str::random(9);
			DB::select('create database' .$subdomain_db);

                //DB::statement('CREATE DATABASE $subdomain_db');
                dd($subdomain_db);
                config(['database.connections.mysql2.database' => $subdomain_db]);
                DB::reconnect('mysql2');
                // $mysqlDatabaseName =config('database.connections.mysql2.database');
                // $mysqlUserName = config('database.connections.mysql2.username');
                // $mysqlPassword = config('database.connections.mysql2.password');
                // $mysqlHostName = config('database.connections.mysql2.host');
                // $mysqlImportFilename = storage_path("app/public/new1.sql");
                // $command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
                // exec($command." 2>&1",$output , $worked);
                Artisan::call('migrate', [
                    '--path'     => "database/migrations/tenant"
                ]);
                //subdomain commit into db
                $idd=DB::table('users')->insertGetId($v);

                DB::reconnect('mysql');
                $v = array_merge($v , ["database_name"=>$subdomain_db,'subdomain'=>$subdomain]);
                $idd=DB::table('users')->insertGetId($v);
                $request->session()->flash('success', 'Registration successful!');
            } catch (\Exception $e) {
                $request->session()->flash('error', $e);
                return redirect()->back();
            }
            return redirect()->back();
        } else {
            $request->session()->flash('error', 'Somthing went wrong!');
            return redirect()->back();
        }
    }
}
