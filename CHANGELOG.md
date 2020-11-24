# 9.0.0-alpha3


* Issue [#3184362](https://www.drupal.org/i/3184362):
                 Allowed VDO to work with Composer ~2.0 and PHP7.4 and MySQL 8
* Added files.watcherExclude for git and node_modules for workspaces in the Visual Studio Code for each workspace [#27](https://github.com/webship/vdo-project/issues/27)


--------------------------------------------------------------------------------

# 9.0.0-alpha2

* Issue [#3183876](https://www.drupal.org/i/3183876):
        Fixed VDO composer and .info.yml to work with Drupal 9 ( ^9.0 ) only
* Added a setup bash file to install LAMP on Ubuntu 20.10 PHP7.3 and MySQL 8
   [#20](https://github.com/webship/vdo-project/issues/20)
   [setup-LAMP-ubuntu20-10.sh](https://github.com/webship/vdo-project/blob/5031d8b5ad8adfdfd31a6ce85ef6a1d29bebcdf2/vdo/scripts/install/setup-LAMP-ubuntu20-10.sh)
* Added index.html to vdo root localhost on /var/www/html/ and index.php in each workspace for better visual view and quick access to folders with docroot or web [#21](https://github.com/webship/vdo-project/issues/21)
* Added code-workspace files for Visual Studio Code IDE for each VDO workspace configs [#22](https://github.com/webship/vdo-project/issues/22)
* Added a VDO command to generate project files for Apache NetBeans IDE 12.1 for each VDO workspace configs [#23](https://github.com/webship/vdo-project/issues/23)
* Renamed cmd-vdo-backup-*.sh files to cmd-vdo-tool-backup-*.sh [#24](https://github.com/webship/vdo-project/issues/24)
* Added a new VDO Tool bash file to change git config filemode to false in all workspace config directory [#25](https://github.com/webship/vdo-project/issues/25)

--------------------------------------------------------------------------------

# 9.0.0-alpha1

* Issue [#3118431](https://www.drupal.org/i/3118431):
        Started a 9.0.x branch for VDO and VDO Project to integrate with
        Drupal 9 readiness with Drupal coding standard and practice
* Issue [#3155329](https://www.drupal.org/i/3155329):
        Added [Vartheme Claro] administration theme and use it as the default
        install, back-end, and front-end theme
