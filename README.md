Mindera @ PHP & FE interview
============

This project aims to make it very easy to do a simple interview regarding PHP and FE skills.

The solution is provided under the `solution` folder.

Requirements
------------
* VirtualBox <http://www.virtualbox.org>
* Vagrant <http://www.vagrantup.com>
* Git <http://git-scm.com/>

### Startup

```
$ vagrant up
```
That is pretty simple.

#### Apache
The Apache server is available at <http://localhost:8888>

#### MySQL
Externally the MySQL server is available at port 8889, and when running on the VM it is available as a socket or at port 3306 as usual.
Username: root
Password: root

Technical Details
-----------------
* Ubuntu 14.04 64-bit
* Apache 2.4
* PHP 5.5
* MySQL 5.5
* XDebug
* PHPUnit 4.8
* Composer

We are using the base Ubuntu 14.04 box from Vagrant. If you don't already have it downloaded
the Vagrantfile has been configured to do it for you. This only has to be done once
for each account on your host computer.

The web root is located in the project directory at `src/` and you can install your files there

And like any other vagrant file you have SSH access with
```
$ vagrant ssh
```

#### Demo

![Alt Text](https://media.giphy.com/media/1rNZm2yBSSAFpisPak/giphy.gif)
