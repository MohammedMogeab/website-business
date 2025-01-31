// Sample project data (can be replaced with API fetch)
const projects = [
    { id: 1, name: "Project A", creator: "John Doe", price: "$50", image: "/assets/images/blog-1.jpg" },
    { id: 2, name: "Project B", creator: "Jane Smith", price: "$75", image: "/assets/images/blog-1.jpg" },
    { id: 3, name: "Project C", creator: "Alice Brown", price: "$100", image: "/assets/images/blog-1.jpg" }
];

const container = document.getElementById("projectsContainer");

// Create project cards
projects.forEach(project => {
    const card = document.createElement("div");
    card.classList.add("card");
    card.innerHTML = `
        <img src="${project.image}" alt="${project.name}">
        <h3>${project.name}</h3>
        <p>By: ${project.creator}</p>
        <p class="price">${project.price}</p>
    `;
    card.onclick = () => {
        window.location.href = `product.html?id=${project.id}`;
    };
    container.appendChild(card);
});
