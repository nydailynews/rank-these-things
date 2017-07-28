# Ranker

## What is this?
A drag and drop news quiz to collect users' arrangements of a list of choices.
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

## License

This code is available under the MIT license. For more information, please see the LICENSE.txt file in this repo.
