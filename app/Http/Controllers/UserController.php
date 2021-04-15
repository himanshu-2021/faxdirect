<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('admin_dashboard');
    }
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
            'bussiness_name'  => 'bail|required|unique:users,subdomain',
            'password'  => 'bail|required | min:4| max:7',
            'confirm_password' => 'bail|required|same:password|min:4',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data = $request->all();
        $date=date('Y-m-d H:i:s');
        $v = array('name' => $data['name'], 'email' => $data['email'], 'bussiness_name' => $data['bussiness_name'], 'password' => Hash::make($data['password']), 'role' => 'admin','created_at'=>$date ,'updated_at'=>$date);
        if (!empty($data)) {
            try {
                $subdomain = str_replace(' ','_',$request['bussiness_name']);
                //$subdomain = explode(' ',$request['bussiness_name']);
                //dd($subdomain[0]);
                $subdomain_db = "fax_".$subdomain."_".str::random(6);
                DB::statement("CREATE DATABASE $subdomain_db");
                config(['database.connections.mysql2.database' => $subdomain_db]);
                //$data=DB::reconnect('mysql2');

                //$mysqlDatabaseName =config('database.connections.mysql2.database');
                $mysqlUserName = config('database.connections.mysql.username');
                $mysqlPassword = config('database.connections.mysql.password');
               // $mysqlHostName = config('database.connections.mysql2.host');
               //first way to copy data
                //$mysqlImportFilename = storage_path("app/public/faxdirect_dummy.sql"); //replace daily after work if you change/modify the database structure
                //$command='mysql -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' < ' .$mysqlImportFilename;
                //exec($command." 2>&1",$output , $worked);
                // second way to copy data
                $copy_db='faxdirect_dummy';  //in miner case may be not connected at run time.
                exec("mysqldump -u $mysqlUserName --password=$mysqlPassword $copy_db | mysql -u $mysqlUserName -p$mysqlPassword $subdomain_db");

                //another way but not testing as working
                //    $s= \Artisan::call('migrate', [
                //         '--path'     => "database/migrations/tenant",
                //         '--force' => true
                //     ]);


                //subdomain commit into db
                // try{
                // $idd=DB::table('users')->insertGetId($v);
                // }catch(Exception $e){
                //     dd($e);
                // }
                // dd($v);

                DB::reconnect('mysql');
                $insertData = array_merge($v , ["database_name"=>$subdomain_db,'subdomain'=>$subdomain]);
                try{
                    $id=DB::table('users')->insertGetId($insertData);
                }catch(Exception $e){
                    dd($e);
                }
                $request->session()->flash('success', 'Registration successful! Please login to continue');
                $connection = DB::reconnect('mysql2');
                $id=$connection->table('users')->insertGetId($insertData);
                return redirect('http://'.$subdomain.'.'.request()->getHttpHost().'/public/login');
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
    public function testCommand(Request $request)
    {
        // $mysqlUserName ='faxdirect_admin';
        // $mysqlPassword='faxdirect@321';
        // $copy_db='faxdirect_dummy';
        // $subdomain_db='fax_nota_bene_peUpDR';
        // exec("mysqldump -u faxdirect_admin --password=faxdirect@321 faxdirectadmin | mysql -u faxdirect_admin -pfaxdirect@321 faxdirect");

        //exec("mysqldump -u $mysqlUserName --password=$mysqlPassword $copy_db | mysql -u $mysqlUserName -p$mysqlPassword $subdomain_db");

                // try{
                //     $d= DB::statement("CREATE DATABASE testing_database");
                // }catch(Exception $e){
                //     dd($e);
                // }
        dd('success');
    }
}
