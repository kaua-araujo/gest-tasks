$("#buttonSubmit").on("click", function() {
    let error = $(".error").text();
    if(error) {
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
            }
            });
            Toast.fire({
                icon: "error",
                color: '#353535',
                background: "#FFC107",
                title: error,
        });
    }
});

$(".deleteButtonTask").on("click", function() {
    let id = $(this).attr("id");
    Swal.fire({
        title: "Reamente deseja apagar a tarefa?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, deletar!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Task deletada!",
            icon: "success"
          });
          $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:"/excluir-task/"+id,
            method:'POST',
            data:{
                id:id
            },
            dataType:'json',
            success:function(data)
            {
            }
        });
        location.reload();
        }
      });
});

$(".deleteButtoncategorie").on("click", function() {
    let id = $(this).attr("id");
    let name = $(this).attr("name");
    Swal.fire({
        title: "Reamente deseja apagar a categoria "+ name +" ?",
        text: "Isso deletará todas as tasks vinculadas a essa categoria!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "DELETAR"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Categoria deletada!",
            icon: "success"
          });
          $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url:"/deletar-categoria/"+id,
            method:'POST',
            data:{
                id:id
            },
            dataType:'json',
            success:function(data)
            {
            }
        });
        location.reload();
        }
      });
});
