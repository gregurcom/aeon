<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progress - task</title>
    <link rel="stylesheet" href="styles/goal.css">
    <link rel="stylesheet" href="styles/layout.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Mono:wght@300&family=Space+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <section class="content">
        <nav>
            <div>
                <a href="index.html">Home</a>
            </div>
            <div>
                <a href="task.html" class="neon-button">Tasks</a>
            </div>
            <div>
                <a href="goal.html">Goals</a>
            </div>
            <div>
                <a href="blog.html">Blog</a>
            </div>
            <div id="login">
                <a href="login.html">Log in</a>
            </div>
        </nav>
        <div id="goal">
            <div id="content">
                <ol>
                    <li>Drink coffee <span class="text-muted">26 dec</span></li>
                    <li>Mentor (course component) <span class="text-muted">27 dec</span></li>
                    <li>AG laboratoare <span class="text-muted">2 jan</span></li>
                    <li>BZ laboratoare <span class="text-muted">2 jan</span></li>
                </ol>
                <div id="form">
                    <form>
                        <input type="text" name="task" placeholder="Write a task...">
                        <br>
                        <button type="submit">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>