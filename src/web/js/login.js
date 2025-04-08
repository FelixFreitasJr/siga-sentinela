function login() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    fetch('src/web/php/login.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ username, password })
    })
    .then(res => {
        if (!res.ok) throw new Error("Login falhou");
        return res.json();
    })
    .then(data => {
        if (data.role === "admin") {
            window.location.href = "src/web/page/admin.php";
        } else if (data.role === "suporte") {
            window.location.href = "src/web/page/suporte.php";
        } else if (data.role === "operacional") {
            window.location.href = "src/web/page/operacional.php";
        }
    })
    .catch(err => {
        document.getElementById("errorContainer").innerText = "Usuário ou senha inválidos.";
    });
}
