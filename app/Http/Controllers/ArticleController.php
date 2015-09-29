<?php namespace App\Http\Controllers;
use App\Http\Requests;
use App\Repository\ArticleRepository as Article;
use App\Repository\UserRepository as User;
use Folklore\Image\Facades\Image;
use Illuminate\Http\Request;
use App\Http\Requests\CreateArticleRequest;
use Session;


class ArticleController extends Controller
{
    /**
     * @var int
     */
    private $count;

    /*
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->count = 10;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Article $article,User $user)
    {
        $articles = $article->paginate($this->count);
        return view('admin.articles.index', compact('articles','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(User $user)
    {
            $user=$user->all();
         return view('admin.articles.create',compact('user'));
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateArticleRequest $request
     * @return Response
     */
    public function store(CreateArticleRequest $request, Article $article)
    {
             
        
        $uploaded_file = $request->file('image_file');
       

        $parameter = $request->all();

        unset($parameter['image_file']);
        $article = $article->create($parameter);
        if(isset($uploaded_file)){
        $ext = $uploaded_file->getClientOriginalExtension();
       
        $imageName = $article->id . "." . $ext;


        $uploaded_file->move(
            base_path() . '/public/img/uploads/article', $imageName
        );

        Image::make(base_path() . '/public/img/uploads/article/' . $imageName, array(
            'width' => 200,
            'height' => 160,
        ))->save(base_path() . '/public/img/uploads/thumbnails/article/' . $imageName);


        $article->update(array('image' => $imageName));
    }
        Session::flash('message', 'The article was successfully added!.');
        Session::flash('flash_type', 'alert-success');

        return redirect('articles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, Article $article)
    {
        $news = $article->find($id);
        return view('pages.singleNews', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, Article $article,User $user)
    {
       

        return view('admin.articles.edit')->with('article', $article->find($id))->with('user',$user->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id, CreateArticleRequest $request, Article $article)
    {
       
        $article_to_update = $article->find($id);
        $uploaded_image = $request->file('image_file');
        $parameter = $request->all();

        if (isset($uploaded_image)) {

            $ext = $uploaded_image->getClientOriginalExtension();
            $newImageName = $article_to_update->id . "." . $ext;

            $uploaded_image->move(
                base_path() . '/public/img/uploads/article/', $newImageName
            );
            Image::make(base_path() . '/public/img/uploads/article/' . $newImageName, array(
                'width' => 170,
                'height' => 120,
            ))->save(base_path() . '/public/img/uploads/article/' . $newImageName);
            unset($parameter['image_file']);
            $parameter['image'] = $newImageName;
            $article_to_update->update($parameter);

        } else {
            $parameter['image'] = $article_to_update->image;
            $article_to_update->update($parameter);
        }    
        
        Session::flash('message', 'The article was successfully edited!.');
        Session::flash('flash_type', 'alert-success');  
        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
     public function postSearch(Article $article, CreateArticleRequest $request)
    {

        
        $search_text = $request->input('search_text');

        $articles = $article->postArticleSearch($search_text);
     

        return view('pages.searchArticle', compact('articles'));
    }



}
