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
Laravel 8 with user authentication, registration with email confirmation and password recovery. Uses official [Bootstrap 4](https://getbootstrap.com). This also makes full use of Controllers for the routes, templates for the views, and makes use of middleware for routing. Project can be stood up in minutes.

### Features
#### A [Laravel](https://laravel.com/) 8.x with [Bootstrap](https://getbootstrap.com) 4.x project.

| Laravel Auth Features  |
| :------------ |
|Built on [Laravel](https://laravel.com/) 8|
|Built on [Bootstrap](https://getbootstrap.com/) 4|
|Uses [MySQL](https://github.com/mysql) Database (can be changed)|
|Uses [Artisan](https://laravel.com/docs/master/artisan) to manage database migration, schema creations, and create/publish page controller templates|
|Dependencies are managed with [COMPOSER](https://getcomposer.org/)|
|Laravel Scaffolding **User** and **Administrator Authentication**.|
|CRUD (Create, Read, Update, Delete) User Management|
|Robust [Laravel Logging](https://laravel.com/docs/master/errors#logging) with admin UI using MonoLog|
|User Registration with email verification (Can be activated or deactivated from .env file) |
|Makes use of Laravel [Mix](https://laravel.com/docs/master/mix) to compile assets|
|Makes use of [Language Localization Files](https://laravel.com/docs/master/localization)|
|Active Nav states using [Laravel Requests](https://laravel.com/docs/master/requests)|
|Restrict User Email Activation Attempts|
|Capture IP to users table upon signup|
|Uses [Laravel Debugger](https://github.com/barryvdh/laravel-debugbar) for development|
|Makes use of [Password Strength Meter](https://github.com/elboletaire/password-strength-meter)|
|Makes use of [hideShowPassword](https://github.com/cloudfour/hideShowPassword)|
|User Avatar Image AJAX Upload with [Dropzone.js](https://www.dropzonejs.com/#configuration)|
|User Gravatar using [Gravatar API](https://github.com/creativeorange/gravatar)|
|User Password Reset via Email Token|
|User Login with remember password|
|User [Roles/ACL Implementation]|
|Roles and Permissions GUI|
|Makes use of [Laravel's Soft Delete Structure](https://laravel.com/docs/master/eloquent#soft-deleting)|
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
3. From the projects root run `cp .env.example .env`
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

###### And thats it with the caveat of setting up and configuring your development environment. I recommend [Laravel Homestead](https://laravel.com/docs/master/homestead)

### Seeds
##### Seeded Roles
  * Unverified - Level 0
  * User  - Level 1
  * Administrator - Level 5

##### Seeded Permissions
  * view.users
  * create.users
  * edit.users
  * delete.users

##### Seeded Users

|Email|Password|Access|
|:------------|:------------|:------------|
|user@user.com|password|User Access|
|admin@admin.com|password|Admin Access|

### Routes

```bash
+--------+----------------------------------------+---------------------------------------+-----------------------------------------------+-----------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------+
| Domain | Method                                 | URI                                   | Name                                          | Action                                                                                                          | Middleware                                                   |
+--------+----------------------------------------+---------------------------------------+-----------------------------------------------+-----------------------------------------------------------------------------------------------------------------+--------------------------------------------------------------+
|        | GET|HEAD                               | /                                     | welcome                                       | App\Http\Controllers\WelcomeController@welcome                                                                  | web                                             |
|        | GET|HEAD                               | _debugbar/assets/javascript           | debugbar.assets.js                            | Barryvdh\Debugbar\Controllers\AssetController@js                                                                | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/assets/stylesheets          | debugbar.assets.css                           | Barryvdh\Debugbar\Controllers\AssetController@css                                                               | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | DELETE                                 | _debugbar/cache/{key}/{tags?}         | debugbar.cache.delete                         | Barryvdh\Debugbar\Controllers\CacheController@delete                                                            | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/clockwork/{id}              | debugbar.clockwork                            | Barryvdh\Debugbar\Controllers\OpenHandlerController@clockwork                                                   | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/open                        | debugbar.openhandler                          | Barryvdh\Debugbar\Controllers\OpenHandlerController@handle                                                      | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | _debugbar/telescope/{id}              | debugbar.telescope                            | Barryvdh\Debugbar\Controllers\TelescopeController@show                                                          | Barryvdh\Debugbar\Middleware\DebugbarEnabled,Closure         |
|        | GET|HEAD                               | activate                              | activate                                      | App\Http\Controllers\Auth\ActivateController@initial                                                            | web,activity,auth                               |
|        | GET|HEAD                               | activate/{token}                      | authenticated.activate                        | App\Http\Controllers\Auth\ActivateController@activate                                                           | web,activity,auth                               |
|        | GET|HEAD                               | activation                            | authenticated.activation-resend               | App\Http\Controllers\Auth\ActivateController@resend                                                             | web,activity,auth                               |
|        | GET|HEAD                               | activation-required                   | activation-required                           | App\Http\Controllers\Auth\ActivateController@activationRequired                                                 | web,auth,activated,activity                     |
|        | GET|HEAD                               | active-users                          |                                               | App\Http\Controllers\AdminDetailsController@activeUsers                                                         | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | activity                              | activity                                      | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showAccessLog                           | web,auth,activity,role:admin                                 |
|        | DELETE                                 | activity/clear-activity               | clear-activity                                | LaravelLogger\App\Http\Controllers\LaravelLoggerController@clearActivityLog                        | web,auth,activity,role:admin                                 |
|        | GET|HEAD                               | activity/cleared                      | cleared                                       | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showClearedActivityLog                  | web,auth,activity,role:admin                                 |
|        | GET|HEAD                               | activity/cleared/log/{id}             |                                               | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showClearedAccessLogEntry               | web,auth,activity,role:admin                                 |
|        | DELETE                                 | activity/destroy-activity             | destroy-activity                              | LaravelLogger\App\Http\Controllers\LaravelLoggerController@destroyActivityLog                      | web,auth,activity,role:admin                                 |
|        | GET|HEAD                               | activity/log/{id}                     |                                               | LaravelLogger\App\Http\Controllers\LaravelLoggerController@showAccessLogEntry                      | web,auth,activity,role:admin                                 |
|        | POST                                   | activity/restore-log                  | restore-activity                              | LaravelLogger\App\Http\Controllers\LaravelLoggerController@restoreClearedActivityLog               | web,auth,activity,role:admin                                 |
|        | POST                                   | avatar/upload                         | avatar.upload                                 | App\Http\Controllers\ProfilesController@upload                                                                  | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | exceeded                              | exceeded                                      | App\Http\Controllers\Auth\ActivateController@exceeded                                                           | web,activity,auth                               |
|        | GET|HEAD                               | home                                  | public.home                                   | App\Http\Controllers\UserController@index                                                                       | web,auth,activated,activity,twostep             |
|        | GET|HEAD                               | images/profile/{id}/avatar/{image}    |                                               | App\Http\Controllers\ProfilesController@userProfileAvatar                                                       | web,auth,activated,currentUser,activity,twostep |
|        | POST                                   | login                                 |                                               | App\Http\Controllers\Auth\LoginController@login                                                                 | web,guest                                                    |
|        | GET|HEAD                               | login                                 | login                                         | App\Http\Controllers\Auth\LoginController@showLoginForm                                                         | web,guest                                                    |
|        | POST                                   | logout                                | logout                                        | App\Http\Controllers\Auth\LoginController@logout                                                                | web                                                          |
|        | GET|HEAD                               | logout                                | logout                                        | App\Http\Controllers\Auth\LoginController@logout                                                                | web,auth,activated,activity                     |
|        | GET|HEAD                               | logs                                  |                                               | Rap2hpoutre\LaravelLogViewer\LogViewerController@index                                                          | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | password/email                        | password.email                                | App\Http\Controllers\Auth\ForgotPasswordController@sendResetLinkEmail                                           | web,guest                                                    |
|        | GET|HEAD                               | password/reset                        | password.request                              | App\Http\Controllers\Auth\ForgotPasswordController@showLinkRequestForm                                          | web,guest                                                    |
|        | POST                                   | password/reset                        | password.update                               | App\Http\Controllers\Auth\ResetPasswordController@reset                                                         | web,guest                                                    |
|        | GET|HEAD                               | password/reset/{token}                | password.reset                                | App\Http\Controllers\Auth\ResetPasswordController@showResetForm                                                 | web,guest                                                    |
|        | GET|HEAD                               | permission-deleted/{id}               | laravelroles::permission-show-deleted         | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@show                         | web,auth,role:admin                                          |
|        | DELETE                                 | permission-destroy/{id}               | laravelroles::permission-item-destroy         | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@destroy                      | web,auth,role:admin                                          |
|        | PUT                                    | permission-restore/{id}               | laravelroles::permission-restore              | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@restorePermission            | web,auth,role:admin                                          |
|        | POST                                   | permissions                           | laravelroles::permissions.store               | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@store                               | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions                           | laravelroles::permissions.index               | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@index                               | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions-deleted                   | laravelroles::permissions-deleted             | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@index                        | web,auth,role:admin                                          |
|        | DELETE                                 | permissions-deleted-destroy-all       | laravelroles::destroy-all-deleted-permissions | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@destroyAllDeletedPermissions | web,auth,role:admin                                          |
|        | POST                                   | permissions-deleted-restore-all       | laravelroles::permissions-deleted-restore-all | LaravelRoles\App\Http\Controllers\LaravelpermissionsDeletedController@restoreAllDeletedPermissions | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions/create                    | laravelroles::permissions.create              | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@create                              | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions/{permission}              | laravelroles::permissions.show                | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@show                                | web,auth,role:admin                                          |
|        | DELETE                                 | permissions/{permission}              | laravelroles::permissions.destroy             | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@destroy                             | web,auth,role:admin                                          |
|        | PUT|PATCH                              | permissions/{permission}              | laravelroles::permissions.update              | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@update                              | web,auth,role:admin                                          |
|        | GET|HEAD                               | permissions/{permission}/edit         | laravelroles::permissions.edit                | LaravelRoles\App\Http\Controllers\LaravelPermissionsController@edit                                | web,auth,role:admin                                          |
|        | GET|HEAD|POST|PUT|PATCH|DELETE|OPTIONS | php                                   |                                               | Illuminate\Routing\RedirectController                                                                           | web                                                          |
|        | GET|HEAD                               | phpinfo                               | laravelPhpInfo::phpinfo                       | LaravelPhpInfo\App\Http\Controllers\LaravelPhpInfoController@phpinfo                               | web,auth,activated,role:admin,activity,twostep               |
|        | GET|HEAD                               | profile/create                        | profile.create                                | App\Http\Controllers\ProfilesController@create                                                                  | web,auth,activated,currentUser,activity,twostep |
|        | PUT|PATCH                              | profile/{profile}                     | profile.update                                | App\Http\Controllers\ProfilesController@update                                                                  | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{profile}                     | profile.show                                  | App\Http\Controllers\ProfilesController@show                                                                    | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{profile}/edit                | profile.edit                                  | App\Http\Controllers\ProfilesController@edit                                                                    | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | profile/{username}                    | {username}                                    | App\Http\Controllers\ProfilesController@show                                                                    | web,auth,activated,activity,twostep             |
|        | DELETE                                 | profile/{username}/deleteUserAccount  | {username}                                    | App\Http\Controllers\ProfilesController@deleteUserAccount                                                       | web,auth,activated,currentUser,activity,twostep |
|        | PUT                                    | profile/{username}/updateUserAccount  | {username}                                    | App\Http\Controllers\ProfilesController@updateUserAccount                                                       | web,auth,activated,currentUser,activity,twostep |
|        | PUT                                    | profile/{username}/updateUserPassword | {username}                                    | App\Http\Controllers\ProfilesController@updateUserPassword                                                      | web,auth,activated,currentUser,activity,twostep |
|        | GET|HEAD                               | re-activate/{token}                   | user.reactivate                               | App\Http\Controllers\RestoreUserController@userReActivate                                                       | web,activity                                    |
|        | POST                                   | register                              |                                               | App\Http\Controllers\Auth\RegisterController@register                                                           | web,guest                                                    |
|        | GET|HEAD                               | register                              | register                                      | App\Http\Controllers\Auth\RegisterController@showRegistrationForm                                               | web,guest                                                    |
|        | GET|HEAD                               | role-deleted/{id}                     | laravelroles::role-show-deleted               | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@show                               | web,auth,role:admin                                          |
|        | DELETE                                 | role-destroy/{id}                     | laravelroles::role-item-destroy               | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@destroy                            | web,auth,role:admin                                          |
|        | PUT                                    | role-restore/{id}                     | laravelroles::role-restore                    | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@restoreRole                        | web,auth,role:admin                                          |
|        | POST                                   | roles                                 | laravelroles::roles.store                     | LaravelRoles\App\Http\Controllers\LaravelRolesController@store                                     | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles                                 | laravelroles::roles.index                     | LaravelRoles\App\Http\Controllers\LaravelRolesController@index                                     | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles-deleted                         | laravelroles::roles-deleted                   | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@index                              | web,auth,role:admin                                          |
|        | DELETE                                 | roles-deleted-destroy-all             | laravelroles::destroy-all-deleted-roles       | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@destroyAllDeletedRoles             | web,auth,role:admin                                          |
|        | POST                                   | roles-deleted-restore-all             | laravelroles::roles-deleted-restore-all       | LaravelRoles\App\Http\Controllers\LaravelRolesDeletedController@restoreAllDeletedRoles             | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles/create                          | laravelroles::roles.create                    | LaravelRoles\App\Http\Controllers\LaravelRolesController@create                                    | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles/{role}                          | laravelroles::roles.show                      | LaravelRoles\App\Http\Controllers\LaravelRolesController@show                                      | web,auth,role:admin                                          |
|        | PUT|PATCH                              | roles/{role}                          | laravelroles::roles.update                    | LaravelRoles\App\Http\Controllers\LaravelRolesController@update                                    | web,auth,role:admin                                          |
|        | DELETE                                 | roles/{role}                          | laravelroles::roles.destroy                   | LaravelRoles\App\Http\Controllers\LaravelRolesController@destroy                                   | web,auth,role:admin                                          |
|        | GET|HEAD                               | roles/{role}/edit                     | laravelroles::roles.edit                      | LaravelRoles\App\Http\Controllers\LaravelRolesController@edit                                      | web,auth,role:admin                                          |
|        | GET|HEAD                               | routes                                |                                               | App\Http\Controllers\AdminDetailsController@listRoutes                                                          | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | search-users                          | search-users                                  | App\Http\Controllers\UsersManagementController@search                                                           | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | terms                                 | terms                                         | App\Http\Controllers\TermsController@terms                                                                      | web                                             |
|        | GET|HEAD                               | users                                 | users                                         | App\Http\Controllers\UsersManagementController@index                                                            | web,auth,activated,role:admin,activity,twostep  |
|        | POST                                   | users                                 | users.store                                   | App\Http\Controllers\UsersManagementController@store                                                            | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/create                          | users.create                                  | App\Http\Controllers\UsersManagementController@create                                                           | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/deleted                         | deleted.index                                 | App\Http\Controllers\SoftDeletesController@index                                                                | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/deleted/{deleted}               | deleted.show                                  | App\Http\Controllers\SoftDeletesController@show                                                                 | web,auth,activated,role:admin,activity,twostep  |
|        | DELETE                                 | users/deleted/{deleted}               | deleted.destroy                               | App\Http\Controllers\SoftDeletesController@destroy                                                              | web,auth,activated,role:admin,activity,twostep  |
|        | PUT|PATCH                              | users/deleted/{deleted}               | deleted.update                                | App\Http\Controllers\SoftDeletesController@update                                                               | web,auth,activated,role:admin,activity,twostep  |
|        | DELETE                                 | users/{user}                          | user.destroy                                  | App\Http\Controllers\UsersManagementController@destroy                                                          | web,auth,activated,role:admin,activity,twostep  |
|        | PUT|PATCH                              | users/{user}                          | users.update                                  | App\Http\Controllers\UsersManagementController@update                                                           | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/{user}                          | users.show                                    | App\Http\Controllers\UsersManagementController@show                                                             | web,auth,activated,role:admin,activity,twostep  |
|        | GET|HEAD                               | users/{user}/edit                     | users.edit                                    | App\Http\Controllers\UsersManagementController@edit                                                             | web,auth,activated,role:admin,activity,twostep  |
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
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

EMAIL_EXCEPTION_ENABLED=false
EMAIL_EXCEPTION_FROM="${MAIL_FROM_ADDRESS}"
EMAIL_EXCEPTION_TO='email1@gmail.com, email2@gmail.com'
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
LARAVEL_2STEP_CSS_FILE="css/laravel2step/app.css"
LARAVEL_2STEP_APP_CSS_ENABLED=false
LARAVEL_2STEP_APP_CSS="css/app.css"
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN_ENABLED=true
LARAVEL_2STEP_BOOTSTRAP_CSS_CDN="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"

DEFAULT_GRAVATAR_SIZE=80
DEFAULT_GRAVATAR_FALLBACK=http://c1940652.r52.cf0.rackcdn.com/51ce28d0fb4f442061000000/Screen-Shot-2013-06-28-at-5.22.23-PM.png
DEFAULT_GRAVATAR_SECURE=false
DEFAULT_GRAVATAR_MAX_RATING=g
DEFAULT_GRAVATAR_FORCE_DEFAULT=false
DEFAULT_GRAVATAR_FORCE_EXTENSION=jpg

DROPZONE_JS_CDN=https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js

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
LARAVEL_LOGGER_JQUERY_CDN_URL=https://code.jquery.com/jquery-2.2.4.min.js
LARAVEL_LOGGER_BLADE_CSS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BLADE_JS_PLACEMENT_ENABLED=true
LARAVEL_LOGGER_BOOTSTRAP_JS_CDN_ENABLED=false
LARAVEL_LOGGER_BOOTSTRAP_JS_CDN_URL=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js
LARAVEL_LOGGER_FONT_AWESOME_CDN_ENABLED=false
LARAVEL_LOGGER_FONT_AWESOME_CDN_URL=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css
LARAVEL_LOGGER_BOOTSTRAP_CSS_CDN_ENABLED=false
LARAVEL_LOGGER_BOOTSTRAP_CSS_CDN_URL=https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css

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
ROLES_GUI_BLADE_EXTENDED='layouts.app'
ROLES_GUI_TITLE_EXTENDED='template_title'
ROLES_GUI_LARAVEL_ROLES_ENABLED=true
ROLES_GUI_DATATABLES_JS_ENABLED=false
ROLES_GUI_FLASH_MESSAGES_ENABLED=false
ROLES_GUI_BLADE_PLACEMENT_CSS=template_linked_css
ROLES_GUI_BLADE_PLACEMENT_JS=footer_scripts

# Google Analytics - If blank it will not render, default is false
GOOGLE_ANALYTICS_ID=
#GOOGLE_ANALYTICS_ID='UA-XXXXXXXX-X'

# NOTE: YOU CAN REMOVE THE KEY CALL IN app.blade.php IF YOU GET A POP UP AND DO NOT WANT TO SETUP A KEY FOR DEV
# Google Maps API v3 Key - https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key
GOOGLEMAPS_API_STATUS=true
GOOGLEMAPS_API_KEY=YOURGOOGLEMAPSkeyHERE

# https://www.google.com/recaptcha/admin#list
ENABLE_RECAPTCHA=true
RE_CAP_SITE=YOURGOOGLECAPTCHAsitekeyHERE
RE_CAP_SECRET=YOURGOOGLECAPTCHAsecretHERE

```

#### Laravel Developement Packages Used References
* https://laravel.com/docs/master/authentication
* https://laravel.com/docs/master/authorization
* https://laravel.com/docs/master/routing
* https://laravel.com/docs/master/migrations
* https://laravel.com/docs/master/queries
* https://laravel.com/docs/master/views
* https://laravel.com/docs/master/eloquent
* https://laravel.com/docs/master/eloquent-relationships
* https://laravel.com/docs/master/requests
* https://laravel.com/docs/master/errors

### Screenshots
![ERD](https://user-images.githubusercontent.com/21073572/119157564-9a618180-ba55-11eb-8fcd-e7b300095864.png)
![1-Login Page](https://user-images.githubusercontent.com/21073572/119157354-64bc9880-ba55-11eb-9c51-a3b61d72c6e6.png)
![2-Register Page](https://user-images.githubusercontent.com/21073572/119157617-a8af9d80-ba55-11eb-9dce-f925efc43228.png)
![3-Admin Home Page](https://user-images.githubusercontent.com/21073572/119157649-b36a3280-ba55-11eb-8f44-8aa14a9a7bc2.png)
![4-User Home Page](https://user-images.githubusercontent.com/21073572/119157707-bf55f480-ba55-11eb-8c8a-dfdc1f91fc9f.png)
![5-Profle Page](https://user-images.githubusercontent.com/21073572/119157757-cb41b680-ba55-11eb-9a66-5ce3b2e6c21f.png)
![6- Show Profile](https://user-images.githubusercontent.com/21073572/119157826-db599600-ba55-11eb-9599-0c5d35541a27.png)
![7-edit Profile](https://user-images.githubusercontent.com/21073572/119157863-e57b9480-ba55-11eb-8b21-56a1cb9785e9.png)

![8- Admin Panel Users List](https://user-images.githubusercontent.com/21073572/119157915-f3311a00-ba55-11eb-8697-df67f79e3ad5.png)
![9-Admin Panel-create user](https://user-images.githubusercontent.com/21073572/119158000-0b089e00-ba56-11eb-8224-670123200d55.png)
![10-Admin Panel-manage roles](https://user-images.githubusercontent.com/21073572/119158076-1cea4100-ba56-11eb-9d11-73bbdf80f5a9.png)

### File Tree
```
laravel-auth
├── .editorconfig
├── .env
├── .env.example
├── .env.travis
├── .gitattributes
├── .github
│   ├── FUNDING.yml
│   └── ISSUE_TEMPLATE
│       ├── bug_report.md
│       ├── feature_request.md
│       └── project-questions-and-help.md
├── .gitignore
├── .phpunit.result.cache
├── .styleci.yml
├── .travis.yml
├── CODE_OF_CONDUCT.md
├── LICENSE
├── README.md
├── _config.yml
├── app
│   ├── Console
│   │   ├── Commands
│   │   │   └── DeleteExpiredActivations.php
│   │   └── Kernel.php
│   ├── Exceptions
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── AdminDetailsController.php
│   │   │   ├── Auth
│   │   │   │   ├── ActivateController.php
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   ├── Controller.php
│   │   │   ├── ProfilesController.php
│   │   │   ├── RestoreUserController.php
│   │   │   ├── SoftDeletesController.php
│   │   │   ├── TermsController.php
│   │   │   ├── UserController.php
│   │   │   ├── UsersManagementController.php
│   │   │   └── WelcomeController.php
│   │   ├── Kernel.php
│   │   ├── Middleware
│   │   │   ├── Authenticate.php
│   │   │   ├── CheckCurrentUser.php
│   │   │   ├── CheckForMaintenanceMode.php
│   │   │   ├── CheckIsUserActivated.php
│   │   │   ├── EncryptCookies.php
│   │   │   ├── RedirectIfAuthenticated.php
│   │   │   ├── TrimStrings.php
│   │   │   ├── TrustProxies.php
│   │   │   └── VerifyCsrfToken.php
│   │   ├── Requests
│   │   │   ├── DeleteUserAccount.php
│   │   │   ├── UpdateUserPasswordRequest.php
│   │   │   └── UpdateUserProfile.php
│   │   └── ViewComposers
│   ├── Logic
│   │   ├── Activation
│   │   │   └── ActivationRepository.php
│   │   └── Macros
│   │       └── HtmlMacros.php
│   ├── Mail
│   │   └── ExceptionOccured.php
│   ├── Models
│   │   ├── Activation.php
│   │   ├── Profile.php
│   │   └── User.php
│   ├── Notifications
│   │   ├── SendActivationEmail.php
│   │   └── SendGoodbyeEmail.php
│   ├── Providers
│   │   ├── AppServiceProvider.php
│   │   ├── AuthServiceProvider.php
│   │   ├── BroadcastServiceProvider.php
│   │   ├── ComposerServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   ├── LocalEnvironmentServiceProvider.php
│   │   ├── MacroServiceProvider.php
│   │   └── RouteServiceProvider.php
│   └── Traits
│       ├── ActivationTrait.php
│       ├── CaptchaTrait.php
│       └── CaptureIpTrait.php
├── artisan
├── bootstrap
│   ├── app.php
│   ├── autoload.php
│   └── cache
│       ├── .gitignore
│       ├── packages.php
│       └── services.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── cors.php
│   ├── database.php
│   ├── debugbar.php
│   ├── exceptions.php
│   ├── filesystems.php
│   ├── gravatar.php
│   ├── hashing.php
│   ├── laravel2step.php
│   ├── laravelPhpInfo.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── roles.php
│   ├── services.php
│   ├── session.php
│   ├── settings.php
│   ├── usersmanagement.php
│   └── view.php
├── database
│   ├── .gitignore
│   ├── factories
│   │   └── ModelFactory.php
│   ├── migrations
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2014_10_12_100000_create_password_resets_table.php
│   │   ├── 2016_01_15_105324_create_roles_table.php
│   │   ├── 2016_01_15_114412_create_role_user_table.php
│   │   ├── 2016_01_26_115212_create_permissions_table.php
│   │   ├── 2016_01_26_115523_create_permission_role_table.php
│   │   ├── 2016_02_09_132439_create_permission_user_table.php
│   │   ├── 2017_03_09_082526_create_activations_table.php
│   │   ├── 2017_03_21_042918_create_profiles_table.php
│   │   ├── 2017_12_09_070937_create_two_step_auth_table.php
│   │   └── 2019_08_19_000000_create_failed_jobs_table.php
│   └── seeds
│       ├── ConnectRelationshipsSeeder.php
│       ├── DatabaseSeeder.php
│       ├── PermissionsTableSeeder.php
│       ├── RolesTableSeeder.php
│       └── UsersTableSeeder.php
├── license.svg
├── package-lock.json
├── package.json
├── phpunit.xml
├── public
│   ├── .htaccess
│   ├── css
│   │   ├── app.css
│   │   └── laravel2step
│   │       ├── app.css
│   │       └── app.min.css
│   ├── favicon.ico
│   ├── fonts
│   │   ├── fontawesome-webfont.eot
│   │   ├── fontawesome-webfont.svg
│   │   ├── fontawesome-webfont.ttf
│   │   ├── fontawesome-webfont.woff
│   │   ├── fontawesome-webfont.woff2
│   │   ├── glyphicons-halflings-regular.eot
│   │   ├── glyphicons-halflings-regular.svg
│   │   ├── glyphicons-halflings-regular.ttf
│   │   ├── glyphicons-halflings-regular.woff
│   │   └── glyphicons-halflings-regular.woff2
│   ├── images
│   │   ├── wink.png
│   │   └── wink.svg
│   ├── index.php
│   ├── js
│   │   ├── app.99230f42ad184f498ce6.js
│   │   ├── app.js
│   │   └── app.js.LICENSE.txt
│   ├── mix-manifest.json
│   ├── robots.txt
│   └── web.config
├── resources
│   ├── assets
│   │   ├── js
│   │   │   ├── app.js
│   │   │   ├── bootstrap.js
│   │   │   └── components
│   │   │       ├── ExampleComponent.vue
│   │   │       └── UsersCount.vue
│   │   ├── sass
│   │   │   ├── _avatar.scss
│   │   │   ├── _badges.scss
│   │   │   ├── _buttons.scss
│   │   │   ├── _forms.scss
│   │   │   ├── _helpers.scss
│   │   │   ├── _hideShowPassword.scss
│   │   │   ├── _lists.scss
│   │   │   ├── _logs.scss
│   │   │   ├── _margins.scss
│   │   │   ├── _mixins.scss
│   │   │   ├── _modals.scss
│   │   │   ├── _panels.scss
│   │   │   ├── _password.scss
│   │   │   ├── _typography.scss
│   │   │   ├── _user-profile.scss
│   │   │   ├── _variables.scss
│   │   │   ├── _visibility.scss
│   │   │   ├── _wells.scss
│   │   │   └── app.scss
│   │   └── scss
│   │       └── laravel2step
│   │           ├── _animations.scss
│   │           ├── _mixins.scss
│   │           ├── _modals.scss
│   │           ├── _variables.scss
│   │           ├── _verification.scss
│   │           └── app.scss
│   ├── lang
│   │   ├── en
│   │   │   ├── auth.php
│   │   │   ├── emails.php
│   │   │   ├── forms.php
│   │   │   ├── modals.php
│   │   │   ├── pagination.php
│   │   │   ├── passwords.php
│   │   │   ├── permsandroles.php
│   │   │   ├── profile.php
│   │   │   ├── terms.php
│   │   │   ├── titles.php
│   │   │   ├── usersmanagement.php
│   │   │   └── validation.php
│   └── views
│       ├── auth
│       │   ├── activation.blade.php
│       │   ├── exceeded.blade.php
│       │   ├── login.blade.php
│       │   ├── passwords
│       │   │   ├── email.blade.php
│       │   │   └── reset.blade.php
│       │   └── register.blade.php
│       ├── emails
│       │   └── exception.blade.php
│       ├── errors
│       │   ├── 403.blade.php
│       │   ├── 404.blade.php
│       │   ├── 500.blade.php
│       │   └── 503.blade.php
│       ├── home.blade.php
│       ├── layouts
│       │   └── app.blade.php
│       ├── modals
│       │   ├── modal-delete.blade.php
│       │   ├── modal-form.blade.php
│       │   └── modal-save.blade.php
│       ├── pages
│       │   ├── admin
│       │   │   ├── active-users.blade.php
│       │   │   ├── home.blade.php
│       │   │   └── route-details.blade.php
│       │   ├── public
│       │   │   └── terms.blade.php
│       │   ├── status.blade.php
│       │   └── user
│       │       └── home.blade.php
│       ├── panels
│       │   └── welcome-panel.blade.php
│       ├── partials
│       │   ├── errors.blade.php
│       │   ├── form-status.blade.php
│       │   ├── nav.blade.php
│       │   ├── search-users-form.blade.php
│       │   ├── status-panel.blade.php
│       │   └── status.blade.php
│       ├── profiles
│       │   ├── edit.blade.php
│       │   └── show.blade.php
│       ├── scripts
│       │   ├── check-changed.blade.php
│       │   ├── datatables.blade.php
│       │   ├── delete-modal-script.blade.php
│       │   ├── form-modal-script.blade.php
│       │   ├── gmaps-address-lookup-api3.blade.php
│       │   ├── google-maps-geocode-and-map.blade.php
│       │   ├── save-modal-script.blade.php
│       │   ├── search-users.blade.php
│       │   ├── toggleStatus.blade.php
│       │   ├── tooltips.blade.php
│       │   └── user-avatar-dz.blade.php
│       ├── usersmanagement
│       │   ├── create-user.blade.php
│       │   ├── edit-user.blade.php
│       │   ├── show-deleted-user.blade.php
│       │   ├── show-deleted-users.blade.php
│       │   ├── show-user.blade.php
│       │   └── show-users.blade.php
│       └── welcome.blade.php
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── server.php
└── webpack.mix.js
```
