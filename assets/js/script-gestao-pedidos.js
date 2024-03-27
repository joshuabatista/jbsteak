$(document).ready(function () {


    

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
        
        <div class="card align-items-center text-center" data-id="${element.numero_pedido}">
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
                    <label><b>Telefone</b></label>
                    <p>${element.telefone}</p>
                </div>
                <div>
                    <label><b>Endereço</b></label>
                    <p>${element.endereco_cliente}</p>
                </div>
                <div>
                    <label><b>Status</b></label>
                    <p>
                        <select>
                            <option value="Pedido recebido" ${element.status == 'Pedido recebido' ? 'selected' : ''}>Pedido recebido</option>
                            <option value="Em preparação" ${element.status == 'Em preparação' ? 'selected' : ''}>Em preparação</option>
                            <option value="Finalizado" ${element.status == 'Finalizado' ? 'selected' : ''}>Finalizado</option>
                        </select>
                    </p>
                </div>
                <div>
                    <button class="btn btn-danger">Excluir pedido</button>
                </div>
                <div>
                    <button class="btn btn-primary btn-exibir-itens" >Exibir Itens</button>
                </div>
            </div>
            
            `)
        
    });

}

const buscarItensPedido = async ({target}) => {

    const elemento = $(target).closest('.card')

    const id = elemento.data('id')

    const response = await $.getJSON(`../backend/detalhes-lanches.php?id=${id}`)

    renderizarItens(response.data)

}

const renderizarItens = (data) => {

    const container = $('.container-itens-pedido')

    container.empty()

    data.forEach(item => {

        container.append(`
            <div class="card">
                <div>
                    <img src="${item.foto}" alt="imagem do lanche">
                </div>
                <div>
                    <label for=""><b>Produto</b></label>
                    <p>${item.item}</p>
                </div>
                <div>
                    <label for=""><b>Quantidade</b></label>
                    <p>${item.quantidade}</p>
                </div>
                <div>
                    <label for=""><b>R$</b></label>
                    <p>${item.valor.toLocaleString("pt-BR", { minimumFractionDigits: 2 , style: 'currency', currency: 'BRL' })}</p>
                </div>
            </div>
        `)
    })

    $('#myModal').modal('show')
}


// Eventos ouvintes

$(document).on('click', '.btn-exibir-itens', buscarItensPedido)

$(document).on('change', ".card select", function () {
        
    var selecionarStatus = $(this).val()
    var elemento = $(this).closest('.card')

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



    

