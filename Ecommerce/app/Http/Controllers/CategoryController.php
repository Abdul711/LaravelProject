<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Validator;
use DB;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $otps=rand(89,456);
        $mobilenumber="92332356586";
        $arr=json_encode(array('body' =>"Hello Your Otp is $otps" ,"phone"=>$mobilenumber ));
       $url= "https://api.chat-api.com/instance343403/message?token=d1q7370j3sn889na";
       $ch = curl_init();
       curl_setopt($ch,CURLOPT_URL,$url);
       curl_setopt($ch,CURLOPT_POST,true);
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
       curl_setopt($ch,CURLOPT_POSTFIELDS,$arr);
       curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-type:application/json' ,"Content-length:".strlen($arr) ));

     $result=curl_exec($ch);
     curl_close($ch);
     echo $result;*/
     
       $data["categories"]=DB::table('categories')->get();
       return view("admin/category");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id="")
    {
        if($id>0 && $id!=""){
            $pageTitle="Update Category";
            $fontAwe="edit";
        }else{
            $pageTitle="Add Category";
            $fontAwe="trash";
            $fontAwe="plus";
        }
        $result["pageTitle"]=$pageTitle;
        $result["fontAwe"]=$fontAwe;
        return view("admin/manage_category",$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), ["categoryName"=>"required", 
         'image' => 'required'
        
        
        ]) ;
      $y=  url()->previous();
  if ($validator->fails()) {
    return redirect($y)
                ->withErrors($validator)
                ->withInput();

}else{
echo"<pre>";
          print_r($request->post());
       $image=$request->file("image");
       $ext=$image->extension();
       $image_name=time().'.'.$ext;

$dated=date('d-F-Y');
$monthed=date('F');
$ye=date("Y");
$path="/public/media/category";
DB::table('categories')->insert([
    "categories_name"=>$categoryName;
    "parentId"=>0,
    "status"=>1
    "image"=>$image_name
]);

       $image->storeAs($path,$image_name);
   /*   echo $trimmed = str_replace("/public/", ' ',$path);

          echo"</pre>";     
         echo  asset('storage/media/');
         */


}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
