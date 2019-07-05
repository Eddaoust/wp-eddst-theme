# WP eddst theme

**This is my very first Wordpress Theme**

## Welcome

* Create a homepage and set it as a static page
* For adding section, create new pages and set the static page as parent
* Add custom fields to homepage:
    * fullname: your fullname
    * job: your job name
    * nickname: your nickname
* Creating top navbar:
    * Create a menu named 'navbar'
    * Add personnal link:
        * url: #linkname
        * text: linkname
    * Select the location 'Navbar'
    
## About section

* Add small description of you (text)
* Add one thumbnail
* Creating the link button menu:
    * Create a menu named 'weblink'
    * Add personnal link:
        * url: your url link
        * text: the html code from fontawesome like this ```<i class="fab fa-twitter"></i>```
        * Select the location 'Weblink'
        
## Skills section

* Add one thumbnail
* Skills progression barre:
    * Add custom fields (6 Maximum)
    * Key: Name of skill
    * Value: number between 0 - 100
    
## Story section

* Add one item:
    * Add custom field (4 to optimal display)
    * Key: the same name of the current page / section
    * Value: add data like following example using ' / ' as delimiter: ```2017 / Main Title / Secondary Title```
    
## Work section

***This section present a small picture of one project, on click, open a modal with more info about it***

* First, create an article category with the same name of the section
* Next, to add one item, create an article
    * Set the category to the previously created
    * Add one thumbnail, this is the trigger to open modal
    * Add the item title
    * Add small description of the item (paragraph)
    * Add list of notable thing (list)
    * Add one image
    * If you want adding a link to a Github account or Website:
        * Add custom field
        * Key: article_link
        * Value: add data like following example using ' + ' as delimiter: ```Url + HTML code of font awesome or text```
        
## Contact section

* The mail is send to the admin email

## Infos

* login: eddst
* pass: eddst