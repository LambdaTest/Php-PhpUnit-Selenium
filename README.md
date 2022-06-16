# Run Selenium Tests With PHPUnit On LambdaTest

![image](https://user-images.githubusercontent.com/70570645/171654186-aaea4617-43c6-443a-97f2-f6dc45082cd8.png)


<p align="center">
  <a href="https://www.lambdatest.com/blog/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium" target="_bank">Blog</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/support/docs/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium" target="_bank">Docs</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/learning-hub/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium" target="_bank">Learning Hub</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/newsletter/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium" target="_bank">Newsletter</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.lambdatest.com/certifications/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium" target="_bank">Certifications</a>
  &nbsp; &#8901; &nbsp;
  <a href="https://www.youtube.com/c/LambdaTest" target="_bank">YouTube</a>
</p>
&emsp;
&emsp;
&emsp;

*Learn how to use PHPUnit framework to configure and run your PHP automation testing scripts on the LambdaTest platform*

[<img height="58" width="200" src="https://user-images.githubusercontent.com/70570645/171866795-52c11b49-0728-4229-b073-4b704209ddde.png">](https://accounts.lambdatest.com/register?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)

## Table Of Contents

* [Pre-requisites](#pre-requisites)
* [Run Your First Test](#run-your-first-test)
* [Parallel Testing With PHPUnit](running-parallel-tests-using-php-unit-framework)
* [Local Testing With PHPUnit](#testing-locally-hosted-or-privately-hosted-projects)

## Prerequisites

Before you begin automation testing with Selenium and PHPUnit, you would need to:

* Make sure that you have the latest **PHP** installed on your system. You can download and install **PHP** using following commands in the terminal:

* **MacOS:** Previous versions of **MacOS** have **PHP** installed by default. But for the latest **MacOS** versions starting with **Monterey**, **PHP** has to be downloaded and installed manually by using below commands: 

  ```bash
  /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"
  brew install php
  ```
* **Windows:** 

  ```bash
  sudo apt-get install curl libcurl3 libcurl3-dev php
  ```

**Note:** For **Windows**, you can download **PHP** from [here](http://windows.php.net/download/). Also, refer to this [documentation](http://php.net/manual/en/install.windows.php) for ensuring the accessibility of PHP through Command Prompt(cmd).

* Download **composer** in the project directory ([Linux/MacOS](https://getcomposer.org/download/), [Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)).

**Note:** To use the **composer** command directly, it either should have been downloaded in the project directory or should be accessible globally which can be done by the command below:

  ```bash
  mv composer.phar /usr/local/bin/composer
  ```
### Installing Selenium Dependencies And Tutorial Repo

**Step 1:** Clone the LambdaTest’s Php-PhpUnit-Selenium repository and navigate to the code directory as shown below:

```bash
git clone https://github.com/LambdaTest/Php-PhpUnit-Selenium
cd Php-PhpUnit-Selenium
```

**Step 2:** Install the composer dependencies in the current project directory using the command below:
```bash
composer install
```
### Setting Up Your Authentication

Make sure you have your LambdaTest credentials with you to run test automation scripts. You can get these credentials from the [LambdaTest Automation Dashboard](https://automation.lambdatest.com/build?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium) or by your [LambdaTest Profile](https://accounts.lambdatest.com/login?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium).

**Step 3:** Set LambdaTest `Username` and `Access Key` in environment variables.
  
  * For **Linux/macOS**:
  ```bash
  export LT_USERNAME="YOUR_USERNAME" export LT_ACCESS_KEY="YOUR ACCESS KEY"
  ```
  
  * For **Windows**:
  ```bash
  set LT_USERNAME="YOUR_USERNAME" set LT_ACCESS_KEY="YOUR ACCESS KEY"
  ```

## Run Your First Test

>**Test Scenario**: Check out the sample [LambdaTest.php](https://github.com/LambdaTest/Php-PhpUnit-Selenium/blob/master/tests/LambdaTest.php) that we used for running a sample test using PHPUnit. This LambdaTest.php script tests a sample to-do list app by marking couple items as done, adding a new item to the list and finally displaying the count of pending items as output.

### Configuration Of Your Test Capabilities

**Step 4:** In [LambdaTestSetup.php](https://github.com/LambdaTest/Php-PhpUnit-Selenium/blob/master/lib/LambdaTestSetup.php) file, you need to update your test capabilities. This will validate your LambdaTest credentials for authentication purpose. Later, the code will select the basic capabilities such as OS, browser, browser version and so on.

> **Note:** You can generate capabilities for your test requirements with the help of **[Desired Capability Generator](https://www.lambdatest.com/capabilities-generator/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)**.

### Executing The Test

**Step 5:** The tests can be executed in the terminal using the following command:

```bash
composer single
```
Your test results would be displayed on the test console (or command-line interface if you are using terminal/cmd) and on LambdaTest Automation Dashboard.
 
## Running Parallel Tests Using PHPUnit Framework

Check out the sample [LambdaTestParallel.php](https://github.com/LambdaTest/Php-PhpUnit-Selenium/blob/master/tests/LambdaTestParallel.php) that we used for running parallel tests using PHPUnit.


### Executing Parallel Tests Using PHPUnit

To run parallel tests using **PHPUnit**, we would have to execute the below commands in the terminal: 

```bash
composer parallel
```
Your test results would be displayed on the test console (or command-line interface if you are using terminal/cmd) and on LambdaTest Automation Dashboard.

## Executing All The Tests

To run both single and parallel tests at once using **PHPUnit**, we would have to execute the below command in the terminal:
```bash
composer test
```

## Testing Locally Hosted Or Privately Hosted Projects

You can test your locally hosted or privately hosted projects with LambdaTest Selenium grid using LambdaTest Tunnel. All you would have to do is set up an SSH tunnel using tunnel and pass toggle `tunnel = True` via desired capabilities. LambdaTest Tunnel establishes a secure SSH protocol based tunnel that allows you in testing your locally hosted or privately hosted pages, even before they are live.

Refer our [LambdaTest Tunnel documentation](https://www.lambdatest.com/support/docs/testing-locally-hosted-pages/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium) for more information.

Here’s how you can establish LambdaTest Tunnel.

Download the binary file of:
* [LambdaTest Tunnel for Windows](https://downloads.lambdatest.com/tunnel/v3/windows/64bit/LT_Windows.zip)
* [LambdaTest Tunnel for macOS](https://downloads.lambdatest.com/tunnel/v3/mac/64bit/LT_Mac.zip)
* [LambdaTest Tunnel for Linux](https://downloads.lambdatest.com/tunnel/v3/linux/64bit/LT_Linux.zip)

Open command prompt and navigate to the binary folder.

Run the following command:

```bash
LT -user {user’s login email} -key {user’s access key}
```
So if your user name is lambdatest@example.com and key is 123456, the command would be:

```bash
LT -user lambdatest@example.com -key 123456
```
Once you are able to connect **LambdaTest Tunnel** successfully, you would just have to pass on tunnel capabilities in the code shown below :

**Tunnel Capability**

```
 "tunnel" => true
```

## Additional Links

* [Advanced Configuration for Capabilities](https://www.lambdatest.com/support/docs/selenium-automation-capabilities/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)
* [How to test locally hosted apps](https://www.lambdatest.com/support/docs/testing-locally-hosted-pages/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)
* [How to integrate LambdaTest with CI/CD](https://www.lambdatest.com/support/docs/integrations-with-ci-cd-tools/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)

## Documentation & Resources :books:

Visit the following links to learn more about LambdaTest's features, setup and tutorials around test automation, mobile app testing, responsive testing, and manual testing.

* [LambdaTest Documentation](https://www.lambdatest.com/support/docs/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)
* [LambdaTest Blog](https://www.lambdatest.com/blog/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)
* [LambdaTest Learning Hub](https://www.lambdatest.com/learning-hub/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)    

## LambdaTest Community :busts_in_silhouette:

The [LambdaTest Community](https://community.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium) allows people to interact with tech enthusiasts. Connect, ask questions, and learn from tech-savvy people. Discuss best practises in web development, testing, and DevOps with professionals from across the globe 🌎

## What's New At LambdaTest ❓

To stay updated with the latest features and product add-ons, visit [Changelog](https://changelog.lambdatest.com/) 
      
## About LambdaTest

[LambdaTest](https://www.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium) is a leading test execution and orchestration platform that is fast, reliable, scalable, and secure. It allows users to run both manual and automated testing of web and mobile apps across 3000+ different browsers, operating systems, and real device combinations. Using LambdaTest, businesses can ensure quicker developer feedback and hence achieve faster go to market. Over 500 enterprises and 1 Million + users across 130+ countries rely on LambdaTest for their testing needs.    

### Features

* Run Selenium, Cypress, Puppeteer, Playwright, and Appium automation tests across 3000+ real desktop and mobile environments.
* Real-time cross browser testing on 3000+ environments.
* Test on Real device cloud
* Blazing fast test automation with HyperExecute
* Accelerate testing, shorten job times and get faster feedback on code changes with Test At Scale.
* Smart Visual Regression Testing on cloud
* 120+ third-party integrations with your favorite tool for CI/CD, Project Management, Codeless Automation, and more.
* Automated Screenshot testing across multiple browsers in a single click.
* Local testing of web and mobile apps.
* Online Accessibility Testing across 3000+ desktop and mobile browsers, browser versions, and operating systems.
* Geolocation testing of web and mobile apps across 53+ countries.
* LT Browser - for responsive testing across 50+ pre-installed mobile, tablets, desktop, and laptop viewports

    
[<img height="58" width="200" src="https://user-images.githubusercontent.com/70570645/171866795-52c11b49-0728-4229-b073-4b704209ddde.png">](https://accounts.lambdatest.com/register?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)

      
## We are here to help you :headphones:

* Got a query? we are available 24x7 to help. [Contact Us](mailto:support@lambdatest.com)
* For more info, visit - [LambdaTest](https://www.lambdatest.com/?utm_source=github&utm_medium=repo&utm_campaign=Php-PhpUnit-Selenium)
