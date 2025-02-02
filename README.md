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
- **👩‍💻@MohammedAli12345678 ** – Mohammed Ali
 

## Collaboration
This project has been a team effort, with each member contributing their expertise in various areas, such as backend development, frontend design, database management, and quality assurance. Together, we have created a robust solution with a focus on efficiency, scalability, and user experience.



# ⭐️ Git Cheat Sheet for Teams Working on GitHub

## 🛠 Basic Commands
| Command | Description |
|---------|-------------|
| `git clone <repo-url>` | Clone a remote repository to your local machine |
| `git status` | Check the status of your working directory |
| `git add .` | Stage all changes for commit |
| `git commit -m "Your message"` | Commit staged changes with a message |
| `git push origin <branch>` | Push commits to the remote repository |
| `git pull origin <branch>` | Pull the latest changes from remote |

---

## 🌱 Branching Workflow (Recommended)

### 1️⃣ Always Pull Before Working
```bash
git pull origin master  # Get the latest changes
```
or to avoid merge commits:
```bash
git pull --rebase origin master
```

### 2️⃣ Create a New Feature Branch
```bash
git checkout -b feature-branch
git push origin feature-branch  # Push it to GitHub
```

### 3️⃣ Work on Your Changes
```bash
git add .
git commit -m "Describe your changes"
git push origin feature-branch
```

### 4️⃣ Open a Pull Request (PR)
- Go to **GitHub → Repository → Pull Requests → New Pull Request**.
- Select **feature-branch → master**.
- Add a description and request reviews.

### 5️⃣ Merge the Pull Request
```bash
git checkout master
git pull origin master  # Ensure it's up to date
git merge feature-branch
git push origin master
```
- After merging, delete the branch:
```bash
git branch -d feature-branch
git push origin --delete feature-branch
```

---

## ⚠️ Resolving Merge Conflicts
If `git pull` gives a **merge conflict**, resolve it manually:
1. Open the conflicted file(s) in a code editor.
2. Look for `<<<<<<<`, `=======`, and `>>>>>>>`.
3. Keep the correct version and delete the conflict markers.
4. After resolving, run:
   ```bash
   git add .
   git commit -m "Resolved merge conflict"
   git push origin master
   ```

---

## 🔒 Protecting `master` (Optional)
1. Go to **GitHub → Repository → Settings → Branches**.
2. Click **Add Branch Protection Rule**.
3. Enable:
   - ✅ **Require pull request reviews before merging**.
   - ✅ **Restrict who can push to this branch**.
   - ✅ **Require status checks before merging**.

---

## 💡 Useful Commands
| Command | Description |
|---------|-------------|
| `git branch` | List all local branches |
| `git branch -r` | List all remote branches |
| `git checkout <branch>` | Switch to another branch |
| `git checkout -b <branch>` | Create and switch to a new branch |
| `git log --oneline --graph` | Show commit history in one line |
| `git stash` | Temporarily save changes without committing |
| `git stash pop` | Restore stashed changes |
| `git reset --hard HEAD~1` | Undo the last commit |

---

## 🚀 Quick Reference
✅ **Always pull before working**  
✅ **Use branches instead of pushing directly to `master`**  
✅ **Open a pull request for review**  
✅ **Resolve conflicts carefully**  
✅ **Never force push unless necessary (`git push --force-with-lease`)**  

---

 ✨

