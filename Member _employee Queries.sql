# Member / User Queries:

# Member login

    SELECT *
    FROM Member
    WHERE member_id = ? AND password = ?;

#Change Password for member

    UPDATE Member
    SET password = ? WHERE member_id = ?;

#Change password for employee

    UPDATE Employee
    SET password = ? WHERE employee_id = ?;

#See a list of checked out books

    SELECT due_date, serial_number, title
    FROM check_outs co
    JOIN Copy c USING (serial_number)
    JOIN Book b USING (book_id)
    WHERE member_id = ?;

#Create a member account

    INSERT INTO Member (member_id,password, phone, first_name, last_name, email, address)
    VALUES (?,?, ?, ?, ?, ?, ?);

#Create an employee account

    INSERT INTO Employee (employee_id,SSN, password, name, phone, position, address, salary)
    VALUES (?,?, ?, ?, ?, ?, ?, ?);

#Book Search Feature

#Search by Author
    
    SELECT book_id, title
    FROM Book
    JOIN Author USING (Author_ID)
    WHERE last_name = ?;

#Search by Title

    SELECT book_id, title
    FROM Book
    WHERE title = ?;

#Search by Publisher
    
    SELECT book_id, title
    FROM Book
    JOIN Publisher USING (publisher_id)
    WHERE Publisher.name = ?;

#Search by Subject
    
    SELECT book_id, title
    FROM Book
    WHERE subject = ?;

#Search by Keyword

    SELECT book_id, title
    FROM Book b
    JOIN Author a ON b.Author_id = a.Author_ID
    WHERE INSTR(b.title, ?) > 0 OR
          INSTR(a.first_name, ?) > 0 OR
          INSTR(a.last_name, ?) > 0;

#Employee / Librarian Queries

#Login

    SELECT *
    FROM Employee
    WHERE employee_id = ? AND password = ?;

#Change Password

    UPDATE Employee
    SET password = ? WHERE employee_id = ?;

#See list of all books checked out

    SELECT serial_number, member_id, due_date
    FROM check_outs;

Check out a book to a certain user

    INSERT INTO check_outs (serial_number, member_id, check_out_date, due_date, return_condition)
    VALUES (?, ?, NOW(), DATE_ADD(NOW(), INTERVAL 7 DAY), 'not returned');
   # (7 days approximate  )

#Return a Book

    DELETE FROM check_outs WHERE serial_number = ? AND member_id = ?;

Delete a Book from Circulation

    DELETE FROM Copy WHERE serial_number = ?;

#Add a Book to Circulation

    INSERT INTO Copy (serial_number, book_id, book_condition)
    VALUES (?, ?, ?);

#Search for Books Checked Out by a Particular User

    SELECT due_date, serial_number, title
    FROM check_outs co
    JOIN Copy c USING (serial_number)
    JOIN Book b USING (book_id)
    WHERE member_id = ?;