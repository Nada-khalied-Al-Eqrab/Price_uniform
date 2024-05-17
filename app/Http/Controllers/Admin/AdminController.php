<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        //حساب عدد الشكاوى
        $num = DB::table('complaints')->count();
        $complaints = DB::table('complaints')->get();
        $responding_num = DB::table('responding_to_complaints')->count();
        $emp = DB::table('employee')->count('E_id');
        $emp_info = DB::table('employee')->get();
        $goods_commd = DB::table('goods_commdities')->get();
        $responding_to_complaints = DB::table('responding_to_complaints')->get();
        $comp= DB::table('complaints')->orderBy('C_ID','desc')->take(4)->get();
        return view('dashboard', compact('comp','num', 'complaints', 'responding_num', 'emp', 'goods_commd', 'emp_info', 'responding_to_complaints'));
    }

    public function tables_general()
    {
        $supply_office = DB::table('supply_office')->get();
        $salepoints = DB::table('salepoints')->get();
        // $login = DB::table('login')->get();
        $employee = DB::table('employee')->get();
        $governorates = DB::table('governorates')->get();
        $num = DB::table('complaints')->count();
        $complaints = DB::table('complaints')->get();
        $comp= DB::table('complaints')->orderBy('C_ID','desc')->take(4)->get();
        return view('tables-general', compact('comp','supply_office', 'salepoints', 'employee', 'governorates', 'num', 'complaints'));
    }
    public function tables_data()
    {
        $complaints = DB::table('complaints')->get();
        $responding_to_complaints = DB::table('responding_to_complaints')->get();
        $goods_commd = DB::table('goods_commdities')->get();
        $num = DB::table('complaints')->count();
        $comp= DB::table('complaints')->orderBy('C_ID','desc')->take(4)->get();
        return view('tables-data', compact( 'comp','responding_to_complaints', 'goods_commd', 'num', 'complaints'));
    }

    public function charts_complaints()
    {
        $complaints = DB::table('complaints')->get();
        $gov = DB::table('governorates')->get();

        $myData = DB::select('select COUNT(C_ID) from complaints GROUP BY C_date_complaint');
        $comp= DB::table('complaints')->orderBy('C_ID','desc')->take(4)->get();
        // عدد الشكاوى فى كل محافظة
        $gov1=DB::table('complaints')->where('c_goe','القاهرة')->count();

        $gov2=DB::table('complaints')->where('c_goe','الاسكندرية')->count();

        $gov3=DB::table('complaints')->where('c_goe','بورسعيد')->count();

        $gov4=DB::table('complaints')->where('c_goe','السويس')->count();

        $gov5=DB::table('complaints')->where('c_goe','دمياط')->count();

        $gov6=DB::table('complaints')->where('c_goe','الدقهلية')->count();

        $gov7=DB::table('complaints')->where('c_goe','الشرقية')->count();

        $gov8=DB::table('complaints')->where('c_goe','القليوبية')->count();

        $gov9=DB::table('complaints')->where('c_goe','كفر الشيخ')->count();

        $gov10=DB::table('complaints')->where('c_goe','الغربية')->count();

        $gov11=DB::table('complaints')->where('c_goe','المنوفية')->count();

        $gov12=DB::table('complaints')->where('c_goe','البحيرة')->count();

        $gov13=DB::table('complaints')->where('c_goe','الاسماعيلية')->count();

        $gov14=DB::table('complaints')->where('c_goe','الجيزة')->count();

        $gov15=DB::table('complaints')->where('c_goe','بنى سويف')->count();

        $gov16=DB::table('complaints')->where('c_goe','الفيوم')->count();

        $gov17=DB::table('complaints')->where('c_goe','المنيا')->count();

        $gov18=DB::table('complaints')->where('c_goe','اسيوط')->count();

        $gov19=DB::table('complaints')->where('c_goe','سوهاج')->count();

        $gov20=DB::table('complaints')->where('c_goe','قنا')->count();

        $gov21=DB::table('complaints')->where('c_goe','اسوان')->count();

        $gov22=DB::table('complaints')->where('c_goe','الاقصر')->count();

        $gov23=DB::table('complaints')->where('c_goe','البحر الاحمر')->count();

        $gov24=DB::table('complaints')->where('c_goe','الوادى الجديد ')->count();

        $gov25=DB::table('complaints')->where('c_goe','مطروح')->count();

        $gov26=DB::table('complaints')->where('c_goe','شمال سيناء ')->count();

        $gov27=DB::table('complaints')->where('c_goe','جنوب سيناء')->count();



        //عدد  الشكاوى فى كل شهر
        $count_m1=DB::table('complaints')->whereMonth('C_date_complaint','=','1')->count();
        $count_m2=DB::table('complaints')->whereMonth('C_date_complaint','=','2')->count();
        $count_m3=DB::table('complaints')->whereMonth('C_date_complaint','=','3')->count();
        $count_m4=DB::table('complaints')->whereMonth('C_date_complaint','=','4')->count();
        $count_m5=DB::table('complaints')->whereMonth('C_date_complaint','=','5')->count();
        $count_m6=DB::table('complaints')->whereMonth('C_date_complaint','=','6')->count();
        $count_m7=DB::table('complaints')->whereMonth('C_date_complaint','=','7')->count();
        $count_m8=DB::table('complaints')->whereMonth('C_date_complaint','=','8')->count();
        $count_m9=DB::table('complaints')->whereMonth('C_date_complaint','=','9')->count();
        $count_m10=DB::table('complaints')->whereMonth('C_date_complaint','=','10')->count();
        $count_m11=DB::table('complaints')->whereMonth('C_date_complaint','=','11')->count();
        $count_m12=DB::table('complaints')->whereMonth('C_date_complaint','=','12')->count();

        //جمهورية مصر العربية'
        $num = DB::table('complaints')->count(); //عدد الشكاوى
        $num2 = DB::table('governorates')->count();//عدد المحافظات
        $num3 = DB::table('salepoints')->count();//عدد منافذ البيع
        $num4 = DB::table('supply_office')->count();//عدد مكاتب التموين


        return view('charts-complaints',
                    compact('comp',
                            'count_m1',
                            'count_m2',
                            'count_m3',
                            'count_m4',
                            'count_m5',
                            'count_m6',
                            'count_m7',
                            'count_m8',
                            'count_m9',
                            'count_m10',
                            'count_m11',
                            'count_m12',
                            'gov',
                            'gov1',
                            'gov2',
                            'gov3',
                            'gov4',
                            'gov5',
                            'gov6',
                            'gov7',
                            'gov8',
                            'gov9',
                            'gov10',
                            'gov11',
                            'gov12',
                            'gov13',
                            'gov14',
                            'gov15',
                            'gov16',
                            'gov17',
                            'gov18',
                            'gov19',
                            'gov20',
                            'gov21',
                            'gov22',
                            'gov23',
                            'gov24',
                            'gov25',
                            'gov26',
                            'gov27',
                            'complaints',
                            'num',
                            'num2',
                            'num3',
                            'num4',
                            'myData'));
            }

    public function my_account()
    {
        $num = DB::table('complaints')->count();
        $complaints = DB::table('complaints')->get();
        $gov = DB::table('governorates')->get();
        $user_govern = DB::table('governorates')->join('users', 'governorates.G_ID', 'users.govern_id')->where('governorates.G_ID', Auth::user()->govern_id)->first('governorates.*');
        $user_affiliated = DB::table('affiliated_entities')->join('users', 'affiliated_entities.id', 'users.affiliated_id')->where('users.affiliated_id', Auth::user()->affiliated_id)->first('affiliated_entities.*');
        $affiliated_entities = DB::table('affiliated_entities')->get();
        $comp= DB::table('complaints')->orderBy('C_ID','desc')->take(4)->get();
        return view('users-profile', compact('comp','num', 'complaints', 'gov', 'user_govern', 'affiliated_entities', 'user_affiliated'));
    }

    public function complaints()
    {
        $complaints = DB::table('complaints')->get();
        $responding_to_complaints = DB::table('responding_to_complaints')->get();
        $num = DB::table('complaints')->count();
        $comp= DB::table('complaints')->orderBy('C_ID','desc')->take(4)->get();
        return view('pages-complaints', compact('comp','complaints', 'responding_to_complaints', 'num'));
    }

    public function update_profile(Request $request)
    {
        // dd($request);
        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->affiliated_id = $request->affiliated_id;
        $user->govern_id = $request->govern_id;
        // $user->password = Auth::user()->password;
        // $user->code = Auth::user()->code;
        $user->save();
        return redirect()->back();
    }
}
