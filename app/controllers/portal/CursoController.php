<?php

namespace app\controllers\portal;

use core\Parameters;

class CursoController
{
    public function index()
    {
        vd('index curso');
    }

    public function show($request)
    {
        vd($request->parameter);
    }
}
