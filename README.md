# 🚀 API de Produtos - Laravel

API REST desenvolvida com Laravel para gerenciamento de produtos, com foco em boas práticas, organização e testes automatizados.

---

## 📌 Sobre o projeto

Este projeto é uma API RESTful para controle de produtos, permitindo operações completas de CRUD:

- Criar produtos
- Listar produtos
- Visualizar produto específico
- Atualizar produtos
- Remover produtos
- Filtrar produtos por parâmetros

---

## 🎯 Objetivo

Projeto desenvolvido para estudo prático de Laravel, aplicando conceitos importantes de backend:

- Estrutura MVC
- APIs REST
- Validação de dados
- Testes automatizados
- Organização de código

---

## 🧠 Funcionalidades

- CRUD completo de produtos
- Filtros dinâmicos via query string
- Validação com FormRequest
- Padronização de respostas com API Resources
- Banco SQLite
- Testes automatizados com PHPUnit

---

## 🛠️ Tecnologias utilizadas

- PHP 8.2+
- Laravel 12
- SQLite
- Eloquent ORM
- PHPUnit
- Git / GitHub

---

# ⚙️ Instalação do projeto

## 1. Clonar o repositório

git clone https://github.com/seu-usuario/apideprodutos.git
cd apideprodutos

## 2. Instalar dependências

composer install

## 3. Configurar ambiente

Copie o arquivo .env:

cp .env.example .env

Gerar chave da aplicação:

php artisan key:generate

## 4. Configurar banco de dados (SQLite)

database/database.sqlite

## 5. Corrigir cache (se necessário)

Se der erro de cache:

CACHE_STORE=file

Depois rode:

php artisan config:clear

## 6. Executar migrations

php artisan migrate

## 7. Executar o projeto

Iniciar servidor local:

php artisan serve

A API estará disponível em:

http://127.0.0.1:8000

## Filtros disponíveis

GET /api/products?name=mouse&min_price=50&max_price=200

## Testes automatizados

Executar testes:

php artisan test

Cobertura:

Criação de produtos
Listagem de produtos
Visualização de produto
Fluxo completo da API
Validações
