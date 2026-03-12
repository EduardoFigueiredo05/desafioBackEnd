# API - Gestão de Produtos (Back-end)

Esta é a API desenvolvida em Laravel para o desafio técnico de gestão de produtos. O projeto foi construído para ser executado de forma nativa, sem a necessidade de contentores (Docker/Sail).

## Tecnologias Utilizadas
- PHP 8.x
- Laravel 11.x
- MySQL (via XAMPP)
- Composer

## Como correr o projeto localmente

**1. Pré-requisitos**
Certifique-se de que tem o **XAMPP** Ligue os serviços Apache e MySQL instalado e o **Composer** configurado globalmente na sua máquina.

**2. Intalar dependências do PHP**
- composer install

**3. Configurar o Ambiente e a Base de Dados**
- Crie um banco de dados no MySQL via PhpMyAdmin chamada **loja_visibilidade_api**
- copie o arquivo **.env.example** e mude o tipo de DB_CONNECTION para **mysql**.
- Agora retire o comentario de todas essas linhas: 
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=laravel
# DB_USERNAME=root
# DB_PASSWORD=

**Gere uma chave e crie as tabelas**
- php artisan key:generate
- php artisan migrate

**Rode o servidor**
- php artisan serve
