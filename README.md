Sample PHP/JavaScript interview
============

The solution is provided under the [solution](solution) folder.

Requirements
------------
* VirtualBox <http://www.virtualbox.org>
* Vagrant <http://www.vagrantup.com>
* Git <http://git-scm.com/>

### Startup

```
$ vagrant up
```

#### Apache
The Apache server is available at <http://localhost:8888>

#### MySQL
MySQL is available in the host port 8889, and when running on the VM it is available as a socket or at port 3306 as usual.
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

The web root is located in the project directory at `src/` and you can install your files there

And like any other vagrant file you have SSH access with
```
$ vagrant ssh
```

#### Demo

![Alt Text](https://media.giphy.com/media/3JQCinVQJ1s4iB7ilv/giphy.gif)
