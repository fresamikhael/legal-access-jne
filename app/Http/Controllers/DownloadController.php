<?php

namespace App\Http\Controllers;

use App\Models\Permit\Permit;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

use App\Http\Controllers\Storage;

class DownloadController extends Controller
{
    function downloadPermit($path)
    {
        $file= public_path('Permit/' . $path);

        return response()->download($file);
    }
    function downloadLitigation($path)
    {
        $file= public_path('Litigation/' . $path);

        return response()->download($file);
    }
    function downloadDrafting($path)
    {
        $file= public_path('Drafting/' . $path);

        return response()->download($file);
    }

    function downloadRegulation($path)
    {
        $file = public_path('Rule/'. $path);

        return response()->download($file);
    }
}
