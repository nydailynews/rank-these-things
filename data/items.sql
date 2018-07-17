# Run the query on line two first.
INSERT INTO ranker (slug, create_date) VALUES ('name-of-your-ranker', NOW());
# After you run it, run the next query (the one on lne 5). You'll get a few records back,
# you're interested in the value of the ranker_id field for the new record you created.
SELECT * FROM ranker;
# Fine-tune this query next. Instead of the "2" that's on each line, use the ranker_id.
INSERT INTO ranker_items (ranker_id, title) VALUES
(2,'hi'),
(2,'bye'),
(2,'yes'),
(2,'no'),
(2,''),
(2,''),
(2,''),
(2,''),
(2,''),
(2,''),
(2,''),
(2,''),
(2,'');
# Finally, get the id numbers for the records you just inserted into ranker_items.
# To do that, use a query like this, except swap out the "2" for whatever the ranker_id was.
SELECT * FROM ranker_items WHERE ranker_id = 2;
