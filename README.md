SB Admin 2 templates for InfyOm Laravel Generator
================================================

These are template files for using SB Admin 2 for Bootstrap 4 with InfyOm generators

## Usage

To use this package you must have the [InfyOm package installed](http://labs.infyom.com/laravelgenerator/docs/5.5/installation).

In your Laravel's `package.json` add the following line to the `"require"` array:

`"exploreorg/sbadmin-templates": "dev-master"`

Then, add or modify the `"repositories"` key to include a reference to the repo:

```json
"repositories": [
     {
         "type": "vcs",
         "url": "https://github.com/exploreorg/sbadmin-templates"
     }
 ]
```

Run `composer update`. Then in your `config/infyom/laravel_generator.php` file, update the `"templates"` value as follows:

`'templates'         => '../exploreorg/sbadmin-templates',`

To publish the layout, run the Publish Layout Command:

`php artisan infyom.publish:layout`

If you would like to further customize the generator templates, you can publish the templates
to your application using the Publish Templates Command:

`php artisan infyom.publish:templates`