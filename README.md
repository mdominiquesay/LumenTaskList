# Lumen Task List

Welcome to Lumen Task List! This is a simple task management application built with Lumen, designed to help you organize your tasks efficiently.

## Getting Started

To get started with Lumen Task List, follow these simple steps:

1. **Clone the repository**: Start by cloning this repository to your local machine.

    ```
    git clone <repository-url>
    ```

2. **Install Dependencies**: Navigate to the project directory and install the necessary dependencies using Composer.

    ```
    cd lumen-task-list
    composer install
    ```

3. **Set Up Environment**: Copy the `.env.example` file to `.env` and configure your environment variables such as database connection details.

    ```
    cp .env.example .env
    ```

4. **Run Migrations**: Run the database migrations to set up the necessary tables.

    ```
    php artisan migrate
    ```

5. **Serve the Application**: Finally, serve the application locally.

    ```
    php -S localhost:8000 -t public
    ```

## Features

- **Task Management**: Create, view, update, and delete tasks easily.
- **Simple Interface**: Intuitive user interface for seamless task management.
- **Lightweight**: Built with Lumen, ensuring fast performance and minimal resource usage.

## Usage

Once the application is up and running, you can access it in your web browser at [http://localhost:8000](http://localhost:8000).

Here's how you can use Lumen Task List:

- **View Tasks**: Access the homepage to view all your tasks.
- **Add Task**: Click on the "Add Task" button to create a new task.
- **Edit Task**: Click on the "Edit" button next to a task to modify its details.
- **Delete Task**: Remove a task from the list by clicking on the "Delete" button.

