INSERT INTO Teachers (TeacherName, Email, Phone, Department) VALUES
('Dr. Rajesh Verma', 'rajesh.verma@college.edu', '9876543210', 'Computer Science'),
('Prof. Priya Gupta', 'priya.gupta@college.edu', '9876543211', 'Computer Science'),
('Dr. Amit Sharma', 'amit.sharma@college.edu', '9876543212', 'Mathematics');
INSERT INTO Classes (ClassName, Semester, Year, TeacherID) VALUES
('BCA-2A', 4, 2024, 1),
('BCA-2B', 4, 2024, 2),
('BCA-3A', 6, 2024, 1);
INSERT INTO Students (StudentName, Email, Phone, ClassID, RollNumber) VALUES
('Raj Kumar', 'raj.kumar@student.edu', '9123456780', 1, 'BCA2A001'),
('Priya Singh', 'priya.singh@student.edu', '9123456781', 2, 'BCA2B001'),
('Amit Patel', 'amit.patel@student.edu', '9123456782', 1, 'BCA2A002'),
('Sneha Reddy', 'sneha.reddy@student.edu', '9123456783', 1, 'BCA2A003'),
('Vikram Joshi', 'vikram.joshi@student.edu', '9123456784', 2, 'BCA2B002');
INSERT INTO Subjects (SubjectName, SubjectCode, Credits) VALUES
('Database Management Systems', 'DBMS101', 4),
('Java Programming', 'JAVA201', 4),
('Python Programming', 'PY301', 3),
('Web Development', 'WEB401', 3),
('Data Structures', 'DS101', 4);
INSERT INTO ClassSubjects (ClassID, SubjectID, TeacherID) VALUES
(1, 1, 1),
(1, 2, 1),
(2, 1, 2),
(2, 3, 2),
(3, 4, 1);
INSERT INTO Attendance (StudentID, SubjectID, AttendanceDate, Status, Remarks) VALUES
(1, 1, '2025-11-08', 'Present', NULL),
(2, 1, '2025-11-08', 'Present', NULL),
(3, 1, '2025-11-08', 'Absent', 'Sick leave'),
(4, 1, '2025-11-08', 'Late', 'Traffic'),
(5, 1, '2025-11-08', 'Present', NULL);
