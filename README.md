<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
     <a href="https://www.docker.com/" target="_blank">
        <img src="https://www.docker.com/sites/default/files/mono_vertical_large.png" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template with Docker-compose </h1>
    <br>
</p>

Framework Yii2 preparado para iniciar com o docker-compose.

O docker-compose já esta com o php 7.4, apache, mysql, phpmyadmin e mailhog para teste de e-mail.

Para iniciar basta clonar o repositório.

Na raiz do projeto executar o comando:

- composer install

ou 

- php composer install

Em seguida executar o comando:

 - docker-compose up -d

e o framework será iniciado em :

http://localhost:8000

phpmyadmin:

http://localhost:8080
e o mailhog:
http://mailhog:8025

Para deixar de executar:

. docker-compose down


Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources


