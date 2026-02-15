# PHP Starter

Quickly get started with [PHP](https://www.php.net/) using this starter! PHP is a popular general-purpose scripting language that is especially suited to web development.

This starter starts a PHP web server on [localhost:8080](http://localhost:8080).

# Contact Form with Email

## Project Overview
This project is a **web-based contact form** built using **PHP, HTML, CSS, and JavaScript**.  
It allows users to submit messages via a form, which can be sent to a specified email address.  

The project focuses on **form handling, validation, and user experience** with a clean UI design.  

---

## Features

- **Form Fields:**  
  - Name (text)  
  - Email (email validation)  
  - Message (textarea)  

- **Form Validation:**  
  - All fields are required  
  - Validates email format  
  - Prevents invalid inputs  

- **Email Sending:**  
  - Uses PHP `mail()` function (demo mode prints email content)  
  - Ready to integrate with SMTP for live email sending  

- **User Experience Enhancements:**  
  - Keeps previously entered values after submission  
  - Success and error messages displayed clearly  
  - Clear button can reset the form (optional)  

- **Responsive & Clean UI:**  
  - Styled with CSS for professional appearance  
  - Form centered with shadow and rounded corners  

---

## Technologies Used

| Technology | Purpose |
|------------|---------|
| PHP        | Server-side form processing and email handling |
| HTML       | Structuring the contact form |
| CSS        | Styling the form, inputs, and messages |
| JavaScript | Optional: Input validation or form enhancements |

---

## Installation / Usage

1. Create a **PHP project** in your environment (e.g., CodeSandbox, Replit, XAMPP/WAMP).  
2. Add a file named `index.php`.  
3. Copy and paste the **Contact Form code** into `index.php`.  
4. Run the project and open in browser.  
5. Fill in the form and submit:  
   - In demo mode, the message content is displayed.  
   - To send real emails, configure `mail()` or SMTP server.  

---

## Code Structure

index.php
├─ PHP Logic (form handling, validation, email preparation)
├─ HTML Form (input fields, submit button)
├─ CSS (inline styling for layout and appearance)
└─ JavaScript (optional: numeric or input restrictions, clear button)
