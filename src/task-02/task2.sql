#
# Структура
#

CREATE TABLE book (
  id int AUTO_INCREMENT PRIMARY KEY,
  title tinytext
);

CREATE TABLE author (
  id int AUTO_INCREMENT PRIMARY KEY,
  fullname tinytext
);

CREATE TABLE book_authors (
  book_id int,
  author_id int,
  FOREIGN KEY (book_id) REFERENCES book(id),
  FOREIGN KEY (author_id) REFERENCES author(id)
);

#
#  Тестовые данные
#

INSERT INTO author (id, fullname) VALUES
  (1, 'Irelia'), # 1 – для наглядности, конечно же можно просто 0, во всех строках
  (2, 'Annie'),
  (3, 'Xerath')
;

INSERT INTO book (id, title) VALUES
  (1, 'My Little Book'),
  (2, 'My Small Book'),
  (3, 'Not My Large Book'),
  (4, 'How to camp botlane guide by Lee Sin')
;

INSERT INTO book_authors (book_id, author_id) VALUES
  (1, 1),
  (2, 3),
  (2, 1),
  (3, 2),
  (4, 2)
;

#
# Пример запроса – получить все книги определенного автора
#

SELECT book.*
FROM book_authors
LEFT JOIN book ON book.id = book_authors.book_id
WHERE book_authors.author_id = 1;


#
# Пример запроса - получить всех авторов определенной книги
#

SELECT author.*
FROM book_authors
LEFT JOIN author ON author.id = book_authors.author_id
WHERE book_authors.book_id = 2;