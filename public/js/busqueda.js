function busqueda()
{
    var texto=document.getElementById("busqueda").value;
    console.log(texto);

    fetch('/tramites/busqueda', {
        method: 'POST', headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify({ texto: texto })
    })
    .then(response => response.json())
    .then(data => {
        var resultados = data.resultado;
        let resultsDiv = document.getElementById('results');
        resultsDiv.innerHTML = ''

        resultados.forEach(element => {
            console.log(element.nombre);
            document.getElementById('results').innerHTML += `<p>${element.nombre} - ${element.nombre_corto}</p>`;
        });
        //document.getElementById('results').innerHTML = data.resultado;
    })
    .catch(error => console.error('Error:', error));

}
