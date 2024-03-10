##### restore.sh
#!/bin/bash
docker compose exec bd bash -c "mysql -u $MYSQL_USER -p$MYSQL_PASSWORD $MYSQL_DATABASE < ./backup.sql"