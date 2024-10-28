## Requisitos

* PHP 8.2 ou superior;
* MySQL 8 ou superior;
* Composer;
* Node.js 20 ou superior;

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>
Alterar no arquivo .env as credenciais do banco de dados.<br>

Instalar as dependências do PHP.
```
composer install
```

Instalar as dependências do Node.js.
```
npm install
```

Gerar a chave.
```
php artisan key:generate
```

Executar as migration para criar a base de dados e as tabelas.
```
php artisan migrate
```

Executar as seed para cadastar os registros teste no banco de dados.
```
php artisan db:seed
```

Criar Seed.
```
php artisan make:seeder UserSeeder
```

Iniciar o projeto criado com Laravel.
```
php artisan serve
```

Executar as bibliotecas Node.js.
```
npm run dev
```

Acessar no navegador a URL com o conteúdo padrão do Laravel.
```
http://127.0.0.1:8000
```

Usuário: master@mode.com<br>
Senha: admin123<br>


