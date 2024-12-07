<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="styles.css">
    
</head>
<body>
    <div class="form-container">
        <h2>Cadastro de Usuários</h2>
        <form action="conexao.php" method="POST">
            <label for="username">Nome do Usuário:</label>
            <input type="text" id="username" name="username" required>

            <label for="birthdate">Data de Nascimento:</label>
            <input type="date" id="birthdate" name="birthdate" required>

            <label for="gender">Gênero:</label>
            <select id="gender" name="gender" required>
                <option value="">Selecione...</option>
                <option value="masculino">Masculino</option>
                <option value="feminino">Feminino</option>
                <option value="outro">Outro</option>
            </select>

            <label for="address">Endereço:</label>
            <input type="text" id="address" name="address" required>

            <label>Telefones:</label>
            <div id="phone-container">
                <div class="dynamic-field">
                    <input type="text" name="phones[]" placeholder="Digite o telefone" required>
                    <button type="button" onclick="addPhone()">+</button>
                </div>
            </div>

            <label>E-mails:</label>
            <div id="email-container">
                <div class="dynamic-field">
                    <input type="email" name="emails[]" placeholder="Digite o e-mail" required>
                    <button type="button" onclick="addEmail()">+</button>
                </div>
            </div>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <label for="rg">RG:</label>
            <input type="text" id="rg" name="rg" required>

            <label for="position">Cargo:</label>
            <input type="text" id="position" name="position" required>

            <button type="submit">Enviar</button>
        </form>
    </div>

    <script>
        // Adiciona um novo campo de telefone
        function addPhone() {
            const phoneContainer = document.getElementById('phone-container');
            const newField = document.createElement('div');
            newField.className = 'dynamic-field';
            newField.innerHTML = `
                <input type="text" name="phones[]" placeholder="Digite o telefone" required>
                <button type="button" onclick="removeField(this)">-</button>
            `;
            phoneContainer.appendChild(newField);
        }

        // Adiciona um novo campo de e-mail
        function addEmail() {
            const emailContainer = document.getElementById('email-container');
            const newField = document.createElement('div');
            newField.className = 'dynamic-field';
            newField.innerHTML = `
                <input type="email" name="emails[]" placeholder="Digite o e-mail" required>
                <button type="button" onclick="removeField(this)">-</button>
            `;
            emailContainer.appendChild(newField);
        }

        // Remove um campo dinâmico
        function removeField(button) {
            button.parentElement.remove();
        }
    </script>
</body>
</html>

