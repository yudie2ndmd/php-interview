# Environment Setup

## Prerequisites

- [Docker](https://www.docker.com/get-started) installed
- [Docker Compose](https://docs.docker.com/compose/install/) installed

## Setup Steps

1. **Clone the repository**  
   ```bash
   git clone git@github.com:yudie2ndmd/php-interview.git
   cd php-interviews
   ```

2. **Start the Docker environment**  
   ```bash
   docker-compose up -d web
   ```

3. **Database Initialization**  
   - The MySQL container will initialize the database using `init.sql`.
   - Custom configuration is provided via `php.ini`.

4. **Accessing the Application**  
   - The PHP application is located in the `src/` directory.
   - Access the app via your browser at [http://localhost:8080](http://localhost:8080) (default port; check `docker-compose.yml` for actual mapping).

5. **Data Files**  
   - Employee data: `data/acme-employees.csv`.
   - Results data: `data/result-employees.csv`.

