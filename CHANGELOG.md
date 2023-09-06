# Change Log

All notable changes to the "ddev-manager" extension will be documented in this file.

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
