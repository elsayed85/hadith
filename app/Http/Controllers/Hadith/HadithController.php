<?php

namespace App\Http\Controllers\Hadith;

use App\Http\Controllers\Controller;
use App\Models\Hadith\Hadith;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class HadithController extends Controller
{
    public function show(Hadith $hadith)
    {
        $hadith = $hadith->load(['book']);
        if (!empty($hadith->title)) {
            SEOMeta::setTitle("حديث {$hadith->title}");
            SEOMeta::setDescription("حديث {$hadith->title} من كتاب {$hadith->book->name}");
        } else {
            SEOMeta::setTitle("حديث");
            SEOMeta::setDescription("من كتاب {$hadith->book->name} , {$hadith->description}");
        }
        return view('hadith.show', ['hadith' => $hadith]);
    }
}
