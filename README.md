# Confidentiality Management System

## Overview
The Confidentiality Management System is a web-based application designed to securely store and manage confidential information, referred to as "secrets." It provides a private and secure platform for users to organize, access, and manage sensitive data while maintaining strict confidentiality and privacy standards.

## Key Features
- **User Authentication:** Secure login system requiring username/email and password.
- **Secret Management:** Create, view, edit, and delete secrets with customizable categories.
- **Dashboard:** Central hub for managing and accessing all secrets.
- **Category Organization:** Organize secrets into categories for easier management and navigation.
- **Security Measures:** Robust security measures including data encryption and SSL/TLS for secure transmission.
- **Password Reset:** Secure password reset functionality for user convenience.
- **User Privacy:** Emphasis on user privacy and confidentiality with clear statements prohibiting disclosure.

## Technologies
- **Framework:** [Laravel](https://laravel.com/) PHP Framework
- **Database:** MySQL
- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP

## Installation
1. Clone the repository:
   ```
   git clone <repository-url>
   ```
2. Install dependencies:
   ```
   composer install
   ```
3. Set up the environment:
   - Copy the `.env.example` file to `.env` and configure your environment variables, including database settings and application key.
4. Run migrations:
   ```
   php artisan migrate
   ```
5. Serve the application:
   ```
   php artisan serve
   ```

## Usage
- Navigate to the application URL in your web browser.
- Log in using your username/email and password.
- Create, view, edit, or delete secrets as needed.
- Organize secrets into categories for better management.
- Ensure compliance with confidentiality and privacy policies.

## Contributing
Contributions are welcome! Please follow the [contribution guidelines](CONTRIBUTING.md) for details.

## License
This project is licensed under the [MIT License](LICENSE).

## Acknowledgements
- [Laravel](https://laravel.com/) - The PHP framework used
- [Bootstrap](https://getbootstrap.com/) - Frontend framework
- [Tailwindcss](https://tailwindcss.com/) - Tailwindcss
- [Font Awesome](https://fontawesome.com/) - Icon library

## Contact
For inquiries or support, please contact [elkhesassi@gmail.com](mailto:elkhesassi@gmail.com).
