function doRegister(event) {
    event.preventDefault()

    let loisirs = []
    const loisirsinput = document.getElementById('loisirs').querySelectorAll('input')
    Object.keys(loisirsinput).forEach((key) => {
        if (loisirsinput[key].checked) {
            loisirs.push(loisirsinput[key].value)
        }
    })

    const inputs = { //defnit/crée l'objet input
        lastname: document.getElementById('lastname').value, //prend l'élèment de l'input lastname (id).valeur
        firstname: document.getElementById('firstname').value,
        birthdate: document.getElementById('birthdate').value,
        genre: document.getElementById('genre').value,
        city: document.getElementById('city').value,
        loisirs: loisirs,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
    }

    $(document).ready(function () {
        $.ajax({
            url: "./ajax.php",
            method: "POST",
            data: inputs,
            success: (response) => {
                console.log(response)
            }
        })
    })
};




