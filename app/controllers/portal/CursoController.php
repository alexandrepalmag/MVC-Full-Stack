<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController
{
    public function index()
    {
    }

    public function show()
    {
        $this->view([
           /*  'curso'=> 'PHP_MVC' */
        ], 'portal.curso');
    }

    public function insert()
    {
        vd('insert');
    }
}
