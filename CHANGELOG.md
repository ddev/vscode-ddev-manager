# Change Log

All notable changes to the "ddev-manager" extension will be documented in this file.

## [2.7.0] - 2025-03-02

- Updated: Updated some commands to match the new DDEV commands
- Updated: Code has been cleaned and refactored
- Fixed: In some cases, success notifications were not displayed correctly

## [2.6.5] - 2025-01-14

- Fixed: spawn a terminal failed in VSCode 1.95+ becase Microsoft moved node-pty (macOS)
- Updated: PHP and NodeJS versions
- Changed: The extension now requires VSCode 1.95+

## [2.6.4] - 2025-01-09

- Improved: added more debug logs to find execution errors faster
- code cleanup

## [2.6.3] - 2024-10-06

- Fixed: ngrok share progress notification not dismissed when ngrok was not found in path
- Fixed: ngrok show error if starting a new share when already sharing

## [2.6.2] - 2024-09-18

- Fixed: WordPress project full installer

## [2.6.1] - 2024-09-13

- Fixed: Disable exposed commands feature

## [2.6.0] - 2024-09-04

- New: Added new command: "Delete Snaphot" to delete individual snapshots from project
- New: Added new command: "Open debug log" command is displayed only for WordPress projects, after the debug file is opened it will scroll automatically to the end to enable "Log File Tale Mode" for automatic scroll
- New: After snapshot is restored the WordPress debug state is restored
- New: After database is imported rewrite rules are flushed for WordPress projects
- Improved: Recheck database config after snapshot is restored
- Fixed: Postgres database type was not properly displayed in sidebar

## [2.5.1] - 2024-06-02

- Changed: This update only disables some features that are not ready yet for public use and were included by mistake in 2.5.0

## [2.5.0] - 2024-06-02

- New: Added new command: "Start New SSH session" forces to create new SSH sessions ignoring any existing sessions
- New: Added new command: "Open wp-config.php" command is displayed only for WordPress projects
- New: Added new command: "Open wp-config-ddev.php" command is displayed only for WordPress projects
- Changed: Command "Start SSH session" when called it will try to reuse an existing SSH terminal. If a current SSH session exists, that terminal will be displayed, if not a new terminal will be created, the user still can create new SSH terminals with the command "Start New SSH session"
- Improved: Node-PTY integration for terminals
- Improved: Additional checks for WordPress to detect Debug status when workspace is opened
- Fixed: SSH terminal (node-pty) UI glitch
- Fixed: Share terminal if the user clicks the status bar item. Before the ngrok process was cropped, now it should be displayed correctly.
- Fixed: WordPress commands correctly set the context in the editor

## [2.4.0] - 2024-05-28

- New: Added new command: "Empty Extension Cache" removes cache for add-ons and projects installers
- New: Added new command: "Open Database With..." This command allows you to dynamically choose the application to open and interact with the database bypassing the configured database manager in the extension.
- New: Added new command: Mutagen Reset
- New: Added new project command: WordPress Enable Debug
- New: Added new project command: WordPress Disable Debug
- New: Added new project command: WordPress Enable Silent Debug
- New: Added new project command: WordPress Disable Silent Debug
- New: Added new option to customize the display format of project names in the sidebar. Instead of displaying it as "awesome-project-name", you can choose to display it in a more readable format, such as "Awesome Project Name" and other options.
- New: Use cache for WordPress installer, reduces the full project installation time in 5/6 seconds
- New: For WordPress full installation also create htaccess file for Apache server
- Improved: Updated "stop share" to use progress notification so the success message is removed automatically
- Improved: Sidebar view update content when starting docker provider
- Improved: Extension config organized
- Improved: Workspace PHP configuration reworked
- Improved: Re-check debugger configuration when project is started/restarted
- Improved: Re-check database configuration when project is started/restarted
- Improved: Show or hide commands depending on context
- Improved: ngrok share with WordPress, updated code to make sure URL's work correctly when starting a share session.
- Improved: WordPress update URL's in database after database import
- Improved: Additional checks to see if the project uses wp-config-ddev.php or only has a wp-config.php file
- Improved: Code cleanup
- Fixed: Correctly display notifications when enabling/disabling Xdebug

## [v2.3.1] - 2024-04-14

- Fixed: Tasks not correctly created when automaticallyConfigureDebugger was on in certain cases

## [v2.3.0] - 2024-03-22

- New: Added support to open database with the VS Code extension [Database Client](https://marketplace.visualstudio.com/items?itemName=cweijan.vscode-mysql-client2) MySQL and MariaDB. Only workspace configuration is supported for now.
- New: Debugger configuration can be different depending the project type, if DDEV in the future includes project types like nodejs, NextJS, etc. We already have the base to configure the debugger accordingly
- Improved: Open database in adminer or phpmyadmin will show installation progress if service it's not installed
- Improved: Project name and other variables are now used in progress notifications
- Improved: Restructured code

## [v2.2.0] - 2024-02-23

- New: Tasks Provider. You can now define tasks that will run directly in the container (or any other project you want), just set the task type to "ddev" and that's it. You'll have full access to the container and all the binaries that live there
- Improved: Projects Cache
- Fixed: Duplicate error message when trying to restore a spanshot in a project with no spanshots

## [v2.1.1] - 2024-02-16

- Fixed: Command "listProjectsToOpenNewWindow" was not opening projects in new window

## [v2.1.0] - 2024-02-15

- Improved: Add-ons list now use a file based cache and the list it's updated every 7 days, searching Add-ons should be a lot faster.
- New: Add-ons list now display information about the repo so add-ons with the same name can also be identified by the owner name. Also now you can search by repo description, name, etc.

## [v2.0.2] - 2024-02-13

- Improved: Sidebar Sync improved

## [v2.0.1] - 2024-02-13

- Improved: When starting the debugger, the Xdebug task will not open the terminal unless there's an error.

## [v2.0.0] - 2024-02-13

- New: Automatic Full Project Installation. When creating a new project the extension will perform the entire installation and configuration so you have a fully functional site. Still in Beta, it can be disabled in the extension settings "automaticallyInstallProjectFiles". Full project installation work for the majority of project types: WordPress, Drupal 10, Drupal 9, Laravel, Moodle, Shopware 6, PHP, Typo3, Statamic, Silverstripe, CraftCMS and Backdrop. No idea how to install Magento without the need of credentials
- New: Automatically Configure Debugger. The extension will automatically configure the launch.json and tasks.json files to automatically enable/disable Xdebug when step debugging. This feature can be disabled in the extension settings
- New: Use the command palette to list and open your DDEV projects in the current editor or a new window, similar to what the extension Project Manager does.
- New: Added new options in the sidebar project menu to open project in editor and open in a new editor window.
- New: When importing a database and the project type is WordPress, the extension will check the imported database tables prefix and offer to update it to match DDEV
- New: When importing a database and the project type is WordPress, the extension will check the imported database URL and offer to update it to use the DDEV project URL
- New: This update sets the base to provide different configs and actions depending the project type, perform custom actions and more
- New: New extension option to configure the location of progress notifications.
- New: When creating a new project, if the selected folder contains an old DDEV project with a different name, the extension will ask if you want to overwrite it and if so it will make sure the old project is deleted and unlisted to avoid errors
- Improved: Display progress notification when doing certain actions. Progress notifications will auto close on success, regular notifications require user interaction to be closed so they can be annoying
- Improved: There were several changes in some commands
- Improved: If there's an update, the notification will show a new action "Ignore this update", if clicked, that specific update will not be notified again in case you don't want to update
- Improved: Extension settings were updated and reorganized
- Fixed: Missing command alias Open in Browser
- Removed: Xdebug option from menu as now it's configured automatically
- Removed: Extension option "showSuccessNotifications"
- Removed: Extension option "showStatusBarProcessIndicator"

## [v1.4.3] - 2024-01-25

- Improved: Progress notification on share to use the same UI as VS Code Port Forwarding
- Fixed: Empty title in sidebar in VS Code 1.80 and up

## [v1.4.2] - 2023-12-02

- New: Added command to check for updates manually `Check for Updates`
- New: Added command to `Open Debug Panel`
- Improved: Exclude betas and rc from update checks
- Fixed: Bug in external dependency preventing the extension to load on Windows using traditional installation
- Fixed: Removed project name from database launch commands

## [v1.4.1] - 2023-11-16

- New: Added support for DBeaver that comes with DDEV v1.22.4

## [v.1.4.0] - 2023-10-25

- New: Now the extension is able to start your docker provider if it's not running. Tested with Docker Desktop, OrbStack and Colima
- New: Option to configure Colima VM in case you are using it as a Docker provider
- New: Exclude Alpha releases from update notification
- Fixed: Added skip-confirmation when doing restart command

## [v1.3.5] - 2023-10-09

- New: Hovering over the database service in the sidebar will show a tooltip with the host port if the project is running
- Improved: Exclude the output of `list` command in the output panel as it can saturate the panel

## [v1.3.4] - 2023-10-07

- Fixed: When adding a new project, if the name was left empty the user still was able to continue. Now the field it's validated and an error message is presented.

## [v1.3.3] - 2023-10-01

- The extension repository has been moved to the DDEV org
- New: Added option to show unofficial services/add-ons

## [v1.3.2] - 2023-09-27

- Improved: Checking for updates can be disabled in the extension settings
- Improved: Creating a project now sets some defaults depending on the project type
- Improved: Descriptions to be more clear when creating a project
- Fixed: Fixed error restoring snapshot if the snapshot name contained hyphens

## [v1.3.1] - 2023-09-17

- Fixed: Stop project command

## [v1.3.0] - 2023-09-16

- New: Sync state between multiple VSCode editor windows
- New: Check for DDEV changes outside the editor
- New: Added new command to delete all images to free up disk space used by previous docker image versions
- New: Added support for PHP 8.3
- New: Added command to edit php.ini file
- New: Added command to edit nginx.conf file
- New: Check for DDEV updates and notify the user, with information about how to update
- New: The extension can detect if a file inside .ddev is updated and display a message allowing the user to restart to apply the new changes. Only if the file is edited with VS Code and the project is running.
- Improved: Added skip-confirmation to some commands to avoid confirmation messages from DDEV

## [v1.2.0] - 2023-09-14

- New: Automatically add launch configuration to launch.json when Xdebug is enabled, the file is created if it does not exist
- New: New option to always create a database snaphot when a project is stopped
- Changed: Extension category in the marketplace
- Fixed: Duplicate welcome view in sidebar when docker was not running
- Fixed: Reload services data when the project is stared. There's no reliable way to get services/add-ons if the project is not running

## [v1.1.1] - 2023-09-09

- New: Registered configuration snippets for Xdebug. If you open you launch.json and click the "Add configuration" button you'll see DDEV Xdebug snippet
- New: Added option in sidebar and command palette to quickly change server type
- Improved: To be consistent with DDEV we renamed "Type" to "Project Type" in the sidebar
- Improved: Added new red loader that it's displayed when deleting a project
- Fixed: Incorrect loader displayed when doing action "Stop Others"
- Fixed: Display correct message in sidebar view when there's only one project and it's deleted
- Fixed: Command editService when called from the command palette was not updating the sidebar item

## [v1.1.0] - 2023-07-09

- New: When using Share (ddev share) and the project type is WordPress the extension will make the URL's relative only in the shared version of the site. Sharing works without the need to update the url's in the database. The local and the shared version will work at the same time.
- New: New option to configure if the .dev folder is removed when deleting a project
- New: Added support for Mailpit
- New: Renamed Mailhog and Mailpit to **Mail UI** to keep the name consistent regardless of version or service installed. (Theres a setting to adjust the label)
- Improved: To be consisted with DDEV we moved PHP, NodeJS and Mail UI to the general info view. DDEV does not consider this "Services" instead they are additional processes running inside the web container.
- Fixed: Mail service was not displayed in the sidebar in some cases
- Fixed: Status bar indicator respects user configuration
- Fixed: Success message on database export said imported instead of exported

## [v1.0.1] - 2023-02-09

- Updated: Extension Readme
- Improved: Share command will show an error message if **ngrok** is not installed instead of failing silently
- Fixed: On Windows traditional installation node-pty was unable to spawn a process because of a bug in node-pty, workaround applied.
- Fixed: Muragen showing wrong state in sidebar

## [v1.0.0] - 2023-01-09

- Initial release
