const btnlogout = document.querySelector("#logout");

btnlogout.addEventListener("click", e => {
  confirm("Deseja Sair ? ")
    ? (window.location.href = "action/loggout.php")
    : e.preventDefault();
});

const formDelete = document.querySelectorAll(".remove");
formDelete.forEach(form => {
  form.addEventListener("submit", e => {
    if (!confirm("Deseja excluir ?")) e.preventDefault();
  });
});
