<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// ここから追加
use App\User;
use App\Reaction;
// ここまで追加

class ReactionController extends Controller
{
    // ここから追加
    public function create(Request $request)
    {
        $to_user_id = $request->to_user_id;
        $from_user_id = $request->from_user_id;
        $checkReaction = Reaction::where([
        ['to_user_id', $to_user_id],
        ['from_user_id', $from_user_id]
        ])->get();

        if($checkReaction->isEmpty()){
            
            $reaction = new Reaction();

            $reaction->to_user_id = $to_user_id;
            $reaction->from_user_id = $from_user_id; 
            $reaction->save();
        }

    }
    // ここまで追加
}
