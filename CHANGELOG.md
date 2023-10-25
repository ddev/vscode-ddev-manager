# Change Log

All notable changes to the "ddev-manager" extension will be documented in this file.

## v.1.4.0

- New: Now the extension is able to start your docker provider if it's not running. Tested with Docker Desktop, OrbStack and Colima
- New: Option to configure Colima VM in case you are using it as a Docker provider
- New: Exclude Alpha releases from update notification
- Fixed: Added skip-confirmation when doing restart command

## v1.3.5

- New: Hovering over the database service in the sidebar will show a tooltip with the host port if the project is running
- Improved: Exclude the output of `list` command in the output panel as it can saturate the panel

## v1.3.4

- Fixed: When adding a new project, if the name was left empty the user still was able to continue. Now the field it's validated and an error message is presented.

## v1.3.3

- The extension repository has been moved to the DDEV org
- New: Added option to show unofficial services/add-ons

## v1.3.2

- Improved: Checking for updates can be disabled in the extension settings
- Improved: Creating a project now sets some defaults depending on the project type
- Improved: Descriptions to be more clear when creating a project
- Fixed: Fixed error restoring snapshot if the snapshot name contained hyphens

## v1.3.1

- Fixed: Stop project command

## v1.3.0

- New: Sync state between multiple VSCode editor windows
- New: Check for DDEV changes outside the editor
- New: Added new command to delete all images to free up disk space used by previous docker image versions
- New: Added support for PHP 8.3
- New: Added command to edit php.ini file
- New: Added command to edit nginx.conf file
- New: Check for DDEV updates and notify the user, with information about how to update
- New: The extension can detect if a file inside .ddev is updated and display a message allowing the user to restart to apply the new changes. Only if the file is edited with VS Code and the project is running.
- Improved: Added skip-confirmation to some commands to avoid confirmation messages from DDEV

## v1.2.0

- New: Automatically add launch configuration to launch.json when Xdebug is enabled, the file is created if it does not exist
- New: New option to always create a database snaphot when a project is stopped
- Changed: Extension category in the marketplace
- Fixed: Duplicate welcome view in sidebar when docker was not running
- Fixed: Reload services data when the project is stared. There's no reliable way to get services/add-ons if the project is not running

## v1.1.1

- New: Registered configuration snippets for Xdebug. If you open you launch.json and click the "Add configuration" button you'll see DDEV Xdebug snippet
- New: Added option in sidebar and command palette to quickly change server type
- Improved: To be consistent with DDEV we renamed "Type" to "Project Type" in the sidebar
- Improved: Added new red loader that it's displayed when deleting a project
- Fixed: Incorrect loader displayed when doing action "Stop Others"
- Fixed: Display correct message in sidebar view when there's only one project and it's deleted
- Fixed: Command editService when called from the command palette was not updating the sidebar item

## v1.1.0

- New: When using Share (ddev share) and the project type is WordPress the extension will make the URL's relative only in the shared version of the site. Sharing works without the need to update the url's in the database. The local and the shared version will work at the same time.
- New: New option to configure if the .dev folder is removed when deleting a project
- New: Added support for Mailpit
- New: Renamed Mailhog and Mailpit to **Mail UI** to keep the name consistent regardless of version or service installed. (Theres a setting to adjust the label)
- Improved: To be consisted with DDEV we moved PHP, NodeJS and Mail UI to the general info view. DDEV does not consider this "Services" instead they are additional processes running inside the web container.
- Fixed: Mail service was not displayed in the sidebar in some cases
- Fixed: Status bar indicator respects user configuration
- Fixed: Success message on database export said imported instead of exported

## v1.0.1

- Updated: Extension Readme
- Improved: Share command will show an error message if **ngrok** is not installed instead of failing silently
- Fixed: On Windows traditional installation node-pty was unable to spawn a process because of a bug in node-pty, workaround applied.
- Fixed: Muragen showing wrong state in sidebar

## v1.0.0

- Initial release
