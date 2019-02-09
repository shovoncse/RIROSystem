<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parts;
use Illuminate\Support\Facades\Storage;
use DB;
class PartManageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $parts = Parts::all();
        return view('pages.inventory.part-management')->with('parts', $parts);
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
        $this -> validate($request, [
            'partNo' => 'required',
            'taskType' => 'required',
            'usage' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('picture')){
            
            //Get File Name + Extension
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();

            //Get Just File Name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get Just Extension
            $extension = $request->file('picture')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request -> file('picture')->storeAs('public/parts_picture', $fileNameToStore);

        }else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Parts;
        $post->part_no = $request->input('partNo');
        $post->description = $request->input('description');
        $post->task_type = $request->input('taskType');
        $post->usage = $request->input('usage');
        $post->picture = $fileNameToStore;
        $post->save();

        return redirect('/addNewPart')->with('success', 'Successfully Inserted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parts= Parts::find($id);
        return view('pages.inventory.part-management')->with('parts', $parts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $parts= Parts::find($id);
        return view('pages.inventory.edit')->with('parts', $parts);
 
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
        $this -> validate($request, [
            'partNo' => 'required',
            'taskType' => 'required',
            'usage' => 'required',
            'picture' => 'image|nullable|max:1999'
        ]);

        //Handle File Upload
        if($request->hasFile('picture')){
            
            //Get File Name + Extension
            $fileNameWithExt = $request->file('picture')->getClientOriginalName();

            //Get Just File Name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            //Get Just Extension
            $extension = $request->file('picture')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request -> file('picture')->storeAs('public/parts_picture', $fileNameToStore);

        }else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = Parts::find($id);

        $post->part_no = $request->input('partNo');
        $post->description = $request->input('description');
        $post->task_type = $request->input('taskType');
        $post->usage = $request->input('usage');
        if($request->hasFile('picture')){
            $post->picture = $fileNameToStore;
        }
        $post->save();

        return redirect('/parts')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parts = Parts::find($id);
        // if(auth()->user()->id !== $post -> user_id){
        //     return redirect('/posts')->with('error', 'Unauthorized Page');

        // }
        if($parts->cover_image != 'noimage.jpg'){

            //Delete Image
            Storage::delete('public/parts_picture/'.$parts->picture);

        }
        $parts ->delete();
        return redirect('/parts')->with('success', 'Parts Removed');
    }
}
