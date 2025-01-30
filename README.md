# Real Estate Website

A real estate website built using **Laravel**, **Bootstrap**, and **MySQL** with **XAMPP** and **Composer**. This project provides a platform for brokers, buyers, and admins to interact and manage real estate listings, users, and activities.

## Features

### User Authentication & Roles

-   **Login & Signup** for three different types of users:
    -   **Broker**: Can list properties for sale, view customer details, and manage their own profile.
    -   **Buyer**: Can browse and filter properties listed by brokers.
    -   **Admin**: Has complete control over the platform, managing brokers, buyers, and their activities.

### Front-End Pages

-   **Home**: Displaying an overview of the website and featured properties.
-   **Property Listing**: A page to view all properties listed by brokers.
-   **Property Filter**: Allows users to filter properties based on criteria like price, location, type, etc.
-   **About Us**: Information about the platform and its mission.
-   **Contact Us**: A form for users to reach out to the platform's support team.
-   **Blog**: A section for blog posts related to real estate tips and news.

### Admin Dashboard

-   **Broker and Buyer Management**: Admin can view a list of registered brokers and buyers, approve or reject broker registrations.
-   **Search Functionality**: Admin can search broker and buyer records by any keyword (name, email, etc.).
-   **Activity Tracking**: Admin can track login activities and searches made by brokers and sellers.
-   **Approval System**: Brokers must be approved by the admin before they can log in to the system.

### DataTables Integration

-   **DataTables** library is used to show dynamic tables for registered brokers and sellers, allowing sorting, searching, and pagination.
    -   **For Admin**: Displays the list of brokers, buyers, and their activity.
    -   **For Broker**: Shows a list of their customers and the properties listed for sale.
    -   **For Buyer**: Displays the list of brokers and their properties available for sale.

### Additional Features

-   Broker/Seller must wait for admin approval before they can log in after registering.
-   Ability to track user search trends (e.g., popular locations or property types).

## Technologies Used

-   **Laravel**: PHP framework for building the backend.
-   **Bootstrap**: Front-end framework for responsive design and styling.
-   **MySQL**: Database for storing user information, properties, and other related data.
-   **XAMPP**: Local development environment for running Apache, MySQL, and PHP.
-   **Composer**: Dependency manager for PHP to handle Laravel packages.

## Setup

### Prerequisites

-   Install [XAMPP](https://www.apachefriends.org/index.html) for running Apache and MySQL locally.
-   Install [Composer](https://getcomposer.org/) for managing PHP dependencies.
-   Clone this repository to your local machine.

### Installation Steps

1. Clone the repository:
    ```bash
    git clone <repository-url>
    cd real-estate-website
    composer install
    cp .env.example .env
    php artisan migrate
    php artisan serve
    ```

# Future Plans for Real Estate Website

This is still an **incomplete project**, and the following features are planned for future development:

## Planned Features

### 1. Property Management

Allow brokers to update or delete their property listings. This will give brokers the ability to manage their property inventory more effectively.

### 2. Advanced Search & Filters

Enhance the property search with more complex filtering options, such as:

-   Property size (square footage)
-   Number of rooms (bedrooms, bathrooms, etc.)
-   Year of construction
-   Price range (min/max)
-   Property type (apartment, house, office, etc.)

### 3. User Profiles

Allow both buyers and brokers to have detailed profiles that include:

-   Ratings and reviews from previous transactions
-   A history of past interactions or property sales
-   Contact information and a profile picture

### 4. Messaging System

Introduce a direct messaging system that allows brokers and buyers to communicate through the platform. This will help streamline communication and make it easier for users to negotiate or ask questions.

### 5. Admin Reports

Provide admins with detailed reports that show insights such as:

-   Number of properties listed and their status (active, pending, etc.)
-   Active brokers and customers
-   Buyer activity and search trends
-   Broker approval statistics

### 6. Payment Integration

Introduce a payment system that allows brokers to pay for featured listings or premium services. This could include:

-   Featured property listings on the homepage
-   Premium placement in search results
-   Payment for advertising or promotions

### 7. Responsive Improvements

Ensure that the platform is fully responsive and optimized for mobile use. This will include:

-   Mobile-friendly design for all pages (property listings, search filters, user dashboards, etc.)
-   Improvements to ensure the website performs well on all screen sizes and devices.

## Conclusion

These are the key features that will be added in the future to enhance the platform's functionality. The goal is to create a fully functional and user-friendly real estate platform where brokers, buyers, and admins can interact seamlessly.

Stay tuned for updates as development progresses!
