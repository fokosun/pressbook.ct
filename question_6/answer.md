### Use a GitHub Branch as a Composer Dependency, Explain how you would configure composer to use `https://github.com/pressbooks/new-private-project` with the branch `bugfixes` in your project.

The composer.json file describes the dependencies needed for an application using it to function. A basic composer.json file may look like:
```
{
  "name": "namespace-name/library-or-package-name",
  "require": {},
   ...
}
```

The `composer.json` file does a lot more than just defining the project dependencies. It can also contain other metadata an example is `repositories`.
When the repositories meta is defined, it could mean that the package (package refers to the project in question) is not published on packagist yet. 
The package can still be required into another project with composer through the repositories metadata. It'd look something like:

```
...
"repositories": [
    {
        "type": "vcs"
        "url: "https://github.com/pressbooks/new-private-project"
    }
]
...
```
The repositories property is a list of objects and each object contains information about the repository to be included in the project.
In the above example, the vcs specifies the version control system e.g git, svn ... where the package lives and url specifies the url to the git repository.

```
{
    "name":  "florence/my-project",
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/pressbooks/new-private-project.git"
        }
    ],
    "require": {
        "pressbooks/new-private-project": "bugfixes"
    }
}
```

In the above example, when composer install is run, it will look for a project at the defined 
url `https://github.com/pressbooks/new-private-project.git` is it's a git repo, composer 
will download the package into the appropriate location depending on the project type 
specified in the package's composer.json file. The require key informs composer about 
the specific branch to be installed in this example, `bugfixes`