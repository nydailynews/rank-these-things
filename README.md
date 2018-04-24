# Rank These Things

## What is this?
A drag and drop news poll to collect users' arrangements of a list of choices.
Demo: http://www.nydailynews.com/entertainment/tv/game-thrones-character-iron-throne-article-1.3365102

![ranker inaction](screenshots/ranker.png)

## Credits
Peggy Bustamante, Joe Murphy

## Assumptions

* JQuery
* Miso


## What's in here?

The project contains the following folders and important files:

* ``www/_blank/index.html`` -- main file.
* ``www/js`` -- ranker.js has all the action and business logic.
* ``www/data`` -- Data files, in a csv format and also a SQL dump of the vote count.
* ``www/incl`` -- PHP file "ranker.php" for recording user's selections/votes
* ``www/css`` -- Base css files to get rolling with.

### What needs configuring?

* The text in each ranker's body markup
* The statNames in each ranker's html document's `<head>` element
* The handler.php in each ranker's directory

#### How to set up the database

### How to create a new ranker
1. cd into the www/ directory and copy the `_blank` to new directory named after your project.
1. Edit the list in `var statNames = {` with whatever you want to rank.
1. Replace `TITLE` text (it's in two places) with what it is you're ranking for example "Rank the biggest draft busts in New York Jets history."
1. Make sure the number of items in `<div id="sortableStats">` matches the number of items you're ranking. 
