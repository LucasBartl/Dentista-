# 🦷 Dentista

Sistema de gerenciamento para clínicas odontológicas. Organize agendamentos, clientes, colaboradores e anotações em uma interface simples e intuitiva.

---

## 📸 Preview

| Calendário de Agendamentos | Cadastro de Cliente |
|:--------------------------:|:-------------------:|
| ![Calendário](https://raw.githubusercontent.com/LucasBartl/Dentista-/main/public/images/Screenshot_20.png) | ![Cadastro](https://raw.githubusercontent.com/LucasBartl/Dentista-/main/public/images/Screenshot_19.png) |

---

## ✨ Funcionalidades

- 📅 **Agendamentos** — Calendário mensal com visualização de consultas por dia e horário
- 👤 **Clientes** — Cadastro completo com nome, CPF, data de nascimento, e-mail e telefone
- 🔍 **Busca de clientes** — Localização rápida de pacientes cadastrados
- 📝 **Anotações** — Registro de observações e notas internas
- 👥 **Colaboradores** — Gerenciamento da equipe da clínica
- 🔐 **Autenticação** — Sistema de login com identificação do usuário

---

## 🛠️ Tecnologias

| Camada      | Tecnologia                     |
|-------------|-------------------------------|
| Backend     | PHP 8+ (MVC artesanal)        |
| Banco       | SQLite                        |
| Frontend    | HTML, CSS                     |
| Arquitetura | Controllers, Models, Viewer   |

> Projeto desenvolvido em **PHP puro**, sem frameworks, seguindo o padrão MVC implementado manualmente.

---

## 📋 Pré-requisitos

- PHP >= 8.0
- Extensão `pdo_sqlite` habilitada
- Servidor web (Apache, Nginx ou PHP built-in server)

---

## 🚀 Instalação

```bash
# 1. Clone o repositório
git clone https://github.com/LucasBartl/Dentista-.git
cd Dentista-

# 2. Verifique as configurações do banco em config.php
# Por padrão usa SQLite em: ../database/database.sqlite

# 3. Inicie o servidor de desenvolvimento
php -S localhost:8000 -t public/
```

Acesse em: `http://localhost:8000`

---

## ⚙️ Configuração

O arquivo `config.php` na raiz controla a conexão com o banco de dados:

```php
return [
    'database' => [
        'driver'   => 'sqlite',
        'database' => '../database/database.sqlite'
    ]
];
```

Para usar MySQL ou outro banco, basta atualizar o driver e as credenciais.

---

## 📁 Estrutura do Projeto

```
Dentista-/
├── classes/        # Classes base e utilitários (ex: conexão com DB)
├── controllers/    # Lógica de cada funcionalidade (agendamentos, clientes...)
├── database/       # Arquivo SQLite e scripts de migração
├── functions/      # Funções auxiliares globais
├── models/         # Modelos de dados (queries)
├── public/         # Ponto de entrada da aplicação (index.php, assets)
├── routes/         # Definição e despacho de rotas
├── viewer/         # Templates de visualização (equivalente às views)
└── config.php      # Configuração do banco de dados
```

---

## 🗂️ Módulos do Sistema

### 📅 Agendamentos
Visualização em formato de calendário mensal. Ao clicar em um dia, é possível criar um novo agendamento com horário e paciente.

### 👤 Clientes
Cadastro de pacientes com os campos:
- Nome completo
- Data de nascimento
- E-mail
- Telefone `(xx)xxxxx-xxxx`
- CPF `xxx.xxx.xxx-xx`

### 👥 Colaboradores
Gerenciamento dos profissionais da clínica.

### 📝 Anotações
Bloco de notas para registros internos e observações clínicas.

---

## 📄 Licença

Este projeto está licenciado sob a [MIT License](https://opensource.org/licenses/MIT).

---

Desenvolvido por [LucasBartl](https://github.com/LucasBartl)
