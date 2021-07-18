<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;

class CursoController extends ContainerController
{
    public function index()
    {

        dd('Este é o método index do CursoController');
    }

    public function show()
    {
        $this->view([

            'title' => 'Cursos',

            'curso' => 'Etiam posuere bibendum erat finibus rutrum.
            Fusce consectetur urna eget lectus suscipit efficitur.
            Nulla placerat imperdiet leo ac aliquet.
            Sed eu dui eu nulla commodo accumsan a ut ligula.
            Nam mattis leo bibendum, pulvinar nisi non, condimentum velit.
            Vestibulum tristique lorem quis leo iaculis consectetur.
            Mauris eleifend finibus ipsum, eget pulvinar lectus efficitur quis.
            Ut magna nisl, sodales sit amet venenatis nec, molestie consequat justo.
            Nulla magna tellus, iaculis venenatis tempus in, pulvinar malesuada metus.
            Morbi interdum malesuada enim eget porttitor. Aenean eleifend lorem dui, et pulvinar felis commodo non.
            Proin gravida erat at faucibus venenatis. Quisque arcu erat, rhoncus in porta ut, rhoncus id dolor.'

        ], 'portal.curso');
    }

    public function insert()
    {
        vd('insert');
    }
}
