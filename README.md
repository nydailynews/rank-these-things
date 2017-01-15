# Ranker

## What is this?
A drag and drop news quiz to collect users' arrangements of a list of choices.
Demo: http://www.denverpost.com/2016/10/28/rank-these-25-donald-trump-campaign-scandals/

![ranker inaction](screenshots/ranker.png)

## Credits
Peggy Bustamante, Joe Murphy

## Assumptions

* JQuery
* Miso


## What's in here?

The project contains the following folders and important files:

* ``ranker.html`` -- main file.
* ``JS`` -- ranker.js has all the action and business logic.
* ``data`` -- Data files, in a csv format and also a SQL dump of the vote count.
* ``incl`` -- PHP file "ranker.php" for recording user's selections/votes
* ``css`` -- Base css files to get rolling with.

### What needs configuring?

* ranker.html body markup
* js/ranker.js lines 70, 73 (maybe move those to html file)
* incl/ranker.php to point to the correct table

## To-do's

- [ ] Create a database structure so we don't have to create a new table with each thing we want to rank
- [ ] Modify the server request so we don't need a different ranker.php for each thing we want to rank

## License

This code is available under the MIT license. For more information, please see the LICENSE.txt file in this repo.
