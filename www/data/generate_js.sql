# Use this to generate the js we paste into the index.html for the particular ranker we're building.
# You need to supply the id of the ranker from the `ranker` table.
SELECT CONCAT("'a", id, "':'", title, "',")
FROM ranker_items WHERE ranker_id = 1;
