-- Create Users Table
CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role VARCHAR(50)
);

-- Create Menu Table
CREATE TABLE menu (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image_url VARCHAR(255) NOT NULL
);

-- Create Reservations Table
CREATE TABLE reservations (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    time TIME NOT NULL,
    table_size INT(11) NOT NULL
);

-- Insert Sample Data into Users Table
INSERT INTO users (username, email, password, role) VALUES
('john_doe', 'john@example.com', 'MD5('john123')','user'), 
('jane_smith', 'jane@example.com', 'MD5('jane123')','user');
('admin', 'admin@example.com', MD5('admin123'), 'admin');


-- Insert Sample Data into Menu Table
INSERT INTO menu (name, description, price, image_url) VALUES
('Latte', 'A rich and creamy espresso-based drink with steamed milk.', 4.50, 'assets/images/latte.jpg'),
('Omlet', 'A Sri-Lankan style omlet with chicken and cheese loaded.', 4.00, 'assets/images/omlet.jpg'),
('Cheesecake', 'A slice of our homemade cheesecake with a graham cracker crust.', 5.75, 'assets/images/cheesecake.jpg'),
('Pasta Carbonara', 'Traditional pasta carbonara with a creamy sauce, bacon, and parmesan.', 9.99, 'assets/images/pasta.jpg');

-- Insert Sample Data into Reservations Table
INSERT INTO reservations (customer_name, date, time, table_size) VALUES
('Alice Johnson', '2024-10-30', '18:30:00', 4),
('Bob Brown', '2024-11-01', '19:00:00', 2),
('Charlie Davis', '2024-11-02', '20:00:00', 6);

-- Alter Users Table to Add Role
ALTER TABLE users ADD COLUMN role ENUM('customer', 'admin', 'staff') NOT NULL DEFAULT 'customer';

-- Create Staff Table
CREATE TABLE staff (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    user_id INT(11) NOT NULL,
    role ENUM('head chef', 'cook', 'manager', 'waiter') NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

ALTER TABLE reservations ADD COLUMN status ENUM('pending', 'accepted', 'rejected') NOT NULL DEFAULT 'pending';
