(() => {
    console.log("Testando");   

    $('div:contains("Nome:")').css('background-color', 'lightblue');
    $( '#teste_c' ).hide(); //ESCONDE VALOR DO CAMPO APENAS
    // $($field.teste_c.id).hide();
    $(".label").click(function() {
        alert( "Você clicou na label de um campo." );
    });
})();
