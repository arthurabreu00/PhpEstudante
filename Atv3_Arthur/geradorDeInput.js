function gerarInputs(qnt, txt) {
  // Gerador de inputs
  for (let index = 0; index < qnt; index++) {
    let nomeVariavel = `num${index + 1}`;

    const label = document.createElement("label");
    label.for = nomeVariavel;
    label.innerHTML = `${index +
      1}º <span style="text-transform:capitalize"> ${txt} </span> `;

    const input = document.createElement("input");
    input.name = nomeVariavel;
    input.id = nomeVariavel;

    document.querySelector("form").appendChild(label);
    document.querySelector("form").appendChild(input);
  }

  const button = document.createElement("button");
  button.innerHTML = "Calcular";
  document.querySelector("form").appendChild(button);
}
