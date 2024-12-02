INSERT INTO user_table (username, password)
VALUES 
('johndoe', 'securepassword1'),
('janedoe', 'securepassword2'),
('mike123', 'securepassword3');

INSERT INTO user_cv (id, fname, mname, lname, img, email)
VALUES
(1, 'John', 'A.', 'Doe', 'john_doe.jpg', 'john.doe@example.com'),
(2, 'Jane', 'B.', 'Doe', 'jane_doe.jpg', 'jane.doe@example.com'),
(3, 'Mike', NULL, 'Smith', 'mike_smith.jpg', 'mike.smith@example.com');

INSERT INTO user_address (id, country, city, street)
VALUES
(1, 'USA', 'New York', '123 Broadway Ave'),
(2, 'Canada', 'Toronto', '456 Queen St'),
(3, 'UK', 'London', '789 Oxford St');

INSERT INTO user_phone (id, phone)
VALUES
(1, '+11234567890'),
(1, '+11234567891'),
(2, '+11234567892'),
(3, '+11234567893');

INSERT INTO user_achievement (id, title, description)
VALUES
(1, 'Best Employee', 'Awarded for outstanding performance in 2022.'),
(2, 'Top Graduate', 'Graduated top of the class in 2020.'),
(3, 'Hackathon Winner', 'Won first place in the 2023 Hackathon.');

INSERT INTO user_experience (id, title, company, location, start_date, end_date, description)
VALUES
(1, 'Software Developer', 'TechCorp', 'New York, USA', '2020-01-01', '2022-12-31', 'Developed web applications.'),
(2, 'Data Analyst', 'DataWorks', 'Toronto, Canada', '2021-06-01', '2023-06-01', 'Analyzed business data.'),
(3, 'Project Manager', 'InnovateUK', 'London, UK', '2019-03-01', NULL, 'Managing tech projects.');

INSERT INTO user_education (id, school, degree, year, specialization, description)
VALUES
(1, 'MIT', 'BSc Computer Science', 2019, 'Software Engineering', 'Focus on web development.'),
(2, 'University of Toronto', 'MSc Data Science', 2021, 'Big Data', 'Research in predictive modeling.'),
(3, 'Oxford University', 'MBA', 2020, 'Business Management', 'Focus on project leadership.');

INSERT INTO user_skill (id, skill, year)
VALUES
(1, 'Python Programming', 2018),
(1, 'Web Development', 2019),
(2, 'Data Analysis', 2020),
(3, 'Project Management', 2017);

