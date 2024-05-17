<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainPageController extends Controller
{
    public function index()
    {
        $goods_commd = DB::table('goods_commdities')->get();
        $gov = DB::table('governorates')->get();
        //لعرض عدد الزيارات
        $views = session('view', 0);
        $views++;
        session(['view' => $views]);
        return view('index', compact('goods_commd', 'gov'));
    }

    public function insert_Com(Request $request)
    {
        $id = DB::table('complaints')->count() + 1;
        DB::table('complaints')->insert([
            'C_ID' => $id,
            'C_name' => $request->name,
            'C_email' => $request->email,
            'C_whats_up' => $request->phone,
            'C_text_of_the_complaint' => $request->message,
            'C_dealers_address' => $request->address,
            'C_item_complained' => $request->item,
            'C_date_complaint' => now(),
            'c_goe' => $request->geo,
        ]);

        return response()->json(['success' => "تم ارسال الشكوى بنجاح ", 200]);
    }
}
