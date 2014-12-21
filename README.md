BAT-WebInterface
================

This is a webinterface written in PHP for the BungeeAdminTools plugin, a bungeecord administration plugin.

##How to deploy the webinterface :
  The webinterface uses *Composer* (a dependency management system) and therefore asks a bit of work before being able to work.<br> So you have two solutions :
  * for users : download packaged (plug and play) version of the webinterface <a href="http://www.spigotmc.org/wiki/bungee-admin-tools-web-interface-documentation/#download]">here</a><br>
  * for developers : once you cloned the repo, you should run the following commands : ```composer update``` and ```composer dump-autoload -o```. It should create a *vendor* directory in the root folder of the project and that's all you have to do to get an working application.

##Links :
* WebInterface wiki : http://www.spigotmc.org/wiki/bungee-admin-tools-web-interface-documentation/
* BAT plugin repository : https://github.com/alphartdev/BungeeAdminTools
* BAT page : http://www.spigotmc.org/resources/bungee-admin-tools.444/
