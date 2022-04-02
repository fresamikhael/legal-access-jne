<?php

namespace App\Http\Controllers;

use App\Models\Law;
use App\Models\QNA;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    public function index()
    {
        $law = Law::orderBy('id', 'DESC')
            ->filter(request(['title', 'body']))
            ->paginate(10);
        
        $qna = QNA::orderBy('id', 'DESC')
            ->filter(request(['title', 'body']))
            ->paginate(10);

        return view('pages.information.index', [
            'law' => $law,
            'qna' => $qna,
        ]);
    }
}