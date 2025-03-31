# Deployment documentation
<h1>Project workflow</h1>
1. Pull any previous changes from github repository (or check if a pull request into the main branch is required).
2. Use any local environment tools (Text editor, local version of wordpress etc.) to work on elements related to the project (PHP, pages and CSS).
3. Push the changes to the github repository (Either main branch or personal branch and initiate pull request) and notify for review
4. When satisfied, push the new elements into the staging environment and get others to check how it looks "live".
5. Repeat steps 1-4 until satisfied with final product, push to production server.

<h1>Checks required before pushing to production</h1>
- [ ] Create all required basic pages to fulfil requirements laid out by the client
- [ ] Using wordpress' system, use the post function to have admins make new required posts for the site.
- [ ] Design a theme using CSS and PHP to create a distinct look for the website
- [ ] Ensure all content is up to date across the github repo and the staging environment.
- [ ] All documentation on the use of themes and pages are up to date
- [ ] Site itself can be accessed in staging, ensuring feedback before production.
