<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About & Skills — mifta</title>
  <link rel="stylesheet" href="assets/style.css">
  <style>
    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
      margin-top: 2rem;
    }
    .skill-card {
      background-color: var(--card-bg);
      padding: 1.5rem;
      border-radius: 8px;
      border: 1px solid #334155;
    }
    .skill-card h3 {
      color: var(--accent-color);
      margin-bottom: 1rem;
    }
    .skill-card ul {
      list-style-type: disc;
      padding-left: 1.2rem;
      color: var(--text-muted);
    }
    .skill-card li {
      margin-bottom: 0.5rem;
    }
  </style>
</head>
<body>
  <main>
    <section>
      <h2>About Me</h2>
      <p>I am a software engineer with over 4 years of experience designing and developing web solutions. I focus on writing clean, maintainable code and solving complex performance bottlenecks.</p>
    </section>
 <section style="margin-top: 3rem;">
      <h2>Core Skills</h2>
      <div class="skills-grid">
        <div class="skill-card">
          <h3>Frontend</h3>
          <ul>
            <li>HTML5 / CSS3 / JavaScript (ES6+)</li>
            <li>React.js & Next.js</li>
            <li>Tailwind CSS</li>
          </ul>
        </div>
        <div class="skill-card">
          <h3>Backend</h3>
          <ul>
            <li>Node.js & Express</li>
            <li>Python / Django</li>
            <li>REST & GraphQL APIs</li>
          </ul>
        </div>
        <div class="skill-card">
          <h3>Tools & DevOps</h3>
          <ul>
            <li>Git & GitHub Actions</li>
            <li>Docker & PostgreSQL</li>
            <li>AWS / Vercel</li>
          </ul>
        </div>
      </div>
    </section>
  </main>
</body>
</html>