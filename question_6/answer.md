### Use a GitHub Branch as a Composer Dependency, Explain how you would configure composer to use `https://github.com/pressbooks/new-private-project` with the branch `bugfixes` in your project.

The composer.json file describes the depencies needed for an application using it to function. A basic composer.json file may look like:
```
{
  "name": "some-name/some-name",
  "require": {},
   ...
}
```

The `composer.json` file does a lot more than just defining the project dependencies. It can also contain other metadata an example is `repositories`.
When the repositories meta is defined, it could mean that the package (package refers to the project in question) is not published on packagist yet. 
The package can still be required into another project with composer through the repositories metadata. It'd look something like:

```
...
"repositories": {
    "url: "https://the-source-control-url.git"
}
...
```


