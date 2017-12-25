DELETE FROM lzh_member_detaillog WHERE id NOT IN ( SELECT a.* FROM (SELECT MIN(id) FROM lzh_member_detaillog GROUP BY ccfax_orderno) a);

DELETE FROM lzh_member_piggybank WHERE id NOT IN ( SELECT a.* FROM (SELECT MIN(id) FROM lzh_member_piggybank GROUP BY TIME,uid) a);
