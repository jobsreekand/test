CREATE TABLE employees (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    role VARCHAR(50) NOT NULL
);

INSERT INTO employees (name, role) VALUES 
('Alice Smith', 'Senior System Engineer'), 
('Bob Jones', 'Cloud Architect'), 
('Charlie Brown', 'Security Analyst');
