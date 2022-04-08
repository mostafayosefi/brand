<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SitemapXmlController extends Controller
{




    public function sitemap() {
        return response()->view('index.home.sitemap')->header('Content-Type', 'text/xml');
      }

}
