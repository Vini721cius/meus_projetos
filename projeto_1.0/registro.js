document.addEventListener('DOMContentLoaded', function () {
    var registerForm = document.getElementById('registerForm');
    var usernameInput = document.getElementById('username');
    var passwordInput = document.getElementById('password');
    var registerMessage = document.getElementById('registerMessage');

    registerForm.addEventListener('submit', function (event) {
        event.preventDefault();

        var username = usernameInput.value;
        var password = passwordInput.value;

        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'registro.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
                if (xhr.status === 200) {
                    try {
                        var response = JSON.parse(xhr.responseText);

                        if (response.success) {
                            // Redireciona para a página de login no caso de sucesso
                            window.location.href = "login.php";
                        } else {
                            // Se houver algum problema no lado do servidor, atualiza a mensagem de registro
                            registerMessage.innerHTML = response.message;
                        }
                    } catch (error) {
                        console.error('Erro ao analisar a resposta JSON:', error);
                    }
                } else {
                    console.error('Erro na requisição:', xhr.status);
                }
            }
        };

        xhr.send('username=' + encodeURIComponent(username) + '&password=' + encodeURIComponent(password));
    });
});
