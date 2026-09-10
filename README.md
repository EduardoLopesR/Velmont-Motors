<h1 align="center">
  <br>
   <img width="520" alt="image" src="https://github.com/user-attachments/assets/b7be4a0b-c46b-49fe-a424-2b095e12e241">

  <br>
</h1>
<h1 align="center">Velmont Motors</h1>

<p align="center">
  <img src="https://img.shields.io/badge/Status-Em%20desenvolvimento-yellow?style=for-the-badge">
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white">
</p>

<p align="center">
  <strong>Plataforma web para uma concessionária de veículos de luxo.</strong>
</p>

<p align="center">
  Projeto acadêmico desenvolvido com foco em desenvolvimento web,
  integração Front-end/Back-end e envio de e-mails via SMTP.
</p>

---

## Sobre o projeto

O **Velmont Motors** é uma aplicação web desenvolvida para simular a plataforma digital de uma concessionária de veículos de luxo.

O projeto foi desenvolvido durante a formação na **Proz**, com o objetivo de colocar em prática conceitos de desenvolvimento web, organização de software, documentação e integração entre diferentes tecnologias.

A aplicação combina **HTML, CSS, JavaScript, Bootstrap e PHP**, utilizando o **PHPMailer** para realizar o envio de mensagens através de um servidor SMTP.

O projeto também foi desenvolvido em colaboração com **Vitor Gabriel**.

---

## Objetivos

O projeto foi criado com os seguintes objetivos:

* Desenvolver uma interface moderna para uma concessionária;
* Criar uma experiência de navegação simples e intuitiva;
* Apresentar veículos de maneira visualmente atrativa;
* Criar páginas individuais para os veículos;
* Implementar componentes interativos;
* Desenvolver formulário de contato;
* Integrar PHP com envio de e-mails através de SMTP;
* Praticar organização de arquivos em projetos web;
* Utilizar Git e GitHub para versionamento;
* Documentar o processo de desenvolvimento.

---

## Funcionalidades

### Catálogo de veículos

* Exibição de veículos em destaque;
* Cards informativos;
* Imagens dos veículos;
* Informações como modelo, ano, quilometragem e preço;
* Navegação para páginas específicas.

### Galeria e carrossel

* Carrossel de imagens;
* Transições entre imagens;
* Apresentação visual dos veículos;
* Navegação entre diferentes conteúdos.

### Formulário de contato

O projeto possui um formulário de contato integrado ao **PHP + PHPMailer**.

O fluxo funciona aproximadamente da seguinte maneira:

```text
Usuário
   │
   ▼
Formulário HTML
   │
   ▼
PHP
   │
   ▼
PHPMailer
   │
   ▼
Servidor SMTP
   │
   ▼
E-mail
```

### Interface responsiva

A aplicação utiliza **Bootstrap e CSS** para adaptar a interface a diferentes tamanhos de tela.

---

# Arquitetura

A estrutura do projeto foi organizada separando os principais recursos da aplicação.

```text
┌─────────────────────────────────────────┐
│              VELMONT MOTORS             │
├─────────────────────────────────────────┤
│                                         │
│             FRONT-END                   │
│                                         │
│      HTML + CSS + JavaScript            │
│                 │                       │
│                 ▼                       │
│          Interface do usuário           │
│                 │                       │
├─────────────────┼───────────────────────┤
│                 ▼                       │
│             BACK-END                    │
│                                         │
│                PHP                      │
│                 │                       │
│                 ▼                       │
│             PHPMailer                   │
│                 │                       │
│                 ▼                       │
│              SMTP                       │
│                 │                       │
│                 ▼                       │
│          Envio de e-mails               │
│                                         │
└─────────────────────────────────────────┘
```

### Responsabilidades

| Camada     | Responsabilidade                  |
| ---------- | --------------------------------- |
| HTML       | Estrutura das páginas             |
| CSS        | Estilização e layout              |
| JavaScript | Interações e comportamento        |
| Bootstrap  | Componentes e responsividade      |
| PHP        | Processamento no servidor         |
| PHPMailer  | Gerenciamento do envio de e-mails |
| SMTP       | Transporte das mensagens          |
| Git/GitHub | Versionamento e colaboração       |

---

# Estrutura do projeto

```text
Velmont-Motors/
│
├── phpmailer/
│   └── src/
│       └── Biblioteca PHPMailer
│
├── src/
│   │
│   ├── assets/
│   │   ├── images/
│   │   └── outros recursos
│   │
│   ├── pages/
│   │   └── páginas HTML
│   │
│   ├── scripts/
│   │   └── arquivos JavaScript
│   │
│   └── styles/
│       └── arquivos CSS
│
├── .gitattributes
├── .gitignore
├── README.md
└── DOCUMENTO CODIGO CURSO (1).pdf
```

---

# Demonstração

## Página inicial

![Velmont Motors - Home](./docs/screenshots/home.png)

---

## Catálogo de veículos

![Velmont Motors - Catálogo](./docs/screenshots/catalogo.png)

---

## Página de veículo

![Velmont Motors - Veículo](./docs/screenshots/veiculo.png)

---

## Formulário de contato

![Velmont Motors - Contato](./docs/screenshots/contato.png)

---

#  GIF de demonstração

> O GIF abaixo demonstra o fluxo principal de navegação da aplicação.

![Demonstração do Velmont Motors](./docs/demo/velmont-demo.gif)

### Fluxo demonstrado

```text
Home
  ↓
Veículos em destaque
  ↓
Seleção do veículo
  ↓
Página do veículo
  ↓
Contato
  ↓
Envio da mensagem
```

---

# 🛠️ Tecnologias

## Front-end

<p>
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white">
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white">
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=flat&logo=javascript&logoColor=black">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=flat&logo=bootstrap&logoColor=white">
</p>

## Back-end

<p>
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white">
  <img src="https://img.shields.io/badge/PHPMailer-Email%20Integration-blue">
  <img src="https://img.shields.io/badge/SMTP-Mail%20Service-orange">
</p>

## Ferramentas

<p>
  <img src="https://img.shields.io/badge/Git-F05032?style=flat&logo=git&logoColor=white">
  <img src="https://img.shields.io/badge/GitHub-181717?style=flat&logo=github&logoColor=white">
  <img src="https://img.shields.io/badge/VS%20Code-007ACC?style=flat&logo=visualstudiocode&logoColor=white">
</p>

---

#  Como executar

## 1. Clone o repositório

```bash
git clone https://github.com/EduardoLopesR/Velmont-Motors.git
```

## 2. Acesse o projeto

```bash
cd Velmont-Motors
```

## 3. Configure um servidor PHP

Como o projeto utiliza PHP, recomenda-se utilizar uma ferramenta como o **XAMPP**.

Coloque o projeto dentro de:

```text
C:\xampp\htdocs\
```

Exemplo:

```text
C:\xampp\htdocs\Velmont-Motors
```

## 4. Inicie o Apache

Abra o XAMPP e inicie o serviço **Apache**.

Depois acesse:

```text
http://localhost/Velmont-Motors/
```

---

#  Configuração do PHPMailer

Para utilizar o formulário de contato, é necessário configurar um servidor SMTP.
As credenciais devem ser mantidas fora do código-fonte, entretanto atualmente é necessário colocar as informações dentro do código enviar.php.

Exemplo da maneira ideal:

```env
SMTP_HOST=smtp.example.com
SMTP_PORT=587
SMTP_USERNAME=seu_email
SMTP_PASSWORD=sua_senha
```

---

#  O que este projeto demonstra

Este projeto representa uma etapa prática do meu aprendizado em desenvolvimento web.

Durante seu desenvolvimento, foram trabalhados conceitos como:

* Desenvolvimento Front-end;
* Desenvolvimento Back-end;
* HTML semântico;
* CSS e organização de estilos;
* JavaScript;
* Manipulação de elementos da página;
* Componentes Bootstrap;
* Design responsivo;
* Formulários;
* Processamento de dados com PHP;
* Integração com serviços SMTP;
* Utilização do PHPMailer;
* Organização de projetos;

---

> **Este projeto representa minha experiência prática com desenvolvimento web e minha capacidade de transformar uma proposta de sistema em uma aplicação funcional.**

Durante o desenvolvimento do Velmont Motors, tive contato com diferentes partes do ciclo de desenvolvimento de uma aplicação web, desde a construção da interface até a integração com o back-end.

O projeto me permitiu praticar principalmente:

**Front-end**

* Construção de interfaces;
* Responsividade;
* Componentização visual;
* JavaScript;
* Bootstrap.

**Back-end**

* PHP;
* Processamento de formulários;
* Integração com PHPMailer;
* Comunicação através de SMTP.

**Desenvolvimento**

* Organização de código;
* Git/GitHub;
* Estruturação de projetos;
* Documentação;
* Resolução de problemas durante a implementação.

Meu objetivo é continuar evoluindo esses conhecimentos e ampliar minha experiência com **desenvolvimento de software, APIs, bancos de dados e aplicações full-stack**.

---

---

# 🎓 Contexto acadêmico

Projeto desenvolvido durante a formação na **Proz**, com objetivo acadêmico e foco na prática de desenvolvimento e documentação de software.

---

---

<p align="center">
  Desenvolvido  por <strong>Eduardo Lopes</strong> e <strong>Vitor Gabriel</strong>
</p>
