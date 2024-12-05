# Projeto de Formulário de Cadastro

Este é um simples projeto de **Formulário de Cadastro** em PHP com validação de dados, criptografia de senha e inserção de dados em um banco de dados MySQL. Ele permite que um usuário se cadastre, validando os dados e armazenando as informações no banco de dados de forma segura.

## Funcionalidades

- **Cadastro de usuário** com campos de nome, e-mail, senha e confirmação de senha.
- **Validação** dos campos:
  - Verifica se todos os campos estão preenchidos.
  - Verifica se o e-mail é válido.
  - Verifica se a senha e a confirmação de senha coincidem.
- **Criptografia de senha** antes de salvar no banco de dados.
- **Armazenamento no banco de dados MySQL**:
  - Tabela `usuarios` com as colunas: `id`, `nome`, `email`, `senha`, e `data_cadastro`.

## Tecnologias Usadas

- **PHP**: Linguagem de backend para processamento do formulário.
- **MySQL**: Banco de dados para armazenar as informações dos usuários.
- **HTML/CSS**: Para a estrutura e o estilo do formulário.

## Estrutura de Pastas

```
project-folder/
│
├── includes/
│   └── db.php         # Conexão com o banco de dados
│
├── public/
│   ├── index.php      # Página do formulário de cadastro
│   └── processar_cadastro.php # Processa o envio do formulário
│
└── assets/
    └── css/
        └── style.css  # Arquivo de estilo para o formulário
```

## Requisitos

- **PHP 7.0 ou superior**
- **Servidor MySQL** (como o XAMPP ou WAMP)
- **Editor de código** (VSCode, Sublime, etc.)

## Instalação

### Configuração do Banco de Dados

1. Crie um banco de dados no MySQL (por exemplo, `bancoform`).

2. Crie a tabela `usuarios` com o seguinte comando SQL:

```sql
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

### Configuração da Conexão com o Banco de Dados

Abra o arquivo `includes/db.php` e edite as credenciais do banco de dados:

```php
$host = 'localhost';        // Servidor do banco de dados
$dbname = 'bancoform';      // Nome do banco de dados
$username = 'root';         // Usuário do banco de dados
$password = '';             // Senha do banco de dados
```

### Como Executar

1. Clone o repositório:

```bash
git clone https://github.com/seu-usuario/seu-repositorio.git
cd seu-repositorio
```

2. Certifique-se de que o servidor Apache e MySQL do XAMPP ou WAMP estão funcionando.

3. Coloque os arquivos do projeto na pasta `htdocs` (para XAMPP) ou na pasta equivalente para o seu servidor local.

4. Acesse o formulário pelo navegador:

```
http://localhost/seu-repositorio/public/index.php
```

## Como Usar

Preencha os campos do formulário:

- **Nome**: Seu nome completo.
- **Email**: Seu endereço de e-mail (será usado como identificador único).
- **Senha**: A senha da sua conta.
- **Confirmar Senha**: Digite novamente a senha para confirmação.

Após o envio do formulário, o PHP validará os campos. Se tudo estiver correto, a informação será salva no banco de dados. Caso contrário, uma mensagem de erro será exibida.

## Contribuição

Contribuições são bem-vindas! Siga os passos abaixo:

1. Faça um fork deste repositório.
2. Crie uma nova branch para sua feature ou correção.
3. Faça o commit das suas mudanças.
4. Envie um pull request para a branch main deste repositório.

## Licença

Este projeto é de código aberto e pode ser utilizado e modificado de acordo com sua necessidade. Não há restrições de uso, apenas atribuição adequada.

Se precisar de ajuda, sinta-se à vontade para abrir um issue ou entrar em contato diretamente.
