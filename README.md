# Cadastro de Usuários

Este é um sistema simples de cadastro de usuários ainda em desenvolvimento, usando PHP com MySQL. Ele permite adicionar, listar, editar e excluir usuários. 

## Tecnologias Utilizadas
- PHP
- MySQL
- Bootstrap (para estilização)
- XAMPP (para ambiente local)

## Funcionalidades
- Cadastro de novos usuários
- Listagem de usuários cadastrados
- Edição de dados de usuários
- Exclusão de usuários

## Instalação
1. Clone este repositório:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repositorio.git
   ```
2. Importar o banco de dados:
   - No phpMyAdmin, crie um banco de dados chamado `cadastro`.
   - Importe o arquivo `banco.sql` para criar as tabelas necessárias.

3. Configurar a conexão com o banco de dados:
   - Edite o arquivo `config/config.php` e configure com seus dados do MySQL:
   ```php
   define("HOST", "localhost");
   define("USER", "root");
   define("PASS", "sua_senha");
   define("BASE", "cadastro");
   ```

4. Inicie o servidor local:
   - Se estiver usando XAMPP, inicie o Apache e o MySQL.
   - Acesse o projeto via navegador: `http://localhost/CRUD/paginas/index.php`

## Estrutura do Projeto
```
CRUD/
├── config/
│   ├── config.php  # Configuração do banco de dados
├── paginas/
│   ├── index.php  # Página inicial
│   ├── novo-usuario.php  # Formulário de cadastro
│   ├── salvar-usuario.php  # Processa o cadastro
│   ├── listar-usuarios.php  # Lista os usuários
├── README.md  # Documentação do projeto
```


