<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class PagesController extends Controller
{
    public function templateList () {
    	$this->setBlade();
    	return view('templateList');
    }

    public function templates ($name) {
    	$this->setBlade();
    	return view('templates', ['pageName' => $name]);
    }

    public function home () {
        $this->setBlade();
        return view('templates', ['pageName' => 'index']);
    }

    private function setBlade(){
        Blade::setEscapedContentTags('[[[', ']]]');
        Blade::setContentTags('[[', ']]');
    }
}
