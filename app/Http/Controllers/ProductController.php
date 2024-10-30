<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ProductController extends Controller
{
	public function home(): View
	{
		$products = DB::table("products")->get();
		return view("pages.product.home", [
			"products" => $products
		]);
	}

	public function create(Request $request): View | Redirector | RedirectResponse
	{
		if (isset($request) && !empty($request->input("student_id"))) {
			$student_id = $request->input("student_id");
			$name = $request->input("name");

			$product = DB::table("products")->where("student_id", $student_id)->first();
			if (empty($product)) {
				$product = DB::table("products")->insert([
					"student_id" => $student_id,
					"name" => $name,
					"status" => 4
				]);
				return redirect("/");
			} else {
				throw ValidationException::withMessages([
					"name" => "Student already exists"
				]);
			}
		}

		return view("pages.product.create");
	}

	public function edit($id): View | Redirector | RedirectResponse
	{
		$product = DB::table("products")->where("id", $id)->first();
		if (isset($product) && !empty($product)) {
			if (isset($_POST) && !empty($_POST)) {
				$student_id = $_POST["student_id"];
				$name = $_POST["name"];
				$status = $_POST["status"];

				DB::table("products")->where("id", $id)->update([
					"student_id" => $student_id,
					"name" => $name,
					"status" => $status
				]);
				return redirect("/");
			}
		} else {
			return redirect("/");
		}

		return view("pages.product.edit", [
			"student_id" => $id,
			"student" => $product
		]);
	}

	public function delete($id)
	{
		DB::table('products')->where('id', $id)->delete();
		return redirect("/");
	}
}
