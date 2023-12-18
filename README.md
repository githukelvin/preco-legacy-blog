
A brief description of your project.

## Table of Contents

- [Object-Oriented PHP with PDO](#object-oriented-php-with-pdo)
  - [Introduction](#introduction)
  - [Object-Oriented Approach](#object-oriented-approach)
    - [Code Organization](#code-organization)
    - [Encapsulation](#encapsulation)
    - [Inheritance](#inheritance)
    - [Polymorphism](#polymorphism)
  - [Maintenance](#maintenance)
- [PDO (PHP Data Objects)](#pdo-php-data-objects)
  - [Database Abstraction](#database-abstraction)
  - [Prepared Statements](#prepared-statements)
  - [Parameterized Queries](#parameterized-queries)
  - [Error Handling](#error-handling)
  - [Transaction Support](#transaction-support)
  - [Portability](#portability)
  - [Requirements](#requirements)
  - [Requirements](#requirements-1)
  - [Installation](#installation)



# Object-Oriented PHP with PDO

## Introduction

This PHP project follows an object-oriented approach and utilizes PDO (PHP Data Objects) for database interactions. The decision to adopt these methodologies is driven by considerations such as code organization, reusability, maintainability, security, and efficient database access.

## Object-Oriented Approach

### Code Organization

Object-oriented programming (OOP) is employed to organize code into reusable and modular components known as objects.
Classes and objects facilitate a logical and maintainable code structure, enhancing readability and reducing complexity.

### Encapsulation

OOP provides encapsulation, enabling the encapsulation of data and behavior within a class. Only necessary functionality is exposed through public interfaces.
Encapsulation enhances code security, reducing the risk of unintended side effects.

### Inheritance

Inheritance is utilized for code reuse and hierarchy creation. Classes can be extended and specialized based on existing ones.
This promotes the development of a consistent and extensible codebase.

### Polymorphism

Polymorphism allows the use of a single interface to represent different types of objects.
This flexibility contributes to modular and easily extendable code.

## Maintenance

OOP principles contribute to code maintainability, allowing changes and updates in a systematic manner.
Code modifications are confined to specific classes, minimizing the risk of unintended consequences.

# PDO (PHP Data Objects)

## Database Abstraction

PDO serves as a database access layer, offering a consistent interface for accessing various database management systems (DBMS).
It enables developers to switch between database systems without significant changes to the application code.

## Prepared Statements

PDO supports prepared statements, a mechanism crucial for preventing SQL injection attacks.
Prepared statements separate SQL code from user input, providing a secure way to execute queries.

## Parameterized Queries

Parameterized queries in PDO enhance code readability and maintainability by separating SQL logic from input data.
This approach reduces the risk of SQL injection vulnerabilities.

## Error Handling

PDO provides robust error handling mechanisms, simplifying the identification and troubleshooting of database-related issues.
Error information is accessible through PDOException objects, offering informative error messages.

##  Transaction Support

PDO supports database transactions, allowing the grouping of multiple SQL statements into a single atomic operation.
This ensures data integrity and consistency, especially when multiple queries depend on each other.
## Portability

PDO enhances application portability by providing a consistent API for database interactions.
This abstraction layer enables developers to write database-agnostic code.

## Requirements


Ensure you have PHP 7.4 or higher installed.
## Requirements

Ensure you have the following prerequisites installed on your system:

- PHP 7.4 or higher
- MySQL database

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/githukelvin/preco-legacy-blog.git

   ```

```
CREATE DATABASE preco-legacy-blog;

```

```
USE preco-legacy-blog;
```

```
mysql -u your_username -p preco-legacy-blog < path/to/your/sql/preco-legacy-blog.sql
```