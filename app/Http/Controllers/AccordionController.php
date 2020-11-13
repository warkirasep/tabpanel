<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccordionController extends Controller
{
    //

    public function accordion()
    {
        return redirect()->to('accordion-active#collapseOne');
    }

    public function accordionActive()
    {
        return view('accordion.index');
    }
}
