Follow these command to run:
```bash
  # Rebuild application
  docker compose up -d --build

  # Check container ID
  docker ps

  # Access to app to check result - Example ID=ed525ac8b8b2
  docker exec -it ed525ac8b8b2 /bin/bash
  cat result.txt

  # Your data should be showed
```