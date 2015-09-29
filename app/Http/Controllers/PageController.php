<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repository\PlayerHistoryRepository as PlayerHistory;
use App\Repository\AlbumRepository as Album;
use App\Repository\PhotoRepository as Photo;
use App\Repository\CoachDetailRepository as CoachDetail;
use App\Repository\CoachRepository as Coach;
use App\Repository\ClubHistoryRepository as ClubHistory;
use App\Repository\EventRepository as Event;

use App\Repository\SliderRepository as Slider;
use App\Repository\ArticleRepository as Article;
use Illuminate\Http\Request;

class Pagecontroller extends Controller {

	public function index(PlayerHistory $player,ClubHistory $clubHistory,Slider $slider,Coach $coach,Article $article, Event $event){
       $sliders=$slider->all();
        $players = $player->all();
        $club = $clubHistory->all();

        $coach = $coach->all();
        $article=$article->getArticlesByPublishedDate();
        $events=$event->getEventPagination();

        return view('pages.index',compact('players','club','sliders','coach','article','events'));

    }
    public function about(){
        return view('pages.about');

    }
    public function contact(){
        return view('pages.contact');

    }
    public function playerDetail(PlayerHistory $player){
        $player=$player->getPlayerPaginate();
        $player->setPath('');
        return view('pages.playerDetail')->with('players',$player);

    }
    public function playerDetailListView(PlayerHistory $player){
        return view('pages.playerDetailListView')->with('players',$player->all());

    }
    public function clubDetail(ClubHistory $club){
        $club=$club->getClubHistoryPaginate();
        return view('pages.clubDetail')->with('clubs',$club);
    }
    public function coachDetail(CoachDetail $coach){
        $coach=$coach->all();
        return view('pages.coachdetail')->with('coachs',$coach);
    }
    public function articleDetail(Article $article){

        $article=$article->getArticlesByPublishedDate();
        return view('pages.articleDetail')->with('articles',$article);
    }
    public function gallery(Album $album){
        $album=$album->getGalleryPagination();
        return view('pages.gallery')->with('galleries',$album);
    }
    public function clubranking(ClubHistory $clubhistory)
    {
        $clubhistory=$clubhistory->getClubHistoryRanking();
        return view('pages.clubranking')->with('clubhistories',$clubhistory);
    }
}


 


