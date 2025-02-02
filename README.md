Hi team, this is our project that we will be working on. We have made some slight changes.
# 📌 business agency company

## 🚀 Overview
This is our project, where we will be collaborating and making improvements. We have made some minor changes recently.

## 📂 Project Structure
/projectweb2
│── /assets
│   ├── /css       # Stylesheets
│   ├── /js        # JavaScript files
│   ├── /images    # Images and icons
│── /docs          # Documentation files (JSDoc, HTML, CSS docs)
│── index.html     # Main HTML file
│── README.md      # Project documentation

## 📦 Installation
Follow these steps to set up the project:

1. **Clone the repository**  
   ```bash

   git clone https://github.com/MohammedMogeab/website-business.git
   
cd projectweb2


   # Team Collaboration

## Team
The following roles have contributed to this project:

- **👨‍💻 @MubarakAshrafAlrawy** – mubarak Ashraf Alrawy
- - **🧑‍💻@MohammedMogeab  ** –  Moahmmed Mogeab Ahmed Al-hajj
- **👩‍💻@hfyzalswfy ** – Mohammed Ali
 

## Collaboration
This project has been a team effort, with each member contributing their expertise in various areas, such as backend development, frontend design, database management, and quality assurance. Together, we have created a robust solution with a focus on efficiency, scalability, and user experience.

# 🚀 **Git Team Workflow Cheatsheet**

## **1⃣ Setting Up the Repository (First-Time Only)**
### **A. Clone the Repository**
```bash
git clone https://github.com/YourUsername/YourRepo.git
cd YourRepo
```
### **B. Configure Git (If Not Done)**
```bash
git config --global user.name "Your Name"
git config --global user.email "your.email@example.com"
```

---

## **2⃣ Updating Your Local Repository (Before Making Changes)**
```bash
git pull origin master  # Get the latest code
```

---

## **3⃣ Creating a New Branch (For a New Feature or Fix)**
```bash
git checkout -b feature-branch-name  # Create & switch to a new branch
```

---

## **4⃣ Making Changes & Saving Them**
```bash
git add .                      # Stage all changes
git commit -m "Describe changes here"
```

---

## **5⃣ Pushing Your Changes to GitHub**
```bash
git push origin feature-branch-name
```

---

## **6⃣ Creating a Pull Request (PR)**
1. Go to **GitHub → Your Repository**.
2. Click on **Pull Requests** → **New Pull Request**.
3. Select your branch & compare it with `master`.
4. Click **Create Pull Request** and request a review.

---

## **7⃣ Reviewing & Merging Changes**
- After approval, **merge** the Pull Request into `master` on GitHub.
- Then, all team members should **update their local copy**:
  ```bash
  git checkout master
  git pull origin master
  ```

---

## **8⃣ Handling Merge Conflicts**
### **A. If a Merge Conflict Occurs**
1. Git will mark the conflicting parts in your files.
2. Open the file and **manually fix the conflict**.
3. After resolving:
   ```bash
   git add .
   git commit -m "Resolved merge conflict"
   git push origin feature-branch-name
   ```
4. Then, complete the PR as usual.

---

## **9⃣ Deleting Old Branches (After Merging)**
### **A. Delete a Branch Locally**
```bash
git branch -d feature-branch-name
```
### **B. Delete a Branch on GitHub**
```bash
git push origin --delete feature-branch-name
```

---

## **🌟 Bonus Commands**
### **Check All Branches**
```bash
git branch -a
```
### **Switch to Another Branch**
```bash
git checkout branch-name
```
### **Undo Last Commit (Before Pushing)**
```bash
git reset --soft HEAD~1
```
### **Undo Last Commit (After Pushing)**
```bash
git revert HEAD
git push origin master
```

---

This workflow ensures **smooth collaboration** without overwriting anyone's work. 🚀

