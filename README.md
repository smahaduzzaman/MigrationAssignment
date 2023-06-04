## Assignment Description: Laravel Migration Concepts

Created by: S M Ahaduzzaman

In this assignment, you will be working with Laravel migrations to create and modify database tables. The assignment consists of several tasks that you need to complete.

Task 1 requires you to create a new Laravel project named "MigrationAssignment" using the Laravel command-line interface.

Task 2 involves creating a migration file called "create_products_table" within the project. This migration file will be responsible for creating a table named "products" in the database. The "products" table should have specific columns such as id (an auto-incrementing integer and primary key), name (a string column to store the product name), price (a decimal column to store the product price), description (a text column to store the product description), created_at (a timestamp column to store the creation date and time), and updated_at (a timestamp column to store the last update date and time).

Task 3 requires you to run the migration command to create the "products" table in the database based on the migration file created in Task 2.

Task 4 involves modifying the existing migration file "create_products_table" to add a new column called "quantity" to the "products" table. The "quantity" column should be an integer column and allow null values.

Task 5 requires you to create a new migration file named "add_category_to_products_table" that will add a new column called "category" to the "products" table. The "category" column should be a string column with a maximum length of 50 characters.

Task 6 involves running the migration command to add the "category" column to the "products" table based on the migration file created in Task 5.

Task 7 requires you to create a new migration file named "create_orders_table" that will create a table called "orders" in the database. The "orders" table should have columns such as id (an auto-incrementing integer and primary key), product_id (an unsigned integer column to establish a foreign key relationship with the "id" column of the "products" table), quantity (an integer column to store the quantity of products ordered), created_at (a timestamp column to store the creation date and time), and updated_at (a timestamp column to store the last update date and time).

Task 8 involves running the migration command to create the "orders" table in the database based on the migration file created in Task 7.

Finally, the submission
GitHub: https://github.com/smahaduzzaman/MigrationAssignment
