#!/bin/bash
# filepath: /home/daydream/spacehub/FE-SpaceHub/start.sh

echo "Starting SpaceHub Development Environment..."

# Function to handle cleanup when script is terminated
cleanup() {
    echo "Shutting down all processes..."
    kill $(jobs -p) 2>/dev/null
    exit 0
}

# Set up trap to catch Ctrl+C and other termination signals
trap cleanup SIGINT SIGTERM

# Start js
echo "Starting Frontend (npm run dev)..."
npm run dev &
FRONTEND_PID=$!

# Start laravel
echo "Starting Backend (php artisan serve)..."
php artisan serve &
BACKEND_PID=$!

echo "Press Ctrl+C to stop all processes."

# Wait for processes to finish (or until user presses Ctrl+C)
wait