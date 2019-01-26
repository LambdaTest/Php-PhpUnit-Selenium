# Php-PhpUnit-Selenium

# Setup 
* install php in your machine and setup environment variable
* clone repository from link https://github.com/LambdaTest/Php-PhpUnit-Selenium.git
* install composer by running below command

```
$ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
$ php -r "if (hash_file('SHA384', 'composer-setup.php') === '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
$ php composer-setup.php
$ php -r "unlink('composer-setup.php');"
```
* run command to install composer ``` composer install ```
* Set LT user and appkey on lib/globals.php or setup in environment variable

# Execution:

* To run a single test, run ``` composer single ```
* To run a parallel test,  run ``` composer parallel ```

