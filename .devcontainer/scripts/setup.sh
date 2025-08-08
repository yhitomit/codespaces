#!/bin/sh

# Load the setup-functions.sh file 🛠️
. .devcontainer/scripts/setup-functions.sh

# =====================================================================================================================================
# Stop script execution if a command has an error and output all commands for debugging ⚠️
set -e

# =====================================================================================================================================
# Install the latest version of mysqladmin via mariadb-client 📦
echo "\n📦 Installing the latest version of mysqladmin via mariadb-client\n"
apt update -qq && apt install -y mariadb-client -qq

# Globally set the SITE_HOST variable 🌐
if [ -z ${CODESPACE_NAME+x} ]; then
	export SITE_DOMAIN="localhost"
	export SITE_HOST="localhost"
else
	export SITE_DOMAIN="${CODESPACE_NAME}-443.${GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}"
	export SITE_HOST="https://${CODESPACE_NAME}-443.${GITHUB_CODESPACES_PORT_FORWARDING_DOMAIN}"
fi

# =====================================================================================================================================
# Wait for MySQL connection 🔌
LOCAL_DB_HOST=$PROJECT_NAME"_db";
while ! mysqladmin ping -h "$LOCAL_DB_HOST" -u "root" -p"$MYSQL_ROOT_PASSWORD" > /dev/null 2>&1; do
    echo "Waiting for MySQL connection..."
    sleep 2
done
echo "MySQL connection is successful ✅. Checking custom configurations.. \n"
docker exec -it codespaces_db mysqld --validate-config

# =====================================================================================================================================\
# Mark DOCUMENT_ROOT and WEB_ROOT as Safe Directories for .git to access 🧑‍💻
echo "\n🧑‍💻 Adding Safe Directories for .git to access\n"
git config --global --add safe.directory $DOCUMENT_ROOT
git config --global --add safe.directory $WEB_ROOT

# =====================================================================================================================================\
# Update permissions for the web root 🦺
echo "\n🦺 Updating permissions for the web root\n"
chown -R www-data:www-data $DOCUMENT_ROOT
