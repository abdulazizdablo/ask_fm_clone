<?php
use App\Http\Services;




class LikedbyOneService{

public function LikedOne(){

$likes_count = DB::table('likes')->count();


if($likes_count == 1){

$shown_user = Like::where('user_id',)


}




}



}
?>