#!/bin/bash

# Sandbox environment management script for partners.fanati.co
# Usage: ./sandbox.sh [up|down|restart|logs|build|status]

set -e

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
NC='\033[0m' # No Color

# Function to print colored messages
print_message() {
    echo -e "${2}${1}${NC}"
}

# Check if Docker is running
check_docker() {
    if ! docker info > /dev/null 2>&1; then
        print_message "Error: Docker is not running!" "$RED"
        exit 1
    fi
}

# Main command processing
case "$1" in
    up|start)
        print_message "Starting sandbox environment..." "$GREEN"
        check_docker

        # Create necessary directories
        mkdir -p infinite-mlm/src/public infinite-mlm/src/storage/logs
        mkdir -p logs/nginx

        # Start containers with sandbox overrides
        docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml up -d

        print_message "Sandbox environment started!" "$GREEN"
        print_message "Access URLs:" "$YELLOW"
        echo "  - Infinite MLM: http://sandbox.partners.fanati.co"
        echo "  - Hybrid MLM: http://sandbox.partners.fanati.co/legacy"
        echo "  - PHPMyAdmin: http://sandbox.partners.fanati.co:8087"
        echo ""
        echo "Note: Make sure sandbox.partners.fanati.co points to this server"
        echo "Add to /etc/hosts if testing locally: 127.0.0.1 sandbox.partners.fanati.co"
        ;;

    down|stop)
        print_message "Stopping sandbox environment..." "$YELLOW"
        docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml down
        print_message "Sandbox environment stopped!" "$GREEN"
        ;;

    restart)
        print_message "Restarting sandbox environment..." "$YELLOW"
        $0 down
        sleep 2
        $0 up
        ;;

    logs)
        # Show logs for specific service or all
        if [ -z "$2" ]; then
            docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml logs -f --tail=100
        else
            docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml logs -f --tail=100 $2
        fi
        ;;

    build)
        print_message "Building sandbox containers..." "$YELLOW"
        docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml build
        print_message "Build complete!" "$GREEN"
        ;;

    status)
        print_message "Sandbox environment status:" "$YELLOW"
        docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml ps
        ;;

    shell)
        # Access shell in a container
        if [ -z "$2" ]; then
            print_message "Usage: ./sandbox.sh shell [infinite-mlm|hybrid-mlm|nginx-router|redis]" "$YELLOW"
            exit 1
        fi
        docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml exec $2 /bin/sh
        ;;

    db)
        # Access database CLI
        case "$2" in
            infinite)
                docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml exec infinite-mlm-db \
                    mysql -u root -p${INFINITE_DB_ROOT_PASSWORD:-rootpass2024} infinite_mlm_sandbox
                ;;
            hybrid)
                docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml exec hybrid-mlm-db \
                    mysql -u root -p${HYBRID_DB_ROOT_PASSWORD:-rootpass2024} hybrid_mlm_sandbox
                ;;
            *)
                print_message "Usage: ./sandbox.sh db [infinite|hybrid]" "$YELLOW"
                exit 1
                ;;
        esac
        ;;

    reset)
        print_message "WARNING: This will delete all sandbox data!" "$RED"
        read -p "Are you sure? (y/N) " -n 1 -r
        echo
        if [[ $REPLY =~ ^[Yy]$ ]]; then
            docker-compose -f docker-compose.yml -f docker-compose.sandbox.yml down -v
            print_message "Sandbox environment reset!" "$GREEN"
        else
            print_message "Reset cancelled." "$YELLOW"
        fi
        ;;

    *)
        print_message "MLM Sandbox Environment Manager" "$GREEN"
        echo ""
        echo "Usage: $0 {up|down|restart|logs|build|status|shell|db|reset}"
        echo ""
        echo "Commands:"
        echo "  up/start    - Start the sandbox environment"
        echo "  down/stop   - Stop the sandbox environment"
        echo "  restart     - Restart the sandbox environment"
        echo "  logs [svc]  - Show logs (optionally for specific service)"
        echo "  build       - Build/rebuild containers"
        echo "  status      - Show container status"
        echo "  shell [svc] - Access shell in a container"
        echo "  db [type]   - Access database CLI (infinite/hybrid)"
        echo "  reset       - Reset sandbox (delete all data)"
        echo ""
        echo "Examples:"
        echo "  $0 up                    # Start sandbox"
        echo "  $0 logs infinite-mlm     # View Infinite MLM logs"
        echo "  $0 shell nginx-router    # Access nginx shell"
        echo "  $0 db infinite          # Access Infinite MLM database"
        ;;
esac