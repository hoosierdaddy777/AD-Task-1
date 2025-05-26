<a name="readme-top"></a>

<br />
<div align="center">
<img src="./assets/img/feutechlogo.png" alt="Nyebe" width="" height="130">
</div>
<div align="center">
  <h3 align="center">Student Academic Portal</h3>
</div>
<div align="center">
  A modern dashboard for tracking and visualizing student grade performance
</div>

<br />

![](https://visit-counter.vercel.app/counter.png?page=zyx-0314/AD-Student-Grades-Portal)

[![wakatime](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8.svg)](https://wakatime.com/badge/user/018dd99a-4985-4f98-8216-6ca6fe2ce0f8/project/63501637-9a31-42f0-960d-4d0ab47977f8)

---

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li><a href="#key-components">Key Components</a></li>
        <li><a href="#technology">Technology</a></li>
      </ol>
    </li>
    <li><a href="#features">Features</a></li>
    <li><a href="#rule-practices-and-principles">Rules, Practices and Principles</a></li>
    <li><a href="#resources">Resources</a></li>
  </ol>
</details>

---

## Overview

The Student Academic Portal is a comprehensive web application designed to display and analyze student grade performance. It features two main views:

1. A detailed grade report showing individual student performance with visual indicators  
2. A summary analytics dashboard with statistical overview and chart visualization

The application demonstrates modern web development practices with PHP backend logic and a sleek, animated UI.

### Key Components

- **Student Grade Dashboard**: Displays individual student grades with pass/fail indicators  
- **Performance Visualization**: Visual grade meters showing percentage scores  
- **Academic Analytics**: Summary statistics of overall class performance  
- **Interactive Chart**: Dynamic bar chart comparing passed vs failed students  
- **Responsive Design**: Works across different screen sizes

### Technology

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)

#### Frontend

![Poppins](https://img.shields.io/badge/Font-Poppins-143?style=for-the-badge)
![FontAwesome](https://img.shields.io/badge/Font_Awesome-528DD7?style=for-the-badge&logo=fontawesome&logoColor=white)
![CSS3 Animations](https://img.shields.io/badge/Animations-CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

#### Design

![Dark Mode](https://img.shields.io/badge/Dark_Mode-121212?style=for-the-badge&logoColor=white)
![Gradient UI](https://img.shields.io/badge/UI-Gradient-6C5CE7?style=for-the-badge)

---

## Features

1. **Student Grade Listing**  
   - Individual student cards with percentage grades  
   - Color-coded pass/fail indicators  
   - Visual grade meter bars  

2. **Academic Analytics**  
   - Total student count  
   - Passed/failed statistics  
   - Interactive bar chart visualization  

3. **Modern UI Elements**  
   - Smooth animations and transitions  
   - Dark mode interface with accent colors  
   - Responsive layout  

4. **Navigation**  
   - Seamless switching between detailed view and summary report  

---

## Rules, Practices and Principles

1. Always use `AD-` in the front of the Title of the Project for the Subject followed by your custom naming.  
2. Do not rename `.php` files if they are pages; always use `index.php` as the filename.  
3. Add `.component` to the `.php` files if they are components; e.g., `footer.component.php`.  
4. Add `.util` to the `.php` files if they are utility codes; e.g., `account.util.php`.  
5. Place files in their respective folders.  
6. Naming Conventions:

| Naming Case | Type of Code         | Example                           |
|-------------|----------------------|-----------------------------------|
| Pascal      | Utility              | Account.util.php                  |
| Camel       | Components and Pages | index.php, footer.component.php   |

7. Renaming of folders must be meaningful and reflect their purpose or content.  
8. Use proper labels in GitHub commits: `feat`, `fix`, `refactor`, `docs`.  
9. File Structure:

```
AD-Student-Grades-Portal
├── assets
│   ├── css
│   │   └── styles.css
│   └── img
├── components
│   └── footer.component.php
├── pages
│   └── gradeReport
│       ├── assets
│       │   ├── css
│       │   │   └── styles.css
│       │   └── img
│       └── index.php
├── utils
│   └── Account.util.php
├── index.php
└── readme.md
```

## Resources

| Title                | Purpose                          | Link                                               |
|----------------------|----------------------------------|----------------------------------------------------|
| PHP Documentation    | Official PHP language reference  | [php.net](https://www.php.net/)                   |
| Poppins Google Font  | Modern sans-serif font family    | [fonts.google.com](https://fonts.google.com/specimen/Poppins) |
| Font Awesome         | Icon library and toolkit         | [fontawesome.com](https://fontawesome.com/)       |
| CSS Tricks           | Modern CSS techniques            | [css-tricks.com](https://css-tricks.com/)         |
| MDN Web Docs         | Web development resources        | [developer.mozilla.org](https://developer.mozilla.org/) |
