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
        <div class="card d-flex align-items-center mx-auto mb-3">
                <div>
                    <img src="${element.image}" alt id="lanche">
                </div>
                <div>
                    <h6><b>${element.produto}</b></h6>
                    <p name="descricao" id="">${element.descricao}</p>
                </div>
                <div>
                    <p>R$ ${element.valor}</p>
                </div>

                <div class="d-flex gap-1">
                    <button class="btn btn-sm btn-success"><i class="fa-solid fa-pen"></i></button>
                    <button class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></button>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Inativar
                    </label>
                </div>
        </div>  
        `
    })

    container.append(cards)

}



