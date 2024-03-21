
$(() => {
    
    buscaLanches()
})

var carrinho = []

//busca lanches no banco de dados

const buscaLanches = async () =>{

    const response = await $.getJSON('../backend/buscar-lanches.php')

    renderizaLanches(response)
}

//renderiza os laches



const renderizaLanches = (lanches) =>{

    $(".container").empty()

    let card = ''

    lanches.forEach(element => {

        if (element.status == 0) {
        
        card += `
            <div class="card" style="width: 18rem; height: 491px;" data-id="${element.id}" data-produto="${element.produto}" data-valor="${element.valor}">
                <img src="${element.image}" alt="" class="imagem-lanche">
                <div class="card-body d-flex flex-column align-items-left mt-auto">
                <h5 class="card-title">${element.produto}</h5>
                <p class="card-text">${element.descricao}</p>
                <a href="javascript:;" class="btn btn-primary btn-add-carrinho">${element.valor}</a>
                </div>
            </div>
        `
        }

    });

    $('.container').html(card)
}

// Quaando apertar no botao de finalizar rodar a funcao abaixo

const enviarPedido = () => {

    const nome = $('#nome').val()
    const telefone = $('#telefone').val()
    const endereco = $('#endereco').val()


    $.ajax({
        url: './backend/envia-pedido.php', 
        type: 'POST',
        data: {
            carrinho: carrinho,
            nome: nome,
            telefone: telefone,
            endereco: endereco

        },
        dataType: 'JSON',
        success: function (data) {

            if(!data.status){
                return Swal.fire({
                    title: "Erro",
                    icon: "error",
                    text: data.message,
                  })
            }
            
            Swal.fire({
                title: "Sucesso!",
                icon: "success",
                text: data.message,
              }).then(() => {
                location.reload()
              })
        }
    });


}



const addCarrinho = ({target}) => {

    const elm = $(target).closest('.card')

    const id = elm.data('id')

    if(carrinho.length > 0){

        filtered = carrinho.find(p => p.id == id)

        if(filtered != undefined){
            filtered.quantidade++
            return renderizarCarrinho()
        }

    } 
    
    carrinho.push({
        id: elm.data('id'),
        produto: elm.data('produto'),
        valor: Number(elm.data('valor')),
        quantidade: 1,
        imagem: elm.find('.imagem-lanche').attr('src')
    })

    renderizarCarrinho()
    
}

const renderizarCarrinho = () => {

    if(carrinho.length > 0)
        $('#btn-finalizar').prop('disabled', false)
    else
        $('#btn-finalizar').prop('disabled', true)

    // Selecionar meu container
    
    let containerCarrinho = $('.container-carrinho')
    
    containerCarrinho.empty() 

    let subTotal = carrinho.reduce(function(total, currentValue){
        return total + (currentValue.valor * currentValue.quantidade)
    },0)

    $('.subtotal').html('R$ ' + subTotal)

    // Criar meu foreach 
    
    carrinho.forEach(element => {

        //calcular subtotal
        
        containerCarrinho.append(`
        <div class="row d-flex align-items-center justify-content-center produto" data-id="${element.id}">
            <div class="col-md-2">
                <div class="logo-carrinho">
                    <img src="${element.imagem}" id="logo-carrinho">
                </div>
            </div>
            <div class="col-md-4">
                <div class="lanche">
                    <h5>${element.produto}</h5>
                </div>
            </div>
            <div class="col-md-2">
                <div class="valor">
                    <h5>R$ ${element.valor}</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="quantidade d-flex gap-1" style = "gap: 7px !important;">
                    <button class="btn btn-danger botao-menos">-</button>
                    <input type="number" value="${element.quantidade}" class="form-control quantidade" >
                    <button class="btn btn-primary botao-mais">+</button>
                    <button class="btn btn-danger botao-excluir"><i class="fa-solid fa-trash-can"></i></button> 
                </div>
            </div>
        </div>
        `)
        
    }) 


}

const incrementar = ({target}) => {

    const elm = $(target).closest('.produto')

    const id = $(elm).data('id')

    carrinho.filter(p => p.id == id)[0].quantidade++;

    renderizarCarrinho()

}

const decrementar = ({target}) => {

    const elemento = $(target).closest('.produto')

    const id = elemento.data('id')

    let item = carrinho.filter(elm => elm.id == id)[0]

    if(item.quantidade == 0)
        return

    item.quantidade--

    renderizarCarrinho()
}

const excluirProduto = ({target}) => {

    const itemCarrinho = $(target).closest('.produto');

    const itemId = itemCarrinho.data('id');

    carrinho = carrinho.filter(item => item.id !== itemId);

    renderizarCarrinho();
};



//eventos

$(document).on('click', '.botao-excluir', excluirProduto)

$(document).on('click', '.btn-add-carrinho', addCarrinho)

$(document).on('click', '.botao-mais', incrementar)

$(document).on('click', '.botao-menos', decrementar)

$(document).on('click', '#btn-finalizar-pedido', enviarPedido)
