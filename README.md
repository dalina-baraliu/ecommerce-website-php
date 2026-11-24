
# E-Commerce Website | PHP & MySQL

A database-driven e-commerce website developed using **PHP, MySQL, HTML, and CSS** as part of a collaborative university project.

The application demonstrates essential web development concepts, including user authentication, product management, shopping cart functionality, order processing, and database integration.

## Features

### Customer Features
- Browse available products
- View individual product details
- Filter products
- Register a new account
- Log in and log out
- Add products to the shopping cart
- Update product quantities
- Remove products from the cart
- Access the checkout process
- Submit orders
- View informational pages, including returns and terms

### Administration
- Dedicated admin section
- Administrative functionality for managing the e-commerce application

### Database Integration
- MySQL/MariaDB database connectivity
- PHP-based server-side processing
- SQL queries for retrieving and managing application data
- Database schema and sample data provided in `db.sql`

## Technologies Used

| Technology | Purpose |
|------------|---------|
| PHP | Backend application logic |
| MySQL / MariaDB | Database management |
| HTML | Website structure |
| CSS | Styling and layout |
| JavaScript | Client-side functionality, where implemented |
| phpMyAdmin | Database administration |
| XAMPP | Local development environment |
| Git & GitHub | Version control |

## Project Structure

```text
Web-II/
├── admin/                      # Administration section
├── images/                     # Product and website images
├── includes/                   # Shared PHP components
├── index.php                   # Homepage
├── products.php                # Product catalog
├── product_details.php         # Individual product details
├── get_filtered_products.php   # Product filtering
├── cart.php                    # Shopping cart
├── add_to_cart.php             # Add products to cart
├── update_cart.php             # Update cart quantities
├── remove_from_cart.php        # Remove items from cart
├── checkout.php                # Checkout page
├── process_checkout.php        # Checkout processing
├── process_order.php           # Order processing
├── login.php                   # Login page
├── process_login.php           # Login processing
├── process_register.php        # Registration processing
├── logout.php                  # Logout
├── returns.php                 # Returns information
├── terms.php                   # Terms and conditions
├── send_email.php              # Email-related functionality
├── thank_you.php               # Order confirmation page
├── styles.css                  # Website styling
├── config.example.php          # Example database configuration
├── db.sql                      # Database SQL script
├── .gitignore
└── README.md
```


## Installation and Setup

### Requirements

- XAMPP (Apache and MySQL/MariaDB)
- PHP
- Web browser
- phpMyAdmin
- Code editor such as Visual Studio Code or IntelliJ IDEA

### Step 1: Download the Project

Clone the repository:

```bash
git clone https://github.com/dalina-baraliu/ecommerce-website-php.git
```

Or download the ZIP file directly from GitHub.

### Step 2: Move the Project to XAMPP

Place the project inside the XAMPP `htdocs` directory.

For example:

```text
C:\xampp\htdocs\Web-II\
```

### Step 3: Start Apache and MySQL

1. Open XAMPP Control Panel.
2. Start Apache.
3. Start MySQL.
4. Open phpMyAdmin at:

   http://localhost/phpmyadmin/

### Step 4: Create the Database

1. Open phpMyAdmin.
2. Click **New**.
3. Create a database named `ecommerce_db`.
4. Select the new database.
5. Click **Import**.
6. Select the provided `db.sql` file.
7. Click **Import** or **Go**.

If `db.sql` specifies a different database name, use that name or adjust the SQL script and local configuration consistently.

### Step 5: Configure the Database Connection

Create a `config.php` file based on `config.example.php`, using the connection structure expected by the application.

For example:

```php
<?php
$host = "localhost";
$username = "YOUR_DB_USERNAME";
$password = "YOUR_DB_PASSWORD";
$database = "ecommerce_db";
?>
```

Replace the placeholders with your local database credentials.

The variable names and connection setup must match the actual PHP application.

Do not publish passwords or other credentials.

### Step 6: Run the Website

Open your browser and navigate to:

http://localhost/Web-II/

The website should load if Apache, MySQL, the database schema, and PHP configuration are set up correctly.

## Application Workflow

1. Users visit the homepage and browse the product catalog.
2. They can view product details and filter products.
3. Users can register or log in.
4. Products can be added to the shopping cart.
5. Cart quantities can be updated and items removed.
6. Users proceed through checkout and submit orders.
7. The PHP backend processes requests and interacts with the database.
8. Administrators access the separate admin section.

## Screenshots

Screenshots can be added to demonstrate the user interface and functionality.

Suggested screenshots:

- Homepage
- Product catalog
- Product details
- Shopping cart
- Checkout
- Admin interface

## Learning Outcomes

This project provided practical experience with:

- Full-stack web development fundamentals
- PHP backend programming
- Relational database integration
- SQL queries and data management
- User authentication workflows
- Session-based web application functionality
- E-commerce application architecture
- Team collaboration and project organization

## Project Context

This website was developed as a **collaborative university group project** for a Web Development course.

It represents practical experience building a database-driven web application and integrating frontend interfaces with PHP backend functionality.

## Security and Limitations

This project was created for educational and demonstration purposes.

It has not been independently audited for production-level security.

Before deploying publicly, the application would require security review, including authentication, authorization, SQL injection prevention, input validation, session management, and safe credential handling.

The included database should contain demonstration data only.

## Author

**Dalina Baraliu**

Computer Science student interested in software development, cybersecurity, networking, malware analysis, and digital forensics.

GitHub: https://github.com/dalina-baraliu

*Developed as part of a university group project.*
