Para rodar a api, primeiramente vá para a pasta raiz e use o comando "composer install", depois use o
comando "php artisan key:generate" e cole a chave em APP_KEY no arquivo .env, logo depois configure
o .envpara o banco de dados que você está usando(eu usei o MySql com phpMyAdmin) 
e então rode o comando "php artisan migrate" para criar econfigurar as tabelas da forma 
correta no seu banco de dados, então já pode subir a aplicação
usando o comando "php artisan serve" e a api já estará pronta para consumo.
Para configurar o arquivo frontend basta ir para a pasta raiz e usar o comando 'npm install', para 
instalar as dependências e depois é so rodar o comando 'npm run serve' e ir para a url 
'http://localhost:8080/', se tudo estiver correto seu browser mostrará a view livros.