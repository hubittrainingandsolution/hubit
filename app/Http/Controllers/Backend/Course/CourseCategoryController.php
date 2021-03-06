<?php

namespace App\Http\Controllers\Backend\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Auth;
use Str;

class CourseCategoryController extends Controller
{
     private $category;

    public function __construct(CourseCategory $category)
    {
        $this->middleware('auth:admin')->except('logout');
        $this->category = $category;
    }

    public function index()
    {
        $data['categories'] = $this->category->latest()->get();
        return view('backend.course.courseCategory.index', $data);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|unique:course_categories'
        ]);

        $category = new CourseCategory();
        $category->title = $request->title;
        $category->slug = str::slug($request->title);
        $category->creater = Auth::guard('admin')->user()->id;
        $category->save();

        $data['categories'] = $this->category->latest()->first();
        $data['success'] = 'Added Successfully';
        return $data;
    }

    public function edit($id)
    {
        $category = $this->category->findOrFail($id);
        return $category;
    }

    public function update(Request $request, $id)
    {
        $cat = $this->category->findOrFail($id);
        $this->validate($request, [
            'title' => 'required|unique:course_categories,title,' . $id,
        ]);

        $category = $this->category->findOrFail($id);
        $category->title = $request->title;
        $category->slug = str::slug($request->title);
        $category->updater = Auth::guard('admin')->user()->id;
        $category->save();

        $data['categories'] = $this->category->latest()->first();
        $data['success'] = 'Updated Successfully';
        return $data;
    }

    public function destroy($id)
    {
        $company_category = $this->category->findOrFail($id);
        $company_category->delete();
        return "#courseCategory".$id;
    }

    public function changeStatus(Request $request)
    {
        $category = $this->category->findOrFail($request->category_id);
        $category->status = $request->status;
        $category->save();
        $data['success'] =  "Status Changed Successfully";
        return $data;
    }
}
