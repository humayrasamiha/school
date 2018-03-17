<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;

use App\Models\AdminModel;

use App\News;

use App\Notes;

use App\addNotice;

use App\Http\Requests;

class Admin extends Controller
{
    
    public function login(){

    	return view('admin.login');
    }

    public function login2(Request $data){

    	 $email=$data->email;

  		$password=$data->password;

  		$users = DB::table('admin_models')->where([

  			['email', '=', $email],

  			['password', '=', $password],

				])->get();

  		if($users){

    			return view('admin.admin');
    		}

    	
    		}


          public function addnews(){

          return view('admin.add_news');

          }



          public function addNew(Request $data){

            $model= new News();
            
            $model->title=$data->title;

            $model->description=$data->description;

            $model->save();

           return view('admin.add_news');



            

          }

        public function maintainnews(){

         $users = DB::table('news')->get();

         return view('admin.maintain_news', ['users' => $users]);
          

          }
          
          public function delete($id){

          DB::table('news')->where(['id'=>$id])->delete();

          return redirect('admin.maintain_news');

          }

          public function addnotice(){

          return view('admin.add_notice');
          
          }

          // public function addNotice(Request $data2){

          //   $model2= new Notice2();

          //   $model2->date=$data2->date;
            
          //   $model2->noticetitle=$data2->noticetitle;

          //   $model2->noticedescription=$data2->noticedescription;

          //   $model2->save();

          //  return view('admin.add_notice');

          

            

          // }




}
