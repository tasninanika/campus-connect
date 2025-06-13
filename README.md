# Campus Connect

Campus Connect is a comprehensive platform designed to bridge the gap between alumni, students, and university administrators. It fosters networking, collaboration, and resource sharing within an academic community.

## 🚀 Features

### 🎓 *Alumni Features*
- Register and log in after admin verification.
- Write and manage blogs, job postings, and study materials.
- View and register for recent/upcoming events.
- Access announcements from the admin.
- View and connect with other alumni.
- Comment on blogs.
- Update personal and account information.

### 👩‍🎓 *Student Features*
- Register and log in to the system.
- Read blogs, job postings, and study materials shared by alumni.
- View recent events and announcements.
- Comment on alumni blogs.
- Explore alumni profiles and send messages via email.
- Update personal and account information.

### 👩‍💼 *Admin Features*
- Approve or decline alumni registration requests.
- Block or unblock users (students and alumni).
- Moderate and approve content (blogs, jobs, study materials).
- Post announcements and events.
- Manage all user accounts (view, update, or remove profiles).
- Update admin profile information.

### 🖥️ *Technology Stack*
- *Frontend:* HTML, CSS, Tailwind CSS with daisyUI, JavaScript.
- *Backend:* PHP.
- *Database:* MySQL.

## 📐 System Architecture

The system consists of:
1. *Three User Roles*: Alumni, Students, and Admins.
2. *Role-Specific Dashboards*: Each role has tailored features and privileges.
3. *Admin-Controlled Content Moderation*: Ensures platform integrity and relevance.
4. *Email Notifications*: Keeps users updated about new announcements or events.

## 📊 Diagrams

**ER Diagram of CampusConnect**
![image](https://github.com/user-attachments/assets/3b78b479-7624-4b88-8ee9-2d1132394473)
<br>

**System Architecture of Alumni and Admin**
![image](https://github.com/user-attachments/assets/17c46d8f-953c-4476-acb8-cdcaa87fc25f)

**Admin Flowchart**
![image](https://github.com/user-attachments/assets/a37ad8d3-7859-4d92-b146-6d4b3f00e237)


---

## 🛠️ Installation and Setup

Follow these steps to set up the project locally:

1. Clone this repository:
   bash
   git clone https://github.com/Suprio-Das/Campus-Connect.git
   
2. Navigate to the project directory:
   bash
   cd Campus-Connect
   
3. Set up the database:
   - Import the provided .sql file into MySQL.
   - Update database credentials in the PHP configuration file (config.php).

4. Install dependencies (if applicable):
   bash
   npm install  # For Tailwind CSS (optional, if modifications are required)
   

5. Start the development server:
   bash
   php -S localhost:8000
   

6. Open your browser and navigate to:
   
   http://localhost:8000
   

---

## 📂 Project Structure


Campus-Connect/

├── assets/               # Static files (CSS, JS, Images)

├── config/               # Configuration files (Database, Constants)

├── public/               # Public-facing files (Login, Registration, Homepages)

├── views/                # Dashboard views for Alumni, Students, Admin

├── scripts/              # Backend scripts for CRUD operations

├── styles/               # Tailwind CSS customizations

└── README.md             # Project documentation


---

## ✨ Contributors

Special thanks to the contributors who brought this project to life:
- **[Suprio Das](https://github.com/Suprio-Das)**
- **[Jarin Tasnin Anika](https://github.com/tasninanika)**

---

## 📫 Contact

For any queries or contributions:
- Email: [suprio.cse@gmail.com](mailto:suprio.cse@gmail.com)
- GitHub: [Suprio-Das](https://github.com/Suprio-Das)
- Email: [jarintasnin27@gmail.com](mailto:jarintasnin27@gmail.com)
- GitHub: [Jarin Tasnin Anika](https://github.com/tasninanika)

---

