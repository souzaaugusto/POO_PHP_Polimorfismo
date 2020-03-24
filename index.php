<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       require_once 'Animal.php';
       require_once 'Mamifero.php';
       require_once 'Reptil.php';
       require_once 'Peixe.php';
       require_once 'Ave.php';
       require_once 'Canguru.php';
       require_once 'Cachorro.php';
       require_once 'Cobra.php';
       require_once 'Goldfish.php';
       require_once 'Tartaruga.php';
       require_once 'Arara.php';
       
       $m = new Mamifero();
       $r = new Reptil();
       $a = new Ave();
       $c = new Canguru();
       $k = new Cachorro();
       $t = new Tartaruga();
       
       $c->locomover();
       $k->locomover();
       $t->locomover();
       
       /*$m->locomover();
       $r->locomover();
       $a->locomover();*/
       
       
       
       
        ?>
    </body>
</html>
