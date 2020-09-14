<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once("include/MVC/View/views/view.edit.php");
// require_once("modules/Accounts/views/view.edit.php");

class CustomContactsViewEdit extends ViewEdit
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
            // console.log($( "#teste_dropdown_c" ).val());

            if ($( "#teste_dropdown_c" ).val() == 'option_b') {
                $( "#dropdown_teste_dynamic_c" ).val("");
                $( "#dropdown_teste_dynamic_c" ).parent().parent().remove();
            } else {
                $( "#dropdown_teste_dynamic_c" ).parent().parent().show();     
            }

            $( "#teste_dropdown_c" ).change(function() {
                if ($( "#teste_dropdown_c" ).val() == 'option_b') {
                    $( "#dropdown_teste_dynamic_c" ).val("");
                    $( "#dropdown_teste_dynamic_c" ).parent().parent().remove();
                    console.log($( "#dropdown_teste_dynamic_c" ).val());

                } else {
                    $( "#dropdown_teste_dynamic_c" ).parent().parent().show();     
                }
            });

            // while ($( "#teste_dropdown_c" ).val() == 'option_b' ) {
            //     // console.log($( "#salutation" ).hide());
            //     $( "#dropdown_teste_dynamic_c" ).hide()
            // // } else {
            // }
            // $( "#dropdown_teste_dynamic_c" ).show()

            // if (document.getElementById("teste_dropdown_c").textContent == 'A') {
            //     document.getElementById("dropdown_teste_dynamic_c").style.display = 'none';
            // }

            // window.alert(document.getElementsByName("teste_c")[0].textContent);
            // console.log(document.getElementById("teste_c").style.display);
            // document.getElementById("teste_c").style.display = 'none'; //FUNCIONOU! MAS APENAS PARA O VALOR DO CAMPO...

            // let a = document.getElementById("teste_c").parentElement.parentElement.style.display = 'none'; //FOIIIII !!! ❤
            // a.style.display = 'none';
            // $("#last_name").parent().parent().hide();
            // document.getElementsByClassName("panel panel-default")[2].style.visibility = 'hidden'; //painel
        </script>
HTML;
        echo $js;
    }
}
