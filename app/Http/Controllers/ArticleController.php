<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Yajra\DataTables\Services\DataTables;


use App\Article;
use App\User;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $data = Article::orderBy('created_at','desc')->paginate(8);
        return view('Article', compact('data'));



     }

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
        //
        $this->validate($request,[
            'Name'=>'required',
            'Body'=>'required',
            'Image'=>'required|image|max:2048|mimes:jpg,png'

        ]);

        $image = $request->file('Image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/blog/'), $new_name);

        $article=new Article;
        $article->title=$request->input('Name');
        $article->body=$request->input('Body');
        $article->image=$new_name;

        $article->save();

        return redirect('Article')->with('success','Data Saved');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

            $editinfo = Article::findOrFail($id);
        return view('Article', compact('editinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

       $image_name = $request->input('editHiddenImage');
        $image = $request->file('editImage');
        if($image != '')
        {
            $this->validate($request,[
            'editName'=>'required',
            'editBody'=>'required',
            'editImage'=>'required|image|max:2048|mimes:jpg,png'

        ]);

        $image_name  = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('img/blog/'), $image_name);
        }
        else
        {
            $this->validate($request,[
            'editName'=>'required',
            'editBody'=>'required'

        ]);
        }

        $form_data = array(
            'title'       =>   $request->input('editName'),
            'body'        =>   $request->input('editBody'),
            'image'       =>   $image_name
        );
        
        Article::whereId($request->input('editId'))->update($form_data);

        return redirect('Article')->with('success', 'Data is successfully updated');  

          }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $data = Article::findOrFail($id);
        $data->delete();

        return redirect('Article')->with('success', 'Data is successfully deleted');
    }
}
