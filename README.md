# 🛒 Sistema de Cadastro de Produtos

Projeto de aplicação web desenvolvido para o trabalho guiado pelo **Professor Denis**, com o objetivo de realizar o cadastro, validação e armazenamento de produtos em um banco de dados relacional.

---

## 📌 Funcionalidades

- **Formulário de Cadastro:** Interface para entrada de dados de produtos (nome, preço, quantidade em estoque, categoria e descrição).
- **Validação de Dados:** Processamento e verificação de campos no lado do cliente (HTML5) e no servidor (PHP).
- **Persistência de Dados:** Conexão dinâmica e gravação dos dados no banco MySQL.
- **Listagem de Produtos:** Exibição em tabela dos itens que foram gravados no banco de dados.
- **Interface Personalizada:** Estilização limpa e responsiva feita com CSS3.

---

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estruturação dos formulários e da interface.
- **CSS3:** Estilização visual, layout e responsividade.
- **PHP:** Linguagem server-side para validação, recebimento dos dados via POST e integração com o banco.
- **MySQL:** Banco de dados relacional para armazenamento das informações.

---

## 📁 Estrutura do Projeto

```text
cadastro-produtos/
├── css/
│   └── style.css          # Arquivo de estilização visual
├── config/
│   └── conexao.php        # Script de conexão PDO / MySQLi com o banco
├── sql/
│   └── banco.sql          # Script de criação do banco de dados e tabelas
├── index.php              # Formulário principal de cadastro
├── listar.php             # Página para visualização dos produtos cadastrados
├── processa_cadastro.php # Script PHP que recebe os dados do formulário e insere no banco
└── README.md              # Documentação do projeto
