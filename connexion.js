function doLogin(event) {
    event.preventDefault()

    const login = {
        email: document.getElementById('email').value,
        password: document.getElementById('password').value,
    }

    $(document).ready(function () {
        $.ajax({
            url: "./login.php",
            method: "POST",
            data: login,
            success: (response) => {
                if (response === "true") {
                    document.getElementById("errorConnection").style.display = "none"
                    window.location.href = "pagerecherche.php";
                } else {
                    document.getElementById("errorConnection").innerText = "Désolé, vos identifiants sont incorrect. Veuillez vérifier vos informations saisit."
                    document.getElementById("errorConnection").style.display = "block"
                }
            }
        })
    })
}