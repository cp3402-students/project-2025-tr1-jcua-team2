# Deployment documentation
## Project workflow
1. Pull any previous changes from github repository (or check if a pull request into the main branch is required).
2. Use any local environment tools (Text editor, local version of wordpress etc.) to work on elements related to the project (PHP, pages and CSS).
3. Push the changes to the github repository (Either main branch or personal branch and initiate pull request) and notify for review. [^1]
4. When satisfied, push the new elements into the staging environment and get others to check how it looks "live".
5. Repeat steps 1-4 until satisfied with final product, push to production server.

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

# Checks required before pushing to production
- [ ] Create all required basic pages to fulfil requirements laid out by the client
- [ ] Using wordpress' system, use the post function to have admins make new required posts for the site.
- [ ] Design a theme using CSS and PHP to create a distinct look for the website
- [ ] Ensure all content is up to date across the github repo and the staging environment.
- [ ] All documentation on the use of themes and pages are up to date
- [ ] Site itself can be accessed in staging, ensuring feedback before production.
