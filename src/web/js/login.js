document.addEventListener('DOMContentLoaded', function () {
    console.log("DOM totalmente carregado e analisado");

    const SUPABASE_URL = 'https://orxxwpwkdqfkicsjrnux.supabase.co';
    const SUPABASE_KEY = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Im9yeHh3cHdrZHFma2ljc2pybnV4Iiwicm9sZSI6ImFub24iLCJpYXQiOjE3MzE1MjIzMTEsImV4cCI6MjA0NzA5ODMxMX0.oyssvAO7anydXUk30PaGMVaeMC4uDoLvTzmaAOSDmVo';

    console.log("URLs do Supabase configuradas");

    const supabase = window.supabase.createClient(SUPABASE_URL, SUPABASE_KEY);
    console.log("Cliente do Supabase criado com sucesso");

    async function testConnection() {
        try {
            const { data, error } = await supabase.from('users').select('*').limit(1);
            if (error) {
                console.error('Erro ao conectar-se ao banco de dados:', error);
            } else {
                console.log('Conexão bem-sucedida:', data);
            }
        } catch (e) {
            console.error('Erro inesperado:', e);
        }
    }

    async function login() {
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;
        const email = `${username}@ini.fiocruz.br`;

        const { data: users, error } = await supabase
            .from('users')
            .select('*')
            .eq('email', email);

        const errorContainer = document.getElementById('errorContainer');
        errorContainer.textContent = '';  // Limpa mensagens de erro anteriores

        if (error) {
            errorContainer.textContent = 'Erro ao conectar-se ao banco de dados.';
        } else if (users.length === 0) {
            errorContainer.textContent = 'Usuário não encontrado. Verifique se o nome de usuário está correto.';
        } else {
            const user = users[0];
            if (user.senha !== password) {
                errorContainer.textContent = 'Senha incorreta. Tente novamente.';
            } else {
                alert(`Bem-vindo, ${user.nome}`);
                window.location.href = '/src/web/page/dashboard.html';
            }
        }
    }

    testConnection();
    window.login = login;  // Exponha a função login globalmente
});
