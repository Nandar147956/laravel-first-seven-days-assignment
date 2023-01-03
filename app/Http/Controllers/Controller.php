<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $fruits=['apple','banana','orange'];
        return view('blog')->with([
         'fruit'=> $fruits,

        ]);
    }

    public function getPublishers(){
        $publishers=Publisher::where('name','Ma Ma')->get();
        return $publishers;
    }

    public function storePublishers(){
        Publisher::create([
            'name'=>'Ma Ma',
            'address'=>'Dawei',
            'phone'=>'09778097655',
        ]);
        return 'insert successful';
    }

    public function updatePublisher($id){
    //    $phone='1111111';
    //    $name='Ma Ma';
     //   $publisher=Publisher::find($id);
     //   $publisher->phone=$phone;
    //    $publisher->name=$name;
    //    $publisher->save();
      //  return 'update successful';

      $phone='22222222';
      $publisher=Publisher::find($id)->update([
        'phone'=>$phone,
        'address'=>'Dawei'
      ]);
      return $publisher;
    }

    public function deletePublisher($id){
       $publisher= Publisher::find($id)->delete();
       return $publisher;
    }

    public function getBooks(){
       $books= Book::where('publisher_id',11)->get();
       return $books;
    }

    public function bookDetail($id){
        $books=Book::find($id);
        return $books->publisher->name;

    }

    public function getPublishersDetail($id){
     $publishers=Publisher::find($id);
     $publishers['books']=$publishers->books;
      return $publishers;
    }

    public function getAdditionalBookinfo($id){
        $book=Book::find($id);
       // return $book->additionalBookinfo;
       return $book->publisher;

    }
}
