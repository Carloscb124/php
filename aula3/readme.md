
# 📒 Sistema de Agenda (CRUD em PHP)

Este projeto é uma aplicação de agenda desenvolvida em **PHP** com **MySQL**, permitindo cadastrar, listar, editar e excluir contatos.

## 🖼 Prévia do Sistema

<div style="display: flex; gap: 10px;">
    <img src="image1.png" alt="Tela 1" width="32%">
    <img src="image2.png" alt="Tela 2" width="32%">
    <img src="image3.png" alt="Tela 3" width="32%">
</div>

## 🚀 Funcionalidades
- Adicionar novos contatos
- Listar contatos
- Editar informações
- Excluir registros
- Conexão com MySQL usando `mysqli`

## 🗂 Estrutura
```
aula3/
├── adicionar.php
├── editar.php
├── excluir.php
├── index.php
├── conexao.php
├── image1.png
├── image2.png
└── image3.png
```

## 🗄 Banco de Dados
```sql
CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    telefone VARCHAR(20),
    email VARCHAR(100)
);
```

## ▶ Como rodar
1. Colocar a pasta no `htdocs`
2. Criar o banco `agenda`
3. Importar a tabela acima
4. Acessar: `http://localhost/aula3/`
