<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\CommonService;
use App\Services\FormService;
use App\Services\HelperService;
class BlogController extends Controller
{
    protected $formService;
    protected $helperService;
    protected $commonService;
    protected $blog;

    public function __construct(
        FormService $formService,
        HelperService $helperService,
        CommonService $commonService,
        Blog $blog
    ) {
        $this->formService = $formService;
        $this->helperService = $helperService;
        $this->commonService = $commonService;
        $this->blog = $blog;
    }




    public function getList()
    {
        $list = Blog::all();
        return view('admin.blogs.list', ['list' => $list]);
    }

    public function getAddBlog()
    {
        $blog = $this->blog;
        $data = $this->formService->getBlogForm($blog);
        return view('admin.blogs.create', compact('data', 'blog'));
    }

    public function getEditBlog($id)
    {
        $blog = Blog::find($id);
        $data = $this->formService->getBlogForm($blog);
        return view('admin.blogs.create', compact('data', 'blog'));
    }

    public function save(BlogRequest $request)
    {
        try {
            $id = $request->id;

            // upload blog image
            $request = $request->hasFile('image') ? $this->helperService->uploadImage($request, 'image', 'assets/images/blogs/',350,300) : $request->all();
            if ($id == null) {
                $this->commonService->createData($request, $this->blog);
            } else {
                $oldImage = Blog::find($id)->image;
                if ($request['image'] != null && $request['image'] != $oldImage) {
                    unlink(public_path('assets/images/blogs/' . $oldImage));
                }
                $this->commonService->updateData($request, Blog::find($id));
            }
            $this->helperService->toastr($id ? 'Blog Yazısı Güncellendi' : 'Blog Yazısı Eklendi', 'success');
            return redirect()->route('blog.list');
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('blog.list');
        }
    }

    public function deleteBlog($id)
    {
        try {
            $blog = Blog::find($id);
            $response = $this->commonService->deleteData($blog, 'assets/images/blogs/' . $blog->image);
            if ($response) {
                $this->helperService->toastr('Blog Yazısı Silindi!', 'success');
                return redirect()->route('blog.list');
            }
        } catch (\Throwable $th) {
            $this->helperService->toastr('Hata :' . $th->getMessage(), 'error');
            return redirect()->route('blog.list');
        }
    }
}
