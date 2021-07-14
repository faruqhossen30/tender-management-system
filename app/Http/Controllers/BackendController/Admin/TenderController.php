<?php

namespace App\Http\Controllers\BackendController\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TenderController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenders=DB::select("select id,department_id,catagory_id,Tender_id,location,description,security_price,budget_price,date_time,capacity,experience,turnover,credit_line from tendersupload");
        return view("backend.admin.tender.alltender",["tenders"=>$tenders]);
        // return "Tender Controller";

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types=DB::select("select id,name from department");
        $locations=DB::select("select id,name from country");
        $catagorys=DB::select("select id,name from catagory");
        return view('backend.admin.tender.upload',["types"=>$types,"locations"=>$locations,"catagorys"=>$catagorys]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $tenderid=$r->tenderid;
        $deparment=$r->selectdeparment;
        $location=$r->txtlocation;
        $description=$r->txtdescription;
        $secuprice=$r->txtsecurityprice;
        $bugetprice=$r->txtbudgetprice;
        $date_time=$r->txtdate;
        $experience=$r->txtexperience;
        $turnover=$r->txtturnover;
        $create_line=$r->txtline;
        $capacity=$r->txtcapacity;
        $tentype=$r->txttype;
        $catagory_id=$r->txtcatagory;


        DB::insert("insert into tendersupload(department_id,catagory_id,Tender_id,location,description,security_price,budget_price,date_time,capacity,experience,turnover,type,credit_line)values('$deparment','$tentype','$tenderid','$location','$description','$secuprice','$bugetprice','$date_time','$capacity','$experience','$turnover','$catagory_id','$create_line')
        ");
        return redirect('tender');
        // return $r->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tender = DB::table('tendersupload')->where('id', $id)->get()->first();

        // return compact('tender');

        return view('backend.admin.tender.show', compact('tender'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $q=DB::select("select id,department_id,catagory_id,Tender_id,location,description,security_price,budget_price,date_time,capacity,experience,turnover,credit_line from tendersupload where id='$id'");

        return view("backend.admin.tender.edittender",["tender"=>$q]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        //print_r($r->all());
          $q=DB::update("update tendersupload set Tender_id='$r->tenderid', department_id='$r->selectdeparment', location='$r->txtlocation', description='$r->txtdescription', security_price='$r->txtsecurityprice', budget_price='$r->txtbudgetprice', date_time='$r->txtdate', experience='$r->txtexperience', turnover='$r->txtturnover', credit_line='$r->txtline',capacity='$r->txtcapacity' where id='$id'");
          return redirect('tenderup');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
         $q=DB::delete("delete from tendersupload where id='$id'");
         return redirect('/tender')->with('success', 'Tender has been deleted !');
    }
}
