# Trabalho Final Tópicos Especiais em Engenharia de Software - Urna Eletrônica

Link do site online: [https://urna-eletronica.000webhostapp.com/](https://urna-eletronica.000webhostapp.com/)

## Para testar localmente, você vai precisar:

- MYSQL
- PHP 8.1.6
- Server HTTP (Recomenda-se o uso do [XAMPP](https://www.apachefriends.org/))

## Como visualizar a aplicação localmente

1. Clonar este repositório dentro da pasta htdocs do XAMPP ou do seu servidor apache de preferência. 
2. No caso de utilizar o XAMPP, rodar o MySQL Datase e o Apache Web Server.
3. Importar o arquivo `php/database.sql` para popular o banco de dados no seu MYSQL, ou PHPMyAdmin, caso esteja usando o XAMPP e queira utilizá-lo.
4. Alterar o arquivo `php/connection.php` com as credenciais do seu banco no MYSQL (username, password, hostname, database).
5. Acessar o projeto em `http://localhost/urna-eletronica/`.

## Documentação

- Documentação Jsdoc está em `out/index.html`
- Documentação Doxygen está em `doxygen/html/index.html`
