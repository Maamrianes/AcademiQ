# Academic GPA Management System

Pure PHP (OOP) + MySQL + Bootstrap + jQuery. MVC layout with a front controller, session auth, and role-based access (admin, professor, student).

## Requirements

- PHP 8.1+ with PDO MySQL
- MySQL 8+ (or MariaDB 10.6+ with compatible SQL)

## Setup

1. Create the database and seed data:

   ```bash
   mysql -u root -p < database/schema.sql
   ```

2. Edit database credentials in `config/config.php` if needed (or set env vars `GPA_DB_HOST`, `GPA_DB_PORT`, `GPA_DB_NAME`, `GPA_DB_USER`, `GPA_DB_PASS`).

3. Point your web server document root to this project folder (the directory that contains `index.php`).

   - Example: `http://localhost/Lab3/index.php?page=login`

## Demo accounts (from seed)

| Role      | Email               | Password  |
| --------- | ------------------- | --------- |
| Admin     | admin@gpa.local     | password  |
| Professor | professor@gpa.local | password  |
| Student   | student@gpa.local   | password  |

## Structure

- `index.php` — Front controller (`?page=...`)
- `models/`, `controllers/`, `views/`, `api/`, `public/`
- `api/grades.php` — Professor JSON API (courses, students, batch save)
- `api/gpa.php` — Student JSON API (current GPA, history, CSV export)

Admin actions use POST + redirect (no AJAX). Professor grade entry and student dashboards use jQuery AJAX against the API endpoints.
