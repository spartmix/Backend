# as-capacita-phalcon-api


### Postman
1. [Extension](https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop)
2. [Collection](https://www.getpostman.com/collections/cf1f830ba892014d8bb8)


### Phalcon API

#####Clone do Projeto
```bash
$ git clone https://github.com/agenciasys/as-capacita-phalcon-api.git
```

#####Estrutura do Projeto
```
as-capacita-phalcon-api/
├── app
│   ├── configs
│   ├── controllers
│   ├── exceptions
│   ├── models
│   ├── modules
│   │   └── users
│   │       ├── controllers
│   │       └── models
│   ├── responses
│   └── traits
├── library
│   └── agenciasys
│       ├── error
│       └── exception
├── private
├── public
│   └── routes
│       └── collections
└── vendor
```

#####Variáveis de Ambiente
> Criar arquivo `.env` no diretório `app/configs` com o código abaixo

```
DB_HOST = "localhost"
DB_USER = "user"
DB_PASS = "passwd"
DB_SCHEMA = "as-capacita-phalcon"
```

#####Banco de Dados
>[CREATE DATABASE](https://github.com/agenciasys/as-capacita-phalcon-mvc/blob/master/README.md#banco-de-dados)

```sql
-- ALTER TABLE "users" ------------------------------------
ALTER TABLE users
    ADD `dtCreated` DateTime NOT NULL DEFAULT '0000-00-00 00:00:00',
    ADD `dtUpdated` DateTime NOT NULL DEFAULT '0000-00-00 00:00:00'
-- ---------------------------------------------------------
```

#####Composer
```bash
$ cd /www/as-capacita-phalcon-api/
$ composer install
```

#####Banco de Dados
```sql
CREATE TABLE `phones` (
    `iPhoneId` INT( 10 ) UNSIGNED AUTO_INCREMENT NOT NULL,
    `iUserId` Int( 10 ) NOT NULL,
    `sPhone` VARCHAR( 15 ) NOT NULL,
    PRIMARY KEY ( `iPhoneId` ) )
ENGINE = InnoDB;
```
