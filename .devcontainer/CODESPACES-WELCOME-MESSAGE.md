<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<p align="center"><a href="{insert-codespace-url-here}" style="background-color: #32b030; color: #ffffff; font-family: Arial; font-size: 16px; letter-spacing: 2px; font-weight: bold; padding: 15px; border-radius: 5px; text-decoration: none;"><i class="fa fa-home"></i> OPEN WEBSITE</a></p>
<p align="center">- or -</p>

<p align="center">
   <div style="display: flex; justify-content: center;">
      <a href="{insert-codespace-admin-url-here}" style="background-color: #207dd5; color: #ffffff; font-family: Arial; font-size: 12px; letter-spacing: 2px; font-weight: bold; padding: 10px 12px; border-radius: 5px; text-decoration: none; margin-right: 15px;"><i class="fa fa-shield"></i> ACCESS ADMIN</a>
      <a href="{insert-mail-catcher-url-here}" style="background-color: #207dd5; color: #ffffff; font-family: Arial; font-size: 12px; letter-spacing: 2px; font-weight: bold; padding: 10px 12px; border-radius: 5px; text-decoration: none;margin-right: 15px;"><i class="fa fa-envelope"></i> MAIL CATCHER</a>
      <a href="{insert-github-repo-url-here}" style="background-color: #207dd5; color: #ffffff; font-family: Arial; font-size: 12px; letter-spacing: 2px; font-weight: bold; padding: 10px 12px; border-radius: 5px; text-decoration: none;"><i class="fa fa-github"></i> GITHUB REPO</a>
   </div>
</p>
<br>

---

<br>

<p align="center"><img src="https://i.ibb.co/kc54Bpr/330119449-3bc72fde-c07a-4e14-a456-403074ddb964.png" width="450"></p>

<h2 align="center">Welcome to Built Mighty's Codespace! 🚀</h2>

> <small>❗️**Note:**❗️ This Codespace will stop automatically after `90 minutes` of inactivity. You can restart it at any time and none of your changes will be lost. If you are inactive for `10 days` straight, the Codespace will be deleted and all changes will be lost *(Uncommited Code and DB Updates)*.</small>
---


### Developer Notes 📝

- **[Accessing the Frontend Website](#accessing-the-frontend-website)**
- **[Accessing Mailpit](#accessing-mailpit)**
- **[Managing Codespaces](#managing-codespaces)**
- **[Adding Additional Build Scripts](#adding-additional-build-scripts)**
- **[Codespace Troubleshooting](#codespace-troubleshooting)**
- **[Codespace Resources](#codespace-resources)**

---

## Accessing the Frontend Website

### Access the frontend website via the *Ports* tab in the Codespace:
1. Click the `Ports` tab in the bottom left of the Codespace window.
2. Click the `Open Browser` button next to the `443` port named "**Website**"" to open the frontend website in the browser.

<p align="center"><a href="#" target="_blank"><img src="https://s12.gifyu.com/images/SD7CS.gif" width="400"></a></p>

### Access the frontend website via the *Command Palette*:
1. Open up the Command Palette by pressing`Ctrl+Shift+P`or `F1`.
2. Type `Open Port in Browser` and press `Enter`.
3. Select the `443` port named "**Website**"" to open the frontend website in the browser.

<p align="center"><a href="#" target="_blank"><img src="https://s10.gifyu.com/images/SD7yw.gif" width="400"></a></p>

---

## Accessing Mailpit

> Mailtrap is a tool commonly used by developers for testing and debugging email functionality in applications. It provides a simulated SMTP email server environment where you can send test emails without actually delivering them to real recipients. Instead, the emails are captured and displayed in your Mailtrap inbox for inspection.

### Access MailTrap via the Button in the *Welcome Message*:
1. Click the `MAIL CATCHER` button in the Welcome Message above to open MailTrap in the browser.

### Access Mailpit via the *Ports* tab in the Codespace:
1. Click the `Ports` tab in the bottom left of the Codespace window.
2. Click the `Open Browser` button next to the `8025` port named "**Mailpit - WEB UI**"" to open

### Mailpit Features:

<p align="center"><a href="#" target="_blank"><img src="https://s12.gifyu.com/images/So7AN.gif" width="600"></a></p>

- **Inbox:** View all emails sent on the server in a Web GUI.
- **Link Check:** Scan all links in the email to ensure they are working.
- **Spam Analysis:** Check the email for spam content.
- **HTML Compatibility Analysis:** Check the email for HTML errors across all major Email providers.
- **Tagging:** Tag emails to organize them. You can also manually tag emails.
- **Database:** Emails are stored in a database file for persistent data.




---

## Managing Codespaces

### Starting a New Codespace in GitHub:
<p><a href="#" target="_blank"><img src="https://s12.gifyu.com/images/So7B0.gif" width="500"></a></p>

1. Open the repository in GitHub.
2. Select the Branch you want to work on.
3. Click the `Code` button in the top right of the repository.
4. Click the plus icon or "Create Codespace" button to start the Codespace.

### Starting a New Codespace in VS Code:
<p><a href="#" target="_blank"><img src="https://s10.gifyu.com/images/So7Ox.gif" width="500"></a></p>

1. Go to the Remote Explorer on the left side of the VS Code window.
2. Click the `+` icon when hovering over "GITHUB CODESPACES".
3. Type the name of the repository you want to open and select it from the list.
4. Select the Branch you want to work on.
5. Select the Machine Type you want to use (The lowest Machince is set as Default per Repo).
6. Your Codespace will start and open in a new window.


### Stopping a Codespace in VS Code:
<p><a href="#" target="_blank"><img src="https://s10.gifyu.com/images/So7Ow.gif" width="500"></a></p>

1. Go to the Remote Explorer on the left side of the VS Code window.
2. Click the `Stop` button to stop the Codespace.


### Stopping a Codespace in GitHub:
<p><a href="#" target="_blank"><img src="https://s10.gifyu.com/images/So7Ov.gif" width="500"></a></p>

1. Open the repository in GitHub.
2. Click the `Code` button in the top right of the repository.
3. Click the `Codespaces` tab.
4. Click the `Stop` button to stop the Codespace.
-or-
1. Navigate to https://github.com/codespaces.
2. Click the three dots next to the Codespace you want to stop.
3. Click the `Stop` option to stop the Codespace.
---

## Adding Additional Build Scripts

You can add additional environment build scripts by updating the `.devcontainer/setup/build.sh` file to run additional commands when the Codespace is started.

### Steps to add additional build scripts:

1. Open the `.devcontainer/setup/build.sh` file.
2. Add your additional build commands to the file.
3. Save the file.
4. Commit the changes to the repository.
5. Rebuild the Codespace to run the updated build script and confirm your changes.

## Codespace Troubleshooting

### General Errors:
If you encounter any issues with your Codespace, you can try the following steps to resolve the issue:

1. **View Creation Logs**
   - Click the Codespaces: button on the bottom left of the Codespace window and then click `View Creation Logs` to view find the error in the Logs.
2. **Resolve the Issue**
   - If you find an error in the Logs, try to resolve the issue based on the error message. If there is no errors in the Log, Delete the Codespace and Re-create it.
3. **Rebuild Codespace**
   - Click the Codespaces: button on the bottom left of the Codespace window and then click  `Rebuild` to rebuild the Codespace.

> If you are unable to resolve the issue, you can reach out to the Built Mighty team for assistance.

### Website Not Loading:
If the website will not load in the browser, you can try the following steps to resolve the issue:

 1. Click the `Ports` tab in the bottom left of the Codespace window
 2. Right click the `443` port named "**Website**" and select "Change Port Protocol" to `HTTP`.
 3. Right click the `443` port named "**Website**" agian, and "Change Port Protocol" back to `HTTPS`.

<p align="center"><a href="#" target="_blank"><img src="https://s10.gifyu.com/images/SDU5c.gif" width="400"></a></p>

> Note: this is a [known bug](https://github.com/orgs/community/discussions/28563) that happens occasionally when the Codespace is started quickly after creation. Changing the port protocol to `HTTP` and back to `HTTPS` should resolve the issue as it refreshes the port connection.

## Codespace Resources

- **[BuiltMighty .devcontainer Documentation](https://github.com/builtmighty/.devcontainer/blob/main/README.md)**
- **[Developing in a codespace](https://docs.github.com/en/codespaces/developing-in-a-codespace/developing-in-a-codespace)**
- **[GitHub Codespaces Lifecyle](https://docs.github.com/en/codespaces/getting-started/understanding-the-codespace-lifecycle)**
- **[Forwarding ports in your codespace](https://docs.github.com/en/codespaces/developing-in-a-codespace/forwarding-ports-in-your-codespace)**
- **[Working collaboratively in a codespace](https://docs.github.com/en/codespaces/developing-in-a-codespace/working-collaboratively-in-a-codespace)**
- **[Rebuilding the container in a codespace](https://docs.github.com/en/codespaces/developing-in-a-codespace/rebuilding-the-container-in-a-codespace)**
- **[Security in GitHub Codespaces](https://docs.github.com/en/codespaces/reference/security-in-github-codespaces)**