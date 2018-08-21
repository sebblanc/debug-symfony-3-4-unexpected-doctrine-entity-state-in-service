## Symfony 3.4 Project to debug https://stackoverflow.com/questions/51426933/symfony-3-4-unexpected-doctrine-entity-state-in-service

I made this project to show how to obtain the bug that I'm talking about in the following [StackOverflow] (https://stackoverflow.com/questions/51426933/symfony-3-4-unexpected-doctrine-entity-state-in-service) post

This bug occurs from **doctrine/doctrine-bundle v1.6.4** : [doctrine.orm.entity_manager.abstract as lazy] (https://github.com/doctrine/DoctrineBundle/pull/559)

### To run the project just clone it and install the vendors, then follow the instructions below in dev env

#### Create the DB if it's not done yet
```
php bin/console doctrine:database:create
```

#### Populate the DB with some test data
```
php bin/console doctrine:fixtures:load --purge-with-truncate
```

#### Open **/web/app_dev.php**, you'll get the following result:
> State of $superEntity is 3 and should be 1

#### Change the version of **doctrine/doctrine-bundle** to **1.6.3** in **composer.json**

#### Open **/web/app_dev.php**, you'll get the following result:
> State of $superEntity is 1 and should be 1
