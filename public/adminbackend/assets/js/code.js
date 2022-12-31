$(function () {
    $(document).on('click', '#delete', function (e) {
        e.preventDefault();
        var link = $(this).attr("href");


        Swal.fire({
            title: 'tem certeza que deseja excluir?',
            text: "Remova esse item?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim, remover!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Removido!',
                    'Seu dado foi removido',
                    'success'
                )
            }
        })


    });

});