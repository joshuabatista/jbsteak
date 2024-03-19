
const cadastrarProduto = () => {

    const data = new FormData($('#cadastrar-produto')[0])

    $.ajax({
        url: './backend/salvar-produto.php', // Url do lado server que vai receber o arquivo
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
    });

}

$(document).on('click', '.btn-salvar', cadastrarProduto)