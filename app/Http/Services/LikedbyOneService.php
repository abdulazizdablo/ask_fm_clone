<?php
use App\Http\Services;




class LikedbyOneService{

public function LikedOne(){

$likes_count = DB::table('likes')->count();



// if the likes count is 1 the user will be shown

if($likes_count == 1){

$user_liked = Like::with('user')->first();


}




}



}
?>