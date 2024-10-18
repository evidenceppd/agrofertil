<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\PostCategoriesPosts;
use App\Models\PostCategories;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Validator;

class CategoriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        if(Auth::user()->role == 2) {
            $categories = PostCategories::orderby('updated_at', 'desc')->get();
            return view('admin.categories.index', [
                'categories' => $categories
            ]
            );
        }
        else {
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }

    }


    public function create(Request $request) {
        if(Auth::user()->role == 2) {
            return view('admin.categories.edit');
        }
        else {
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }
    }

    public function edit(Request $request, PostCategories $category) {
        if(Auth::user()->role == 2) {
            $category = PostCategories::find($category->id);
            return view('admin.categories.edit', ['category' => $category]);
        }
        else {
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }
    }

    public function store(Request $request) {
        if(Auth::user()->role == 2) {

            if ($request->hasFile('main_image')) {
                $imagem = $request->file('main_image');
                $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
                $imagem->move(public_path('/images/uploads/category/'.Str::slug($request->category)), $nomeImagem);
            }
            else {
                $nomeImagem = null;
            }

           $category = PostCategories::create([
                'user_id' => Auth::user()->id,
                'category' => $request->category,
                'description' => $request->description,
                'main_image' => $nomeImagem,
                'url' => Str::slug($request->category),
                'tags' => $request->tags,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

          
          

            $category->save();

            if($category->save()) {
                return redirect(route('categories.index'))->with('success', 'Categoria '.$category->title.' foi criada com sucesso!');
            } 
            else {
                return redirect()->back()->with('error', 'Não foi possível cadastrar essa Categoria, verifique e tente novamente.');
            }

        } else {
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }
}

public function update(Request $request, PostCategories $category) {
    if(Auth::user()->role == 2) {

        if ($request->hasFile('main_image')) {
    $caminhoPasta = public_path('images/uploads/category/'.$category->url.'/'.$category->main_image);
            if(File::exists($caminhoPasta)) {
                File::delete($caminhoPasta);
            }
            $imagem = $request->file('main_image');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $imagem->move(public_path('/images/uploads/category/'.Str::slug($request->category)), $nomeImagem);
        }
        else {
            $nomeImagem = $category->main_image;
        }

        $category = PostCategories::find($category->id);

       $category->update([
            'user_id' => Auth::user()->id,
            'category' => $request->category,
            'description' => $request->description,
            'main_image' => $nomeImagem,
            'url' => Str::slug($request->category),
            'tags' => $request->tags,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $category->save();

        if($category->save()) {
            return redirect(route('categories.index'))->with('success', 'Categoria '.$category->category.' foi atualizada com sucesso!');
        } 
        else {
            return redirect()->back()->with('error', 'Não foi possível cadastrar publicação, verifique e tente novamente.');
        }

    } else {
        return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
    }
}





public function destroy(Request $request, $id)
{
    if(Auth::user()->role == 2) {
    $category = PostCategories::findOrFail($id);
$caminhoPasta = public_path('images/uploads/category/'.$category->url);
if(File::exists($caminhoPasta)) {
    File::deleteDirectory($caminhoPasta);
}
    $category->delete();

    if($category->delete()) {
        return redirect(route('posts.index'))->with('success', 'Publicação '.$category->title.' foi criada com sucesso!');
    }
    
    else {
        return redirect()->back()->with('error', 'Não foi possível deletar a publicação, tente novamente.');
    }

    // Redirecionar ou retornar a resposta adequada
} else {
    return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
}
}

public function update_remove_image(Request $request, PostCategories $category) {
    $category = PostCategories::find($category->id);
    $caminhoPasta = public_path('images/uploads/category/'.$category->url.'/'.$category->main_image);
    
    $category->update([
        'main_image' => null,
    ]);

    if(File::exists($caminhoPasta)) {
        File::delete($caminhoPasta);
    }

    $category->save();

    if($category->save()) {
        return redirect()->back()->with('success', 'Imagem removida da publicação '.$category->category.' com sucesso!');
    }
    else {
        return redirect()->back()->with('error', 'Não foi possível remover a imagem. Tente novamente.');
    }
}


}
