
        const users = [
            { id: 1, nome: 'Felix Freitas Jr', email: 'adm@ini.fiocruz.br', senha: 'senha_adm', nivel: 'adm' },
            { id: 2, nome: 'Maria Silva', email: 'felix.freitas@ini.fiocruz.br', senha: 'senha_1234', nivel: 'operacional' },
            { id: 3, nome: 'João Santos', email: 'suporte@ini.fiocruz.br', senha: 'senha_suporte', nivel: 'suporte' }
        ];

        function login() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;
            const email = `${username}@ini.fiocruz.br`;
            const user = users.find(user => user.email === email && user.senha === password);

            if (user) {
                alert(`Bem-vindo, ${user.nome}`);
                // Simulate redirecting to the dashboard
                window.location.href = '/src/web/page/dashboard.html';
            } else {
                alert('Credenciais inválidas!');
            }
        }
