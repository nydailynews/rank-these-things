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

## Usage

### How to create a new ranker
1. cd into the [www/](www/) directory and copy the `_blank` to new directory named after your project (example: `$ cp -fr _blank rank-these-beautiful-puppies`).
1. Open your new project’s index.html file in your favorite text editor and make the following changes:
    1. Edit the list in `var statNames = {` with whatever you want to rank.
    1. Replace `TITLE` text (it's in two places) with what it is you're ranking for example "Rank the biggest draft busts in New York Jets history."
    1. Make sure the number of items in `<div id="sortableStats">` matches the number of items you're ranking. If it doesn’t, add new items (the markup should look along the lines of `<div id="item-7" class="dragger"><input type="checkbox" id="a7" class="statsCheck" onchange="cbChanged(this,7);"><p></p></div>`, but change the number).
1. Create records for the items we're ranking in the database:
    1. Copy the contents of [www/data/items.sql](www/data/items.sql) into a scratch text file somewhere.

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
