<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projects — Alex Morgan</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    .projects-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 2rem;
      margin-top: 2rem;
    }
    .project-card {
      background-color: var(--card-bg);
      border-radius: 8px;
      overflow: hidden;
      border: 1px solid #334155;
      display: flex;
      flex-direction: column;
    }
    .project-content {
      padding: 1.5rem;
      display: flex;
      flex-direction: column;
      flex: 1;
    }
    .project-content h3 {
      margin-bottom: 0.5rem;
      color: var(--text-color);
    }
    .project-content p {
      flex: 1;
      font-size: 0.95rem;
    }
    .project-tags {
      display: flex;
      gap: 0.5rem;
      margin-bottom: 1.5rem;
      flex-wrap: wrap;
    }
    .tag {
      background-color: #0f172a;
      color: var(--accent-color);
      padding: 0.25rem 0.5rem;
      border-radius: 4px;
      font-size: 0.8rem;
    }
  </style>
</head>
<body>


  <main>
    <h2>Featured Projects</h2>
    <div class="projects-grid">
      
      <div class="project-card">
        <div class="project-content">
          <h3>E-Commerce Dashboard</h3>
          <p>A real-time analytics dashboard for online merchants tracking sales metrics, inventory status, and user behavior.</p>
          <div class="project-tags">
            <span class="tag">React</span>
            <span class="tag">Node.js</span>
            <span class="tag">Tailwind</span>
          </div>
          <a href="#" class="btn" style="text-align: center;">Source Code</a>
        </div>
      </div>

      <div class="project-card">
        <div class="project-content">
          <h3>Task Management SaaS</h3>
          <p>Collaborative project management tool featuring drag-and-drop task boards, live chat, and team workspaces.</p>
          <div class="project-tags">
            <span class="tag">Next.js</span>
            <span class="tag">PostgreSQL</span>
            <span class="tag">Prisma</span>
          </div>
          <a href="#" class="btn" style="text-align: center;">Live Demo</a>
        </div>
      </div>

    </div>
  </main>

</body>
</html>