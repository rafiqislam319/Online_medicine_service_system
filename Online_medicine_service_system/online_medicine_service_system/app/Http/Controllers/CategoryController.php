<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('admin.category.add-category');
    }

    public function saveCategory(Request $request){
        $category = new Category();
        $category->category_name         = $request->category_name;
        $category->category_description  = $request->category_description;
        $category->publication_status    = $request->publication_status;
        $category->save();

        //Category::create($request->all()); another way to save data

        /*quey builder way te data save starts here*/
        //use DB;   eta ke upor e use kore nite hobe
        /*DB::table('categories')->insert([
            'category_name'   =>$request->category_name,
            'category_description'   =>$request->category_description,
            'publication_status'   =>$request->publication_status
        ]);  */
        /*quey builder way te data save ends here*/

        return redirect('/category/add')->with('message','category info save successfully');

    }


    public function manageCategoryInfo(){
        $categories = Category::all();

        //return $categories;    eta return dile json style e dekhabe
        return view('admin.category.manage-category',['categories'=>$categories]);
    }

    public function unPublishedCategoryInfo($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();
        return redirect('/category/manage')->with('message', 'Category info unpublished');
    }
    public function publishedCategoryInfo($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('/category/manage')->with('message', 'Category info published');
    }

    public function editCategoryInfo($id){

        $category = Category::find($id);
        return view('admin.category.edit-category', ['category'=>$category]);
    }

    public function updateCategoryInfo(Request $request){
        $category = Category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->publication_status = $request->publication_status;
        $category->save();
        return redirect('/category/manage')->with('message', 'Category info updated');

    }

    public  function deleteCategoryInfo($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/category/manage')->with('message', 'Category info deleted successfully');

    }

}
