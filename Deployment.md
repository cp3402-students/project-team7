# Development Documentation
When working on themes in this project, each group member set up a local environment version of WordPress to test child themes on before uploading to the hosted site. Theme files can be downloaded from github and placed into the local folder to immediately change and test new themes, see instructions below.

## Development Environment Setup
For the creation of your local development environment:

1. [Local Environment](https://localwp.com/) Download from link. Automatic WordPress installation, local sets up WordPress for you. one click and your site is ready to go, SSL included!

## Repository Structure/Version Control
We have a defined branch structure for development on themes. See [local-theme-creation](https://github.com/cp3402-students/project-team7/tree/local-theme-creation). A seperate branch is used to test themes which is commited to, and themes can be downloaded from here. 
Once the theme was complete, it was merged back to the main branch. (Seee file: cms7assignmenttheme).

#### How to develop theme updates locally
Download a basic theme template such as [Underscores](https://underscores.me/) or download our current theme from our github [local-theme-creation](https://github.com/cp3402-students/project-team7/tree/local-theme-creation) for editing. Use [Visual Studio Code](https://code.visualstudio.com/) to edit the stylesheets of these themes. On local hosting, press ```'go to site folder' -> app -> public -> wpcontent -> themes``` and create a folder here for your child theme. Copy the file path into VSC and any changes made here on the stylesheets (CSS) will automatically upload live changes on the local hosted website for theme development. Then changes can then be commited to an new branch on github and merged to the main branch if any of the themes aspects are wanted for use.





