(async function () {
    await usuarios();
}) ();

async function usuarios() {

    const token = document.head.querySelector("[name~=csrf-token][content]").content;

    await fetch('/usuarios',
    {
        method: "GET", 
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            "X-CSRF-Token": token,
        },
    })
    .then(res => {
        return res.json();
    })
    .then(res => {
        console.log(res);

        let contenidoTabla = "";

        res.forEach(usuario => {
            contenidoTabla += `
                <tr>
                    <td>${usuario.id}</td>
                    <td>${usuario.name}</td>
                    <td>${usuario.fecha_nacimento}</td>
                    <td>${usuario.edad}</td>
                    <td>${usuario.domicilio}</td>
                    <td>${usuario.numero_exterior}</td>
                    <td>${usuario.colonia}</td>
                    <td>${usuario.cp}</td>
                    <td>${usuario.ciudad}</td>
                </tr>
            `;
        });

        let bodyTabla = document.getElementById("bodyTabla");

        bodyTabla.innerHTML = contenidoTabla;
    })
    .catch(error => {
        console.log(error);
    });
}
