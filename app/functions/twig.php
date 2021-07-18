<?php

/* $user = new \Twig\TwigFunction('user', function ($index) {

    return 'dados user';
});

$this->twig->addFunction($user);

 */

$this->functions[] = $this->functionsToView('user', function () {
    return 'Teste das funções: dados do user';
});

$this->functions[] = $this->functionsToView('teste', function () {
    return 'Teste das funções: dados do teste';
});
