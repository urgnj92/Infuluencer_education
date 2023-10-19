<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class Admin extends Model
{
    use HasFactory;

    public function articlesShowList() {
        // articles tableからデータを取得
        $articles = DB::table('articles')->get();
        return $articles;
    }
}
