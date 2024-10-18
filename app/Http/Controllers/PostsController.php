<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\PostCategoriesPosts;
use App\Models\PostCategories;
use Auth;
use DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Validator;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request) {
        if(Auth::user()->role == 2) {
            $posts = Posts::orderby('updated_at', 'desc')->get();
            return view('admin.posts.index', [
                'posts' => $posts
            ]
            );
        }
        else {
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }

    }


    public function create(Request $request) {
        if(Auth::user()->role == 2) {
            $categories = PostCategories::all();
            return view('admin.posts.edit', ['categories' => $categories]);
        } else{
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }
    }

    public function edit(Request $request, Posts $post) {
        if(Auth::user()->role == 2) {
            $postsverifica = PostCategoriesPosts::where('posts_id', '=', $post->id)->get();
            $categories = PostCategories::all();
            $post = Posts::find($post->id);
            $images = DB::table('blog_galeria')->where('id_blog', '=', $post->id)->get();
            return view('admin.posts.edit', ['categories' => $categories, 'post' => $post, 'postsverifica' => $postsverifica, 'images' => $images]);
        }
        else {
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }
    }

    public function store(Request $request) {
        if(Auth::user()->role == 2) {
            $validator = Validator::make($request->all(), [
                'category_id' => ['array', 'min:1'],
                'category_id.*' => ['integer', 'exists:post_categories,id'],
            ]);

            if ($request->hasFile('main_image')) {
                $imagem = $request->file('main_image');
                $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
                $imagem->move(public_path('/images/uploads/blog/'.Str::slug($request->title)), $nomeImagem);
            }
            else {
                $nomeImagem = null;
            }

            $statement = DB::select("SHOW TABLE STATUS LIKE 'posts'");
            $nextId = $statement[0]->Auto_increment;

            if($request->hasFile('img') && count($request->file('img')) > 0) {
                foreach($request->file('img') as $images) {
                $images->move(public_path('/images/uploads/galeria/'.Str::slug($request->title)), md5($images->getClientOriginalName()).'.'.$images->getClientOriginalExtension());

                DB::table('blog_galeria')->insert([
                    'id_blog' => $nextId,
                    'titulo' => Str::slug($request->title),
                    'img' => md5($images->getClientOriginalName()).'.'.$images->getClientOriginalExtension(),
                ]);

                }
            }

           $post = Posts::create([
                'published' => isset($request->published) ? 1 : 0,
                'user_id' => Auth::user()->id,
                'title' => $request->title,
                'content' => $request->content,
                'main_image' => $nomeImagem,
                'url' => Str::slug($request->title),
                'tags' => $request->tags,
                'author' => isset($request->author) ? $request->author : Auth::user()->name,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

          
            if(isset($request->category_id)) {
            foreach ($request->category_id as $value) {
                $post->categories()->attach($value);
            }
        }

            $post->save();

            if($post->save()) {
                return redirect(route('posts.index'))->with('success', 'Publicação '.$post->title.' foi criada com sucesso!');
            } 
            elseif($validator->fails() || !$post->save()) {
                return redirect()->back()->with('error', 'Não foi possível cadastrar Publicação, verifique e tente novamente.');
            }

        } else {
            return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
        }
}

public function update(Request $request, Posts $post) {
    if(Auth::user()->role == 2) {
        $validator = Validator::make($request->all(), [
            'category_id' => ['array', 'min:1'],
            'category_id.*' => ['integer', 'exists:post_categories,id'],
        ]);

        if ($request->hasFile('main_image')) {
            $caminhoPasta = public_path('images/uploads/blog/'.$post->url.'/'.$post->main_image);
            if(File::exists($caminhoPasta)) {
                File::delete($caminhoPasta);
            }
            $imagem = $request->file('main_image');
            $nomeImagem = time() . '.' . $imagem->getClientOriginalExtension();
            $imagem->move(public_path('/images/uploads/blog/'.Str::slug($request->title)), $nomeImagem);
        }
        else {
            $nomeImagem = $post->main_image;
        }

        $post = Posts::find($post->id);

        
        if($request->hasFile('img') && count($request->file('img')) > 0) {
            foreach($request->file('img') as $images) {
            $images->move(public_path('/images/uploads/galeria/'.Str::slug($request->title)), md5($images->getClientOriginalName()).'.'.$images->getClientOriginalExtension());

            DB::table('blog_galeria')->insert([
                'id_blog' => $post->id,
                'titulo' => $post->url,
                'img' => md5($images->getClientOriginalName()).'.'.$images->getClientOriginalExtension(),
            ]);


            }
        }



       $post->update([
            'published' => isset($request->published) ? 1 : 0,
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content,
            'main_image' => $nomeImagem,
            'url' => Str::slug($request->title),
            'tags' => $request->tags,
            'author' => isset($request->author) ? $request->author : Auth::user()->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $value =  $request->input('category_id');
                $post->categories()->sync($value);

        $post->save();

        if($post->save()) {
            return redirect()->back()->with('success', 'Publicação '.$post->title.' foi atualizada com sucesso!');
        } 
        elseif($validator->fails() || !$post->save()) {
            return redirect()->back()->with('error', 'Não foi possível cadastrar publicação, verifique e tente novamente.');
        }

    } else {
        return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
    }
}

public function remove(Request $request, $post, $img) {
    if(Auth::user()->role == 2) {
    DB::table('blog_galeria')->where('id', '=', $img)->delete();
    return redirect()->back()->with('success', 'Imagem deletada com sucesso!');
    } else {
        return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
    }
}





public function destroy(Request $request, $id)
{
    if(Auth::user()->role == 2) {
    $post = Posts::findOrFail($id);
$caminhoPasta = public_path('images/uploads/blog/'.$post->url);
if(File::exists($caminhoPasta)) {
    File::deleteDirectory($caminhoPasta);
}
    $post->delete();

    if($post->delete()) {
        return redirect(route('posts.index'))->with('success', 'Publicação '.$post->title.' foi criada com sucesso!');
    }
    
    else {
        return redirect()->back()->with('error', 'Não foi possível deletar a publicação, tente novamente.');
    }

    // Redirecionar ou retornar a resposta adequada
} else {
    return redirect('/')->with('error', 'Você não tem permissão para realizar esta ação.');
}
}

public function update_remove_image(Request $request, Posts $post) {
    $post = Posts::find($post->id);

    $caminhoPasta = public_path('images/uploads/blog/'.$post->url.'/'.$post->main_image);

    
    $post->update([
        'main_image' => null,
    ]);

    if(File::exists($caminhoPasta)) {
        File::delete($caminhoPasta);
    }

    $post->save();

    if($post->save()) {
        return redirect()->back()->with('success', 'Imagem removida da publicação '.$post->title.' com sucesso!');
    }
    else {
        return redirect()->back()->with('error', 'Não foi possível remover a imagem. Tente novamente.');
    }
}


}
