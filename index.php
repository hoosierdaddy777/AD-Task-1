<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades Report</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Student Academic Portal</h1>
            <h2>Grade Performance Dashboard</h2>
        </header>

        <main>
            <ul class="grades-list">
                <?php
                // Demonstrating declarations
                $students = [
                    "Alice Johnson" => 92,
                    "Robert Chen" => 58,
                    "Maria Garcia" => 75,
                    "David Kim" => 64,
                    "Sophia Patel" => 81,
                    "James Wilson" => 43
                ];
                
                // Demonstrating looping and conditionals
                foreach ($students as $name => $grade) {
                    $percentage = min(100, max(0, $grade)); // Ensure between 0-100
                    echo "<li>";
                    echo "<div>";
                    echo "<div class='student-name'>$name</div>";
                    echo "<div class='grade-meter'><div class='grade-meter-fill' style='width: $percentage%'></div></div>";
                    echo "</div>";
                    echo "<div class='grade-status'>";
                    echo "<span class='grade-value'>$grade%</span>";
                    echo ($grade >= 60) 
                        ? "<span class='pass'><i class='fas fa-check-circle'></i> Pass</span>" 
                        : "<span class='fail'><i class='fas fa-times-circle'></i> Fail</span>";
                    echo "</div>";
                    echo "</li>";
                }
                ?>
            </ul>
        </main>

        <div class="navigation">
            <a href="./page/index.php" class="nav-button">
                <i class="fas fa-chart-bar"></i> View Summary Report
            </a>
        </div>

        <footer>
            <p>© <?php echo date("Y"); ?> Academic Records System | <i class="fas fa-graduation-cap"></i> BY DULUTAN JOHN CARLO RAMIREZ</p>
        </footer>
    </div>
</body>
</html>