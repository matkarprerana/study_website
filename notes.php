<!DOCTYPE html>
<html>
<head>
<title>LERNEX-Notes</title>
<style>
    body {
        margin: 0;
        font-family: Arial;
        background-image: url('image3.jpg');
        background-size: cover;
        display: flex;
    }

   /* UNIVERSAL SIDEBAR FIX */
.sidebar {
    width: 220px;
    background: #B3688F;
    height: 100vh;
    box-shadow: 2px 0 8px rgba(0,0,0,0.2);
    padding-top: 20px;
    position: fixed;
    left: 0;
    top: 0;
}

.sidebar h2 {
    text-align: center;
    color: #ffffff;
    margin-top: 10px;
}

.sidebar a {
    display: block;
    padding: 12px 20px;
    color: #ffffff;
    text-decoration: none;
    margin: 5px 10px;
    border-radius: 5px;
}

.sidebar a:hover {
    background: #be879c;
    color: white;
}

/* Universal Main Section */
.main {
    margin-left: 220px;
    padding: 40px;
    color: white;
}
   
    /* NOTES CARDS GRID */
.notes-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;                  /* cards ke beech space */
    margin-top: 40px;
}


/* SINGLE CARD */
.note-card {
    background: #ffffff;
    border-radius: 14px;
    padding: 28px;              /* padding badhaya */
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    transition: transform 0.3s ease;
    min-height: 150px;          /* card height badhi */
    width: 250px;
}


.note-card:hover {
    transform: translateY(-5px);
}

.note-top {
    height: 5px;
    border-radius: 12px 12px 0 0;
    margin: -20px -20px 15px -20px;
}

.blue { background: #1e90ff; }
.orange { background: #ff8c00; }
.red { background: #ff4d4d; }
.purple { background: #8e44ad; }
.green { background: #27ae60; }
.sky { background: #00bcd4; }

.note-title {
    font-size: 20px;
    font-weight: bold;
    color: #222;
}

.note-sub {
    font-size: 15px;
    color: #666;
    margin-top: 6px;
}

.note-btn {
    margin-top: 50px;
    padding: 9px 20px;
    background: #6c5ce7;
    color: #fff;
    border: none;
    border-radius: 22px;
    font-size: 18px;
    cursor: pointer;
    text-decoration: none;
    display: block;        /* important */
    width: fit-content;    /* button width auto */
    margin-left: auto;     /* center */
    margin-right: auto;    /* center */
    transition: background 0.3s;
}


.note-btn:hover {
    background: #4834d4;
}

</style>
</head>

<body>

<div class="sidebar">
    <h2>LERNEX</h2>
        <a href="dashboard.php">Home</a>
        <a href="courses.php">Courses</a>
        <a href="api/quiz_topics.php">Quizzes</a>
        <a href="notes.php">Notes</a>
        <a href="profile.php">Profile</a>
        <a href="settings.php">Settings</a>
        <a href="index.php">Logout</a>
</div>

<div class="main">
    <h1>Programming Notes</h1>

    <div class="notes-grid">

    <div class="note-card">
        <div class="note-top blue"></div>
        <div class="note-title">Python Notes</div>
        <div class="note-sub">15 modules, 120 topics</div>
        <a href="python_notes.php" class="note-btn">View Notes</a>
    </div>

    <div class="note-card">
        <div class="note-top orange"></div>
        <div class="note-title">Java Notes</div>
        <div class="note-sub">15 modules, 120 topics</div>
        <a href="java_notes.php" class="note-btn">View Notes</a>
    </div>

    <div class="note-card">
        <div class="note-top red"></div>
        <div class="note-title">HTML / CSS Notes</div>
        <div class="note-sub">15 modules, 120 topics</div>
        <a href="html_css_notes.php" class="note-btn">View Notes</a>
    </div>

    <div class="note-card">
        <div class="note-top green"></div>
        <div class="note-title">JavaScript Notes</div>
        <div class="note-sub">Theory + Examples</div>
        <a href="javascript_notes.php" class="note-btn">View Notes</a>
    </div>

    <div class="note-card">
        <div class="note-top sky"></div>
        <div class="note-title">SQL Notes</div>
        <div class="note-sub">16 modules, 120 topics</div>
        <a href="sql_notes.php" class="note-btn">View Notes</a>
    </div>

    <div class="note-card">
        <div class="note-top purple"></div>
        <div class="note-title">Cloud Notes</div>
        <div class="note-sub">16 modules, 120 topics</div>
        <a href="cloud_notes.php" class="note-btn">View Notes</a>
    </div>

</div>

</div>

</body>
</html>