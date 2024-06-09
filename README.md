# Flowchart Todo

![Last Commit](https://img.shields.io/github/last-commit/Siphon880gh/flowchart-todo/main)
<a target="_blank" href="https://github.com/Siphon880gh" rel="nofollow"><img src="https://img.shields.io/badge/GitHub--blue?style=social&logo=GitHub" alt="Github" data-canonical-src="https://img.shields.io/badge/GitHub--blue?style=social&logo=GitHub" style="max-width:8.5ch;"></a>
<a target="_blank" href="https://www.linkedin.com/in/weng-fung/" rel="nofollow"><img src="https://img.shields.io/badge/LinkedIn-blue?style=flat&logo=linkedin&labelColor=blue" alt="Linked-In" data-canonical-src="https://img.shields.io/badge/LinkedIn-blue?style=flat&amp;logo=linkedin&amp;labelColor=blue" style="max-width:10ch;"></a>
<a target="_blank" href="https://www.youtube.com/user/Siphon880yt/" rel="nofollow"><img src="https://img.shields.io/badge/Youtube-red?style=flat&logo=youtube&labelColor=red" alt="Youtube" data-canonical-src="https://img.shields.io/badge/Youtube-red?style=flat&amp;logo=youtube&amp;labelColor=red" style="max-width:10ch;"></a>

## :page_facing_up: Description:
By Weng Fei Fung. You've designed an SVG flowchart to outline automation or technical implementations. To enhance interactivity, you'd like to include checkboxes that can be checked off by team members or yourself as each part of the flow chart is implemented or addressed. In addition, you want to add a memo textbox where team members can comment about the flowchart.

Note this is in real-time, so when one team member makes a change to checkboxes or memo, another team member sees it without needing to refresh the page. The polling is at 4 seconds. You can change this polling if you're on a capable server.

## :open_file_folder: Table of Contents:
---
- [Description](#page_facing_up-description)
- [Screenshots](#camera-screenshots)
- [Live Demo](#computer-live-demo)
- [Installation](#minidisc-installation)
- [Usage](#runner-usage)
---

## :camera: Screenshots:
![image](assets-readme/screenshot.png)

## :computer: Live Demo:
<a href="https://wengindustry.com/tools/flowchart-todos/demo" target="_blank">Check it out</a>

## :minidisc: Installation:
Run in a PHP server.

You can design your SVG flow chart on https://app.code2flow.com/ or https://miro.com/, then export as SVG. Copy the SVG code into the index.html making sure the SVG tag has viewBox and preserveAspectRatio attributes so this app can calculate the checkbox positioning.

Add data-checkbox to each SVG child you want to have a checkbox (eg. rect, path, etc)

This will create a teamspace where anyone with the URL can see the checkboxes or modify them. The memo textarea at the bottom will work out of the box.

## :runner: Usage:
Run in a PHP server. No needed hands-on setup.