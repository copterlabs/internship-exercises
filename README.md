Internship Exercises
====================

These exercises are designed to identify a few key characteristics for potential interns at Copter Labs.


The Exercises
-------------

### Fork the Repo and Pull a Local Copy

Get a copy of the code on your local machine.

#### Don't Forget to Initialize Your Submodules!

After pulling the local copy, run the following:

```sh
git submodule init
git submodule update
```


### Create a Feature Branch

Create a new branch in Git for your changes.


### Modify the WordPress Child Theme

To complete this test, the candidate needs to modify the child theme to change the footer link.

The current link is:

```html
Powered by 
<a href="http://gethoverboard.com/">Hoverboard</a>
```

In the child theme, it needs to be changed to:

```html
Modified by
<a href="https://github.com/your_username">Your Name Here</a>
```

#### Hints

 1. *Child Themes* in WordPress are used so the parent theme can be reused across 
    multiple projects. *You cannot modify the parent theme, or you'll break future updates for the project.*
 2. WordPress uses *Template Hierarchy* to determine which files are loaded. Start 
    by checking that out.


### Commit Your Changes and Submit a Pull Request

After completing the changes, submit a pull request to the [main repo](https://github.com/copterlabs/internship-exercises) for review.


