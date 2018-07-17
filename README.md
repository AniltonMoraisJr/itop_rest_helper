# itop_rest_helper
## Helper to integrate any aplication Laravel with iTop Combodo ITSM

## To use, follow the instructions:

* Use the command above to install the package:
```
composer require aniltonmoraisjr/itopresthelper
```
* Use the follow command to publish the config file:
```
php artisan vendor:publish
```
* Edit the values in the config file or create the variables in your .env file.
```
URL_API_NETADMIN_REST = /*YOUR SERVICE DESK URL WITH /webservices/rest.php?version=1.0. Ex: 'http://servicedesk.com.br/webservices/rest.php?version=1.0'*/
URL_API_NETADMIN_FULL = /*YOUR SERVICE DESK URL. Ex: 'http://servicedesk.com.br'*/
USER_API_NETADMIN = /*YOUR Administrator user*/
PASS_API_NETADMIN = /*YOUR Administrator user password*/
```
