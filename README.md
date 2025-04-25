# Laravel Site

Este projeto é uma aplicação Laravel simples que implementa funcionalidades de CRUD (Criar, Ler, Atualizar, Excluir) para categorias e posts. Cada post está vinculado a uma categoria específica, permitindo uma gestão organizada de conteúdo.

## Estrutura do Projeto

- **app/**: Contém a lógica principal da aplicação.
  - **Http/Controllers/**: Controladores para lidar com as requisições.
    - `CategoryController.php`: Gerencia as operações CRUD para categorias.
    - `PostController.php`: Gerencia as operações CRUD para posts vinculados a categorias.
  - **Models/**: Modelos Eloquent.
    - `Category.php`: Representa as categorias no banco de dados.
    - `Post.php`: Representa os posts no banco de dados.

- **database/**: Arquivos relacionados ao banco de dados.
  - **migrations/**: Arquivos de migração para criar tabelas no banco de dados.
    - `create_categories_table.php`: Define o esquema da tabela de categorias.
    - `create_posts_table.php`: Define o esquema da tabela de posts.
  - **seeders/**: Seeders para popular o banco de dados com dados iniciais.
    - `CategorySeeder.php`: Popula a tabela de categorias.
    - `PostSeeder.php`: Popula a tabela de posts.

- **public/**: Contém o ponto de entrada da aplicação.
  - `index.php`: Arquivo principal de entrada para a aplicação Laravel.

- **resources/**: Contém views e assets.
  - **views/**: Templates Blade para renderizar HTML.
    - **categories/**: Templates para gerenciamento de categorias.
      - `create.blade.php`: Formulário para criar uma nova categoria.
      - `edit.blade.php`: Formulário para editar uma categoria existente.
      - `index.blade.php`: Lista de categorias.
      - `show.blade.php`: Detalhes de uma categoria.
    - **posts/**: Templates para gerenciamento de posts.
      - `create.blade.php`: Formulário para criar um novo post.
      - `edit.blade.php`: Formulário para editar um post existente.
      - `index.blade.php`: Lista de posts.
      - `show.blade.php`: Detalhes de um post.

- **routes/**: Definições de rotas.
  - `web.php`: Define as rotas web da aplicação.

- **composer.json**: Lista as dependências necessárias para a aplicação Laravel.

- **.env**: Contém variáveis de ambiente para a aplicação.

## Instalação

## Instalação

1. Clone o repositório:
   ```bash
   git clone <repository-url>
   ```

2. Navegue até o diretório do projeto:
   ```bash
   cd laravel-site
   ```

3. Instale as dependências:
   ```bash
   composer install
   ```

4. Configure o arquivo de ambiente:
   ```bash
   cp .env.example .env
   ```

5. Gere a chave da aplicação:
   ```bash
   php artisan key:generate
   ```

6. Execute as migrações:
   ```bash
   php artisan migrate
   ```

7. (Opcional) Popule o banco de dados:
   ```bash
   php artisan db:seed
   ```

8. Inicie o servidor de desenvolvimento:
   ```bash
   php artisan serve
   ```

## Uso

- Acesse a aplicação no navegador em `http://localhost:8000`.
- Utilize as rotas fornecidas para gerenciar categorias e posts.