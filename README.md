# DDEV Manager

This extension simplifies the management of all your [DDEV](https://ddev.readthedocs.io/) projects offering a centralized and user-friendly interface to control every aspect of your projects.

![DDEV Preview](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-preview.png "DDEV Preview")

### View all your DDEV projects from the sidebar

The sidebar provides an overview of all your projects, offering a user-friendly interface for customizing each project with ease. If your active workspace includes or is part of a DDEV project, you can use the command palette.

![DDEV Sidebar](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-sidebar.png "DDEV Sidebar")

### Control your workspace project from the command palette

In addition to the sidebar, you can use the command palette to manage the current DDEV project open in VSCode. All commands executed through the command palette are specifically targeted at the project found in the workspace. There are cases when you only open a subfolder of a DDEV project with VSCode, the extension is smart enough to automatically detect that the opened folder is part of a DDEV project and get all the correct project data.

![Command Palette](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-palette.png "Command Palette")

### Change PHP/NodeJS and Server Type

You can easily customize the PHP and NodeJS version used in your project. You'll see a list of all the available versions to choose from. The extension will take care of the rest.

![DDEV Processes](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-service-version.png "DDEV Processes")

### Manage your projects services

You can **add and delete** services directly from VSCode, you will see a list of the available services to install or a list of the installed services, depending on your chosen action, so you can easily choose the services to add or remove.

![DDEV Services](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-services.png "DDEV Services")

Installed services will display different actions based on their service type, If a service exposes a URL, you can easily launch it with a single click.

![DDEV Services Actions](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-service-actions.png "DDEV Services Actions")

### SSH Access to your projects

You can launch an SSH terminal for any of your running projects. Within the sidebar, each project has a button to create a new terminal in the current VSCode window, so no matter if you are working on project **A** you can SSH access project **B** in the same window with a single click. If your active workspace includes or is part of a DDEV project you can use the command palette to **Start SSH session** or you'll also have the option to create a new DDEV terminal from the terminals panel.

![DDEV SSH](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-ssh.png "DDEV SSH")

![DDEV SSH](https://raw.githubusercontent.com/biati-digital/vscode-ddev-manager/main/assets/ddev-ssh2.png "DDEV SSH")

## Many more features

- Sidebar to manage all your DDEV projects
- Use the command palette to run commands on the workspace you are working on
- Start/Stop/Restart/Rename/Delete projects
- Stop all projects except the selected one
- Change Services versions (PHP, NodeJS, etc.)
- Install/Uninstall Services
- Launch Installed Services (Adminer, Mailhog, phpMyAdmin, etc.)
- Create/Restore/Clear Snapshots
- Import/Export databases
- Open the database with any application you want (PHP MyAdmin, TablePlus, Sequel Ace, etc.)
- Enable/Disable XDebug
- Automatically configure the debugger to work with Xdebug and DDEV wne you enable Xdebug
- Launch configuration snippets for launch.json
- Enable/Disable Share. Share your project outside of your local network
- Automatically configure the PHP version in the editor. Used for providing version appropriate suggestions and diagnostics. It required a extension like PHP Intelephense or PHP by DEVSENSE
- Integrated DDEV terminal
- Quickly launch projects in your browser
- Quickly open the Config.yaml file
- Poweroff DDEV
- Reveal DDEV projects in your OS file explorer
- Change sidebar view to list all projects or only the project for the active workspace
- And much more...

## Extension Settings

The extension comes with multiple options, to see all the available options go to **VSCode Settings -> Extensions -> DDEV Manager**

## Roadmap

You can see the roadmap and progress [here](https://github.com/users/biati-digital/projects/1/views/1)

## Know issues

The extension was developed and tested on macOS with Docker Desktop and Orbstack, i did some tests on Windows 11 using WSL2 and also a traditional installation and the tested commands worked correctly. I've not tested the extension on Linux yet but it should work. This is still under development so make sure to open an iSSUE if you find a bug.

- There's a few things that are still not implemented

## Requirements

- You'll need a Docker provider on your system before you can install DDEV. [More information](https://ddev.readthedocs.io/en/stable/users/install/docker-installation/)
- You must have DDEV already installed and working. [Install instructions](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/)

This project was created by [Biati Digital](https://www.biati.com.mx), if you find it useful please consider adding a review and share it with the world.
