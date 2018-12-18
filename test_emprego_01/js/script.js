document.querySelectorAll('.btn-excluir').forEach(btn =>{
    btn.addEventListener('click',()=>{
        deletarLinha(btn.parentNode.parentNode.rowIndex);
    });
});


function deletarLinha(linha){
    document.querySelector('table').deleteRow(linha)
}