CREATE OR REPLACE VIEW  courses1view AS
SELECT courses.* , categories.* FROM courses 
INNER JOIN  categories on  courses.courses_cat = categories.categories_id;



CREATE OR REPLACE VIEW mycoursesview AS
SELECT mycourses.* , courses.* , users.users_id FROM mycourses
INNER JOIN users ON users.users_id = mycourses.mycourses_usersid
INNER JOIN courses ON courses.courses_id = mycourses.mycourses_coursesid