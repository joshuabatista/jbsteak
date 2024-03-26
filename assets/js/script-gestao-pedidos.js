$(document).ready(function () {


    $("#pedido1 select").change(function () {
        
        var selecionarStatus = $(this).val()
        var elemento = $("#pedido1")

        switch (selecionarStatus) {
            case "Pedido recebido":
                elemento.css("border-bottom", "4px solid red")
                break

            case "Em preparação":
                elemento.css("border-bottom", "4px solid yellow")
                break

            case "Finalizado":
                elemento.css("border-bottom", "4px solid green")
                break
        }

    })
    
})