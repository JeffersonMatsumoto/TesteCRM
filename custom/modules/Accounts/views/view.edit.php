<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once("include/MVC/View/views/view.edit.php");
// require_once("modules/Accounts/views/view.edit.php");

class CustomAccountsViewEdit extends ViewEdit
{

    public function display()
    {
        parent::display();
        $js = <<<'HTML'
        <h1 id="aff">Teste</h1>
        <script type='text/javascript'>
            // var a = document.getElementById("aff");
            // console.log(a, a.innerHTML); // OU textContent
            // a.style.backgroundColor = 'yellow';

            // var teste1 = document.querySelectorAll('[id="teste_c"');
            // console.log(teste1);

            // var teste2 = document.getElementById("name");
            // console.log(teste2)
            // teste2.forEach(function (element) {
            //     console.log(element);
            // })

            // window.alert(document.getElementsByName("teste_c")[0].textContent);
            // console.log(document.getElementById("teste_c").style.display);
            // document.getElementById("teste_c").style.display = 'none'; //FUNCIONOU! MAS APENAS PARA O VALOR DO CAMPO...

            // let a = document.getElementById("teste_c").parentElement.parentElement.style.display = 'none'; //FOIIIII !!! ❤
            // a.style.display = 'none';
            // $("#teste_c").parent().parent().hide();
            // document.getElementsByClassName("panel panel-default")[2].style.visibility = 'hidden'; //painel
        </script>
HTML;
        echo $js;
    }
}