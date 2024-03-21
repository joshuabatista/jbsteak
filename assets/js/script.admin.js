$(() => {

    pegarLanche()

})

const pegarLanche = async () => {

    const response = await $.getJSON('../backend/buscar-lanches.php')

    renderizarLanches(response)

}

//renderiza os meus cards

const renderizarLanches =  (lanches) =>{

   const container = $(".container-card")
   
   container.empty()

    let cards = ''

    lanches.forEach(element =>{

        
        
        cards += `
        <div class="card d-flex align-items-center mx-auto mb-3" data-id="${element.id}">
                <div>
                    <img src="${element.image}" alt id="lanche">
                </div>
                <div class="descricao-produto">
                    <h6 class="nome-produto"><b>${element.produto}</b></h6>
                    <p class="descricao" id="">${element.descricao}</p>
                </div>
                <div>
                    <p class="valor">R$ ${element.valor}</p>
                </div>

                <div class="d-flex gap-1">
                    <button type="button" class="btn btn-sm btn-success btn-editar-produto" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" ${element.status == 1 ? 'checked' : ''}>
                    <label class="form-check-label" id="switch" for="flexSwitchCheckDefault">Inativar
                    </label>
                </div>
        </div>  
        `
    })

    container.append(cards)

}

const editarProduto = ({target}) => {

    const elemento = $(target).closest('.card')

    const data = {
        id: elemento.data('id'),
        imagem: elemento.find('#lanche').attr('src'),
        nome: elemento.find('.nome-produto').text(),
        descricao: elemento.find('.descricao').text(),
        valor: elemento.find('.valor').text()

    } 

    // ------------------------
    $('#id').val(data.id)
    $('#nome-produto-editar').val(data.nome)
    $('#descricao-produto-editar').val(data.descricao)
    $('#valor-produto-editar').val(data.valor)
    $('#imagem-produto-editar').attr('src', data.imagem)
     

} 

const salvarProduto = () => {
    const form = $('#editar-produto')[0]

    const data = new FormData(form)

    $.ajax({
        url: './backend/atualizar-produto.php', 
        type: 'POST',
        data: data,
        processData: false,
        contentType: false,
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
    })

}

const statusProduto = (event) => {

    const switchInput = $(event.target)
    const card = switchInput.closest('.card')
    const id = card.data('id')
    const status = switchInput.prop('checked') ? 0 : 1

    atualizarStatusLanche(id, status)
};

const atualizarStatusLanche = (id, status) => {
    $.ajax({
        url: './backend/status-lanche.php',
        type: 'POST',
        data: { id: id, status: status },
        dataType: 'json',
        success: function(data) {
            if (data.status) {
                mostrarMensagemSucesso(data.message)
            } else {
                mostrarMensagemErro(data.message)
            }
        }
    })
}

const mostrarMensagemSucesso = (message) => {
    Swal.fire({
        title: "Sucesso!",
        icon: "success",
        text: message,
    })
}

const mostrarMensagemErro = (message) => {
    Swal.fire({
        title: "Erro",
        icon: "error",
        text: message,
    })
}


//eventos

$(document).on('click', '.btn-editar-produto', editarProduto)
$(document).on('click', '#botao-salvar', salvarProduto)
$(document).on('change', '.form-check-input', statusProduto)





