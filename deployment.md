# Deployment documentation
## Project workflow
1. Pull any previous changes from github repository (or check if a pull request into the main branch is required).
2. Use any local environment tools (Text editor, local version of wordpress etc.) to work on elements related to the project (PHP, pages and CSS).
3. Push the changes to the github repository (Either main branch or personal branch and initiate pull request) and notify for review. [^1]
4. Once code review has been satisfied, merge the changes into the main branch.
5. When satisfied, push the new elements into the staging environment and get others to check how it looks "live".
6. Repeat steps 1-4 until satisfied with final product, push to production server.

[^1]: Refer to how to create a pull request if unsure how to create a new local branch and create a new pull request.

### Creating a new pull request
1. Create a new branch on your local repository by running the command ```git switch -c branch-feature-name```
2. Confirm that you have moved to your newly created branch ```git branch -a```
3. Check which files need to be staged for commit ```git status```
4. Once you have confirmed these files are correct, add the files to staging ```git add .```
5. Commit your changes ```git commit -m "Git commit message description```
6. Push your changes to github ```git push -u origin branch-feature-name```. Note: origin is the name given to the remote repository when first setting up the repo. Verify your remote repository name with ```git remote -v```
7. The pull request will then be created in Github. Login to github and view the pull request. If the merge is not overwriting other work, and is just contributing, the merge can be done with no conflicts. Otherwise, request another member to review the pull request before merging.
8. You can switch your local git repository back to the master branch with the command ```git switch master```
9. Update your git repository by performing a git pull to bring your local branch back into sync ```git pull origin master```

## Updating Staging and Production Environments
1. Make a backup of your local Wordpress database. SSH into your environment and from your public-html folder (where the wp-config.php file is located for the site), run the command ```wp db export```
2. Compress (zip) the theme folder, ready for installing into Wordpress
3. Login to the Wordpress environment you are wishing to update (staging or production) and update the theme to the latest version by navigating to **Appearance** -> **Themes** --> **Add New Theme** --> **Upload Theme** --> **Choose File** --> **Upload**
4. Utilising a tool such as filezilla or winscp, connect to the staging or production environment
5. Synchronise (rather than having to do a full folder copy) the contents of the ```wp-content``` from the local environment to the ```wp-content``` folder on the remote host. [^2]
6. Copy the Wordpress database backup to the server (where the wp-config.php file is located) [^3]
7. Change directory to the wordpress folder ```cd /bitnami/wordpress```
8. Perform a reset on the database ```sudo wp db reset --yes```
9. Import the backed up database ```sudo wp db import SQL_DATABASE_EXPORT.sql```
10. Check the website from an incognito window (or better yet, another device such as your phone) to ensure all content is correctly displaying, links are working as intended etc.

[^2]: For our Amazon Lightsail Environments, the location for the wp-content folder is ```/bitnami/wordpress/wp-content``` \
[^3]: Our environment has this located ```/bitnami/wordpress```. Note to access this folder, copy the sql export to the wp-content folder and move the file once copied with the command ```sudo mv /bitnami/wordpress/wp-content/SQL_DATABASE_EXPORT.sql /bitnami/wordpress/```


# Checks required before pushing to production
- [ ] Create all required basic pages to fulfil requirements laid out by the client on the staging website
- [ ] Using wordpress' system, use the post function to have admins make new required posts for the site.
- [ ] Test the theme using CSS and PHP to create a distinct look for the website
- [ ] Ensure no static pages/links/dependencies are used that are pointing to a local environment only
- [ ] Ensure all content is up to date across the github repo and the staging environment.
- [ ] All documentation on the use of themes and pages are up to date
- [ ] Site itself can be accessed in staging, ensuring feedback before production.