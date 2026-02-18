<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>LERNEX</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
    margin:0;
    font-family: Arial, sans-serif;

    /* Colorful background sections */
    background:
        linear-gradient(120deg, #f5c2e0 0%, #fcedf5 30%),
        linear-gradient(240deg, #fce4ec 0%, #ffffff 40%),
        linear-gradient(0deg, #e8f5e9 0%, #ffffff 50%);
    
    background-attachment: fixed;
}


/* Main */
.main{
    padding:30px;
}

/* Top bar */
.top-bar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 30px;
    background:#fff;
    border-bottom:1px solid #ddd;
}

.top-links a{
    margin-left:20px;
    text-decoration:none;
    color:#000;
    font-weight:bold;
}

.logout-btn{
    background:#AB908A;
    color:white;
    border:none;
    padding:8px 18px;
    border-radius:20px;
    cursor:pointer;
}

/* Course bar */
.course-bar{
    padding:15px 30px;
    background:#f7f7f7;
    border-bottom:1px solid #ddd;
}

.course-bar a{
    margin-right:25px;
    text-decoration:none;
    color:#000;
    font-weight:bold;
}

/* Search Section */
.search-box{
    background:#c1568f ;
    padding:60px 20px;
    text-align:center;
    color:white;
    border-radius:10px;
}

.search-box h1{
    font-size:48px;
}

.search-box p{
    font-size:20px;
}

.search-box input{
    width:60%;
    padding:15px;
    font-size:18px;
    border-radius:25px;
    border:none;
    outline:none;
}

/* Cards */
.card{
    background:white;
    margin:40px auto;
    padding:50px;
    max-width:900px;
    border-radius:10px;
    text-align:center;
}

.card h2{
    font-size:42px;
}

.card p{
    font-size:18px;
    color:#555;
}

.card button{
    margin-top:20px;
    padding:12px 30px;
    border:none;
    border-radius:25px;
    font-size:16px;
    cursor:pointer;
}

/* Colors */
.html{background:#e7f3ff;}
.css{background:#fff4a3;}
.js{background:#f3ecea;}
.python{background:#e8f5e9;}
.sql{background:#96d4d4;}

.html button{background:#04AA6D;color:white;}
.css button,
.js button,
.sql button{background:#000;color:white;}
.python button{background:#04AA6D;color:white;}

/* Horizontal cards */
.cards-row{
    display:flex;
    gap:25px;
    overflow-x:auto;
    padding:30px 0;
}

.cards-row .card{
    min-width:260px;
    flex-shrink:0;
}

/* Click effect */
button:active{
    transform:scale(0.95);
}
.card{
    box-shadow: 0 10px 30px rgba(0,0,0,0.12);
}

</style>
</head>

<body>

<div class="main">

<!-- First Line -->
<div class="top-bar">
    <button class="logout-btn" onclick="location.href='logout.php'">Logout</button>

    <div class="top-links">
        <a href="dashboard.php">Home</a>
        <a href="courses.php">Courses</a>
        <a href="api/quiz_topics.php">Quizzes</a>
        <a href="profile.php">Profile</a>
    </div>
</div>

<!-- Second Line -->
<div class="course-bar">
    <a href="courses/html.php">HTML</a>
    <a href="courses/css.php">CSS</a>
    <a href="courses/javascript.php">JavaScript</a>
    <a href="courses/python.php">Python</a>
    <a href="courses/sql.php">SQL</a>
    <a href="courses/php.php">PHP</a>
</div>

<!-- Search -->
<div class="search-box">
    <h1>Learn to Code</h1>
    <p>With the world's largest web developer site.</p>
    <input type="text" id="searchInput" placeholder="Search our tutorials, e.g. HTML">
</div>

<!-- Vertical Cards -->
<div class="card html">
    <h2>HTML</h2>
    <p>The language for building web pages</p>
    <button onclick="location.href='courses/html.php'">Learn HTML</button>
</div>

<div class="card css">
    <h2>CSS</h2>
    <p>The language for styling web pages</p>
    <button onclick="location.href='courses/css.php'">Learn CSS</button>
</div>

<div class="card js">
    <h2>JavaScript</h2>
    <p>The language for programming web pages</p>
    <button onclick="location.href='courses/javascript.php'">Learn JavaScript</button>
</div>

<div class="card python">
    <h2>Python</h2>
    <p>A popular programming language</p>
    <button onclick="location.href='courses/python.php'">Learn Python</button>
</div>

<div class="card sql">
    <h2>SQL</h2>
    <p>A language for accessing databases</p>
    <button onclick="location.href='courses/sql.php'">Learn SQL</button>
</div>

<!-- Horizontal Cards -->
<div class="cards-row">

    <div class="card html">
        <h2>HTML</h2>
        <button onclick="location.href='courses/html.php'">Learn HTML</button>
    </div>

    <div class="card css">
        <h2>CSS</h2>
        <button onclick="location.href='courses/css.php'">Learn CSS</button>
    </div>

    <div class="card js">
        <h2>JavaScript</h2>
        <button onclick="location.href='courses/javascript.php'">Learn JavaScript</button>
    </div>

    <div class="card python">
        <h2>Python</h2>
        <button onclick="location.href='courses/python.php'">Learn Python</button>
    </div>

    <div class="card sql">
        <h2>SQL</h2>
        <button onclick="location.href='courses/sql.php'">Learn SQL</button>
    </div>

</div>

</div>

<script>
const pages = [
    { name: "HTML", url: "courses/html.php" },
    { name: "CSS", url: "courses/css.php" },
    { name: "JavaScript", url: "courses/javascript.php" },
    { name: "Python", url: "courses/python.php" },
    { name: "SQL", url: "courses/sql.php" },
    { name: "PHP", url: "courses/php.php" },
    { name: "Java", url: "courses/java.php" },
    { name: "C Programming", url: "courses/c.php" },
    { name: "Notes", url: "notes.php" },
    { name: "Quizzes", url: "api/quiz_topics.php" },
    { name: "Profile", url: "profile.php" }
];

const input = document.getElementById("searchInput");

input.addEventListener("keyup", function () {
    const value = input.value.toLowerCase();

    let oldList = document.getElementById("searchResults");
    if (oldList) oldList.remove();

    if (value === "") return;

    let list = document.createElement("div");
    list.id = "searchResults";
    list.style.background = "white";
    list.style.maxWidth = "600px";
    list.style.margin = "20px auto";
    list.style.borderRadius = "10px";
    list.style.boxShadow = "0 5px 15px rgba(0,0,0,0.2)";

    pages.forEach(page => {
        if (page.name.toLowerCase().includes(value)) {
            let item = document.createElement("div");
            item.style.padding = "15px";
            item.style.cursor = "pointer";
            item.innerText = page.name;
            item.onclick = () => window.location.href = page.url;
            list.appendChild(item);
        }
    });

    document.querySelector(".main").prepend(list);
});
</script>

</body>
</html>
