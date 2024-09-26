# Formulario_simples_em_Laravel

Este projeto é um sistema simples desenvolvido em Laravel. O sistema inclui um formulário para que os usuários possam preencher suas informações e enviar suas solicitações, que são armazenadas no banco de dados.

## Funcionalidades

- Formulário de solicitação de serviços do Demutran.
- Validação de dados de entrada.
- Armazenamento de solicitações no banco de dados MySQL.
- Interface para envio de documentos como CNH e requerimento.

## Requisitos

Antes de rodar o projeto, você precisará ter os seguintes componentes instalados:

- **PHP**
- **Composer**
- **WAMP, XAMPP ou outro servidor local** com suporte a PHP e MySQL

## Tecnologias Utilizadas

- **Laravel** 10.x
- **MySQL** para o banco de dados
- **Blade** para views e templates

## Instalação

Siga os passos abaixo para configurar o projeto em sua máquina local:

1. Instale as dependências do PHP via Composer:

   ```bash
   composer install
   ```

2. Gere a chave da aplicação Laravel:

   ```bash
   php artisan key:generate
   ```

3. Crie o banco de dados no MySQL e configure suas credenciais no arquivo `.env`.

4. Rode as migrations para criar as tabelas no banco de dados:

   ```bash
   php artisan migrate
   ```

5. Inicie o servidor local:

   ```bash
   php artisan serve
   ```

6. Abra o navegador e acesse o sistema:

   ```
   http://127.0.0.1:8000
   ```

## Uso

O projeto inclui uma interface onde usuários podem preencher suas solicitações. Os dados enviados são validados e armazenados no banco de dados. O formulario ja ta na pagina inicial

As solicitações submetidas podem ser visualizadas diretamente no banco de dados

## Estrutura de Pastas

- `app/Http/Controllers/`: Contém os controladores do projeto.
- `app/Models/`: Contém os modelos, incluindo o modelo `SolicitacaoDemutran`.
- `database/migrations/`: Contém as migrations para criar as tabelas do banco de dados.
- `resources/views/`: Contém os arquivos Blade para renderizar as views do projeto.
