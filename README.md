# Php PhpUnit Selenium Using LambdaTest
![LambdaTest Logo](https://www.lambdatest.com/static/images/logo.svg)
---

### Environment Setup

1. Global Dependencies   
   
  -Windows
  * You can download PHP for Windows from http://windows.php.net/download/
  * Run the installer and follow the setup wizard to install PHP.
  * Make sure you can use PHP with your command line: http://php.net/manual/en/install.windows.php

 -Linux
  * sudo apt-get install curl libcurl3 libcurl3-dev php

 -Mac
  * PHP should already be present on Mac OS X by default
   
2. Lambdatest Credentials
    * Set LambdaTest username and access key in environment variables. It can be obtained from [LambdaTest dashboard](https://automation.lambdatest.com/)    
    example:
    - For Linux/Mac
    ```
    export LT_USERNAME="YOUR_USERNAME"
    export LT_ACCESS_KEY="YOUR ACCESS KEY"
    ```
    - For Windows
    ```
    set LT_USERNAME="YOUR_USERNAME"
    set LT_ACCESS_KEY="YOUR ACCESS KEY"
    ```
3. Setup
     * install php in your machine and setup environment variable
     * clone repository from link https://github.com/LambdaTest/Php-PhpUnit-Selenium.git
     * install composer by running below command

      ```
      $ php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
      $ php -r "if (hash_file('SHA384', 'composer-setup.php') ===       '93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
      $ php composer-setup.php
      $ php -r "unlink('composer-setup.php');"
      ```
    * Set LT user and appkey on lib/globals.php or setup in environment variable
    * Navigate to the cloned directory
    * run command to install composer ``` composer install ```
    
4. Running Tests
    * To Start Test:
    - Navigate to Php-PhpUnit-Selenium
    - Run following command
    * Execution
    ```
    $ composer test
    ```

#####  Routing traffic through your local machine
- Set tunnel value to `true` in test capabilities
> OS specific instructions to download and setup tunnel binary can be found at the following links.
>    - [Windows](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Windows)
>    - [Mac](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+MacOS)
>    - [Linux](https://www.lambdatest.com/support/docs/display/TD/Local+Testing+For+Linux)

### Important Note:
Some Safari & IE browsers, doesn't support automatic resolution of the URL string "localhost". Therefore if you test on URLs like "http://localhost/" or "http://localhost:8080" etc, you would get an error in these browsers. A possible solution is to use "localhost.lambdatest.com" or replace the string "localhost" with machine IP address. For example if you wanted to test "http://localhost/dashboard" or, and your machine IP is 192.168.2.6 you can instead test on "http://192.168.2.6/dashboard" or "http://localhost.lambdatest.com/dashboard".

## About LambdaTest

[LambdaTest](https://www.lambdatest.com/) is a cloud based selenium grid infrastructure that can help you run automated cross browser compatibility tests on 2000+ different browser and operating system environments. LambdaTest supports all programming languages and frameworks that are supported with Selenium, and have easy integrations with all popular CI/CD platforms. It's a perfect solution to bring your [selenium automation testing](https://www.lambdatest.com/selenium-automation) to cloud based infrastructure that not only helps you increase your test coverage over multiple desktop and mobile browsers, but also allows you to cut down your test execution time by running tests on parallel.
### Resources

##### [SeleniumHQ Documentation](http://www.seleniumhq.org/docs/)
##### [PhpUnit Documentation](https://phpunit.de/documentation.html)
