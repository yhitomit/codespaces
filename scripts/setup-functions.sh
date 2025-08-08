# bin/sh

# Function: progress_bar
# Description: Displays a progress bar that fills up over a specified duration.
# Parameters:
#   - duration: The duration in seconds for the progress bar to fill up.
# Example: progress_bar 10  -- This will display a progress bar for 10 seconds.
# Returns: None
progress_bar() {
    local duration=$1
    local elapsed=0

    while [ $elapsed -le $duration ]; do
        local progress=$((elapsed*100/duration))
        local filled=$((progress/2))
        local empty=$((50-filled))
        printf "\r[%-${filled}s>%-${empty}s] %d%%" '#' '' $progress
        sleep 1
        ((elapsed++))
    done
    echo
}

# Function: create_htaccess_file
# Description: Creates a .htaccess file with default WordPress content if it does not exist.
# Parameters: None
# Returns: None
create_htaccess_file() {

	local HTACCESS_FILE="$WEB_ROOT/.htaccess"

	# Default WordPress .htaccess content
	local HTACCESS_CONTENT=$(cat <<'EOF'
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>
# END WordPress
EOF
)

	# Check if the .htaccess file exists
	if [ ! -f "$HTACCESS_FILE" ]; then
		# Create the .htaccess file and write the default content
		echo "$HTACCESS_CONTENT" > "$HTACCESS_FILE"
		echo ".htaccess file did not exist. Created .htaccess file with default WordPress content and excluding from git tracking."
		echo ".htaccess" >> "$WEB_ROOT/.git/info/exclude"
	else
		echo ".htaccess file already exists... Skipping creation."
	fi
}

# Function: loading_animation
# Description: Displays a loading animation with a spinning character.
# Parameters:
#   - $1 (optional): Duration in seconds for the loading animation. If not provided, the animation will continue indefinitely.
# Returns: None
loading_animation() {
    local spinstr='|/-\'
    local temp=${spinstr#?}
    if [ -z "$1" ]; then
        while true; do
            printf "[%c]  " "$spinstr"
            local temp=${spinstr#?}
            spinstr=$temp${spinstr%"$temp"}
            sleep 0.1
            printf "\b\b\b\b\b"
        done
    else
        local end=$((SECONDS+$1))
        while [ $SECONDS -lt $end ]; do
            printf "[%c]  " "$spinstr"
            local temp=${spinstr#?}
            spinstr=$temp${spinstr%"$temp"}
            sleep 0.1
            printf "\b\b\b\b\b"
        done
    fi
}

# Function: loading_bar
# Description: This function creates a moving dot animation on the terminal.
# Parameters:
#   - duration: The duration of the animation in seconds (default: 10)
# Usage: Call this function to display a moving dot animation on the terminal.
# Examples:
#   loading_bar (run untill the script is stopped)
#   loading_bar 2 (show for 2 secs)
loading_bar() {
    local width=10
    local dot=0
    local direction=1
    local duration=$1  # Set the duration in seconds

    if [[ -z $duration ]]; then
        while true; do
            local line=$(printf "%-${dot}s<===>%-${width}s" '' '')
            local line2=$(printf "%-${dot}s<===>%-${width}s" '' '')
            echo -ne "\r$line $line2"
            sleep 0.1

            ((dot+=direction))
            if ((dot == width || dot == 0)); then
                ((direction*=-1))
            fi
        done
    else
        local start_time=$(date +%s)
        local end_time=$((start_time + duration))

        while true; do
            local line=$(printf "%-${dot}s<===>%-${width}s" '' '')
            local line2=$(printf "%-${dot}s<===>%-${width}s" '' '')
            echo -ne "\r$line $line2"
            sleep 0.1

            ((dot+=direction))
            if ((dot == width || dot == 0)); then
                ((direction*=-1))
            fi

            local current_time=$(date +%s)
            if ((current_time >= end_time)); then
                break
            fi
        done
    fi
}
