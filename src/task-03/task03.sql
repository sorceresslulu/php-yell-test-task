SELECT
  type, value
FROM data as data1
WHERE date = (select max(date) from data as data2 where data1.type = data2.type)