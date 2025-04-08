# Site documentation
The basic idea behind this theme and site layout is to allow for the majority of this site to be as simple as possible for the client to update and add new content to the website. This will allow for news and content to be created quickly and be easily published with very little Wordpress training. 

By using Wordpress posts, the client is able to create a new page, utilise site categories to decide to display the content on the home page or not, and be able to easily remove content from the home page by un-selecting the home page category. 

Using posts throughout the site helps ensure a consistent feel and formatting throughout. Adding new posts to the Menu will dynamically update the navigation menus in both the header and footer. 

## Home Page
* Use posts to add articles to the home page
* Use the 'home-page-post' category to display on the home page
* Maximum of 9 articles can be displayed on the home page
* Articles will stack on top of each other on smaller devices such as phones and tablets rather than being 3 columns wide
* Articles display a shortened length of their content on the home page to ensure consistency. The post can be opened and viewed to reveal the whole article
* Hero image is set in the index.php
* Hero image is stored in the theme in the directory /assets/images/
* Hero image link look for the post with the 'slug' "about"
* For displaying pictures on the Home Page as part of the home-page-post, utilise the **Set featured image** within the post's editor. If you are not displaying an image on the home page, or creating a standard post, inserting the image through the content editor will work as expected. 

## Other pages
* These are also created using posts
* Adding these posts to the Menu will dynamically update both the header navigation and footer navigation
    * **Appearance** --> **Menus**
* Registration form uses a plugin to achieve this so would need further setup for the site to go live as well as setting up other necessities such as a domain name and https
* Site banner can be changed by modifying the **Header image**
    * **Appearance** --> **Customize** --> **Header Image**
* Team members and information can be updated via the WPS Team plugin installed
* WP Go Maps plugin used to generate the location map of the learning center. Use this to modify the pins, default zoom level etc displayed on the **Contact** page