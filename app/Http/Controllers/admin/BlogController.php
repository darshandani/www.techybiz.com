<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\BlogModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Helpers\Datatable\SSP;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function blog()
    {
        return view('backend.blog');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function bloglist()
    {
        $bloglists = BlogModel::all();
        return view('backend.bloglisting', ['bloglists' => $bloglists]);
    }

    public function frontendblog()
    {
        $bloglists = BlogModel::all();
        return view('frontend.blog-grid', ['bloglists' => $bloglists]);
    }

    //store
    public function blogstore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'mimes:jpeg,jpg,png,gif|required',
            'title' => 'required|unique:blogs',
            'description' => 'required|unique:blogs',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $blog = BlogModel::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $ext = strtolower($file->getClientOriginalExtension());
                $filename = $blog->id . '.' . $ext;
                $targetPath = BLOG_PATH;
                $file->move($targetPath, $filename);
                $blog->image = $filename;
                $blog->save();
            } else {
                return redirect('blog')->with("image", "Uploaded image is not valid.");
            }
        }

        return redirect()->route('blog')->with('success', 'Your Blog Successfully Added');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // dd($id);
        $blog = BlogModel::find($id);
        // dd($faq);
        $imagepath = BLOG_ROOT . $blog->image;
        $image = "<img class='w-25' src='" . $imagepath . "'>";
        if ($blog) {
            return response()->json(['status' => true, 'image' => $image, 'title' => $blog->title,  'description' => $blog->description]);
        } else {
            return response()->json(['status' => false, 'message' => 'Blog not found.']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = BlogModel::findOrFail($id);
        return view('backend.editblog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'mimes:jpeg,jpg,png,gif',
            'title' => 'required|unique:blogs,title,' . $id,
            'description' => 'required|unique:blogs,description,' . $id,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $blog = BlogModel::findOrFail($id);
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $ext = strtolower($file->getClientOriginalExtension());
                $filename = $blog->id . '.' . $ext;
                $targetPath = BLOG_PATH;
                $file->move($targetPath, $filename);
                $blog->image = $filename;
            } else {
                return redirect('blog')->with("image", "Uploaded image is not valid.");
            }
        }

        $blog->save();


        return redirect()->route('blog.bloglist')->with('success', 'Your Blog Successfully Added');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $faq = BlogModel::find($id);

        if ($faq) {
            $faq->delete();

            return response()->json(['status' => true, 'msg' => 'FAQ Delete Successfully.']);
        } else {
            return response()->json(['status' => false, 'msg' => 'FAQ Delete Failed.']);
        }
    }



    public function getdata()
    {

        $table = 'blogs';
        $primaryKey = 'id';

        $columns = [

            [
                'db' => 'image',
                'dt' => 'image',
                'field' => 'image',
                'formatter' => function ($d, $row) {
                    return '<img class="w-50" src="' . BLOG_ROOT . $d . '"  alt="img">';
                }

            ],
            ['db' => 'title', 'dt' => 'title', 'field' => 'title'],
            ['db' => 'description', 'dt' => 'description', 'field' => 'description'],
            [
                'db' => 'id', 'dt' => 'delete', 'field' => 'delete',
                'formatter' => function ($d, $row) {
                    return '
                    <button class="btn  btn-sm view-blog" title="Click to view" data-id="' . $d . '"> <i class="fa-solid fa-eye text-primary"></i></button>
                    <a href="' . route('blog.edit', $d) . '" title="Click to edit" class="btn btn-sm"><i class="fa-solid fa-pen text-success"></i></a>
                    <button  data-id="' . $d . '" class="btn btn-sm sk"><i class="fa-solid fa-trash text-danger"></i></button>';
                }

            ],
        ];

        $sql_details = [
            'user' => config('database.connections.mysql.username'),
            'pass' => config('database.connections.mysql.password'),
            'db' => config('database.connections.mysql.database'),
            'host' => config('database.connections.mysql.host')
        ];

        $joinQuery = "";
        $extraWhere = "";
        $groupBy = "";

        echo json_encode(
            SSP::simple($_GET, $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraWhere, $groupBy)
        );
    }
}
