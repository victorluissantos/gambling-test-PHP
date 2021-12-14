

# PRIMEIRO PASSO - Iniciando o servidor

1. Entre na pasta do projeto:

`cd gambling`

2. Cole o Laradock dentro do seu projeto PHP:

`git clone` https://github.com/Laradock/laradock.git

3. Entre na pasta Laradock e renomeie **env.example** para **.env.**

`cp .env.example .env`

4. Execute seus containers:

`docker-compose up nginx mysql workspace`

[Imagem de como ficará]

> 4.1: Se você quiser ocultar o **log** no terminal, basta incluir o **-d** no comando acima:

    `docker-compose -d up nginx mysql workspace`

5. Utilize o **[CRTL + D]** para parar o servidor/containers.

# SEGUNDO PASSO - Iniciando o Laravel

1. Entre no container para executar comandos no terminal referente ao PHP:

`docker exec -ti <id_container> sh -c /bin/sh`

2. Para instalar as dependências usando gestor de pacotes composer, utilize:

`composer update`

 

3. Inicie o Laravel utilizando:

`php artisan serve`

4. Você pode gerar as chaves de segurança utilizando o comando:

`php artisan key:generate`

# TERCEIRO PASSO - Banco de dados

1. Entre no container para executar comandos no terminal referente ao PHP:

`docker exec -ti <id_container> sh -c /bin/sh`

2. Crie a tabela que receberá os afiliados usando **migrate** através do comando:

`php artisan migrate`

3. Importe os dados iniciais a tabela de filiados usando **seed** através do comando:

`php artisan db:seed --class=AffiliateSeeder`

3. Pronto! Para acessar o sistema vá ao navegador e acesse:

`http://localhost`

#  ✨Desenvolvedor
Victor Luis dos Santos

- https://github.com/victorluissantos
- https://stackoverflow.com/users/39246/subgurim
- https://linkedin.com/in/victor-luis-santos/
