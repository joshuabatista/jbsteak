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

    buscarPedidos()

})



const buscarPedidos = async () => {

    const response = await $.getJSON('../backend/buscar-pedidos.php')

    renderizarPedidos(response.data)

}

const renderizarPedidos = (data) => {

    const container = $('.container-pedidos')

    data.forEach(element => {

        container.append(`
        
        <div class="card align-items-center text-center" id="pedido1" data-id="${element.numero_pedido}">
                <div>
                    <label><b>N° do pedido</b></label>
                    <p>${element.numero_pedido}</p>
                </div>
                <div>
                    <label><b>R$</b></label>
                    <p>${element.valor_total.toLocaleString("pt-BR", { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' })}</p>
                </div>
                <div>
                    <label><b>Cliente</b></label>
                    <p>${element.cliente}</p>
                </div>
                <div>
                    <label><b>Status</b></label>
                    <p>
                        <select>
                            <option>Pedido recebido</option>
                            <option>Em preparação</option>
                            <option>Finalizado</option>
                        </select>
                    </p>
                </div>
                <div>
                    <button class="btn btn-danger">Excluir pedido</button>
                </div>
                <div>
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Exibir mais iformações</button>
                </div>
            </div>
            
            `)
        
    });

}
