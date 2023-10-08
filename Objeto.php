<?php
    require_once "Elemento_obrigatorio.php";
    require_once "form.class.php";
    require_once "label.class.php";
    require_once "input.class.php";

    $label = new label("Nome:");

    $input1 = new input("text", "nome");

    $input2 = new input("submit", "");

    $form = new form("#", "GET");

    $form->setElementos($label);
    $form->setElementos($input1);
    $form->setElementos($input2);

    //echo "<pre>";
    //var_dump($form);
    //echo "</pre>"; 

    $form->criar();

?>