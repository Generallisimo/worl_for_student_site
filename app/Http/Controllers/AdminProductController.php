<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

use function Pest\Laravel\delete;

class AdminProductController extends Controller
{
    public function AdminProduct(){
        // вывод из бд 
        $products = Product::all();
        // вывод страницы и компонента который отвечает в себе за все товары
        return view('admin_panel/products/product', compact('products'));
    }

    // фун для добавления продуктов (шаблон)
    public function AdminAddProduct(){
        $categories = Category::all();
        return view('admin_panel/products/product_add', compact('categories'));
    }
    // фун для добавления в бд 
    public function AdminAddNewProduct(Request $request){

        // далее мы создаем картинку и получаем её разрешение с временем
        $images = time()."".$request->image->extension();
        // переносим картинку в папку в директории public
        $request->image->move(public_path('images'), $images);
        // далее создаем продукт
        $product = new Product();
        // выводим наши значения из полученых полей в бд
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->image = $images;
        $product->category_id = $request->category_id;
        // сохраняем
        $product->save();
        // проверка на выход
        // dd($request);
        // осуществаляем редирект и успешное сообщение
        return redirect()->route('admin_product')->with('success','Successfull add new product');
    }
    // фун для удаления продукта
    public function AdminDeleteProduct($id){
        // проводим поиск по файлу где распаложена кнопка
        $product = Product::findOrFail($id);
        // удаляем
        $product->delete();
        return redirect()->route('admin_product')->with('success', 'Delete product');
    }
    // фун для обновлнеия шаблон
    public function AdminUpdateProduct($id){
        $products = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin_panel/products/product_update', compact('products', 'categories'));
    }
    // фун для изменения 
    public function AdminEditProduct(Request $request, $id){
        $products = Product::findOrFail($id);
        // обновить продукт в соответствии с отправленными данными
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->category_id = $request->input('category_id');
        // обновить изображение продукта, если пользователь загрузил новое изображение
        if ($request->hasFile('image')) {
            // проверяем, является ли загруженный файл изображением
            $this->validate($request, [
            'image' => 'image'
            ]);
            // получить расширение загруженного файла изображения
            $extension = $request->file('image')->getClientOriginalExtension();

            // создать уникальное имя файла изображения
            $filename = uniqid() . '.' . $extension;

            // переместить загруженное изображение в папку public/images
            $request->file('image')->move(public_path('images'), $filename);

            // обновить имя файла изображения продукта
            $products->image = $filename;
        }
        // сохранить обновленный продукт в базе данных
        $products->save();

        // перенаправить администратора на страницу со списком продуктов
        return redirect()->route('admin_product')->with('success', 'Product updated successfully.');
    }
}
