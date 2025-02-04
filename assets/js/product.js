// Get project ID from URL
const urlParams = new URLSearchParams(window.location.search);
const projectId = urlParams.get("id");

// Sample project data (Replace with API fetch)
const projects = [
    { id: 1, name: "Project A", creator: "John Doe", price: "$50", image: "/assets/images/blog-1.jpg", description: "This is Project A." },
    { id: 2, name: "Project B", creator: "Jane Smith", price: "$75", image: "project2.jpg", description: "This is Project B." },
    { id: 3, name: "Project C", creator: "Alice Brown", price: "$100", image: "project3.jpg", description: "This is Project C." }
];

// Find the selected project
const project = projects.find(p => p.id == projectId);

// Display project details
if (project) {
    document.getElementById("productImage").src = project.image;
    document.getElementById("productName").textContent = project.name;
    document.getElementById("productCreator").textContent = "By: " + project.creator;
    document.getElementById("productPrice").textContent = project.price;
    document.getElementById("productDescription").textContent = project.description;
} else {
    document.body.innerHTML = "<h2>Project Not Found</h2>";
}
