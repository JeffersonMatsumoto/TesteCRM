<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once("include/MVC/View/views/view.edit.php");
// require_once("modules/Accounts/views/view.edit.php");

class CustomAOS_QuotesViewEdit extends ViewEdit
{

    public function display()
    {
        parent::display();
        $js = <<<'HTML'
        <h1 id="aff">Teste</h1>
        <script type='text/javascript'>
        console.log("aa");
        </script>
HTML;
        echo $js;
    }
}
