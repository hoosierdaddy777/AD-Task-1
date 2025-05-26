<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Summary Report</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../page/assets/css/styles.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Academic Analytics</h1>
            <h2>Performance Overview Report</h2>
        </header>

        <main>
            <div class="summary-stats">
                <div class="stats-grid">
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
                    $total = count($students);
                    $passed = 0;
                    $failed = 0;
                    $totalGrade = 0;
                    
                    foreach ($students as $grade) {
                        $totalGrade += $grade;
                        if ($grade >= 60) {
                            $passed++;
                        } else {
                            $failed++;
                        }
                    }
                    
                    $average = $total > 0 ? round($totalGrade / $total) : 0;
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value"><i class="fas fa-users"></i> ' . $total . '</div>';
                    echo '<div class="stat-label">Total Students</div>';
                    echo '</div>';
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value pass-stat"><i class="fas fa-check-circle"></i> ' . $passed . '</div>';
                    echo '<div class="stat-label">Passed Students</div>';
                    echo '</div>';
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value fail-stat"><i class="fas fa-times-circle"></i> ' . $failed . '</div>';
                    echo '<div class="stat-label">Failed Students</div>';
                    echo '</div>';
                    ?>
                </div>
            </div>

            <div class="chart-container" id="chart">
                <?php
                // Simple bar chart visualization
                $chartData = [
                    'Passed' => $passed,
                    'Failed' => $failed
                ];
                
                $maxValue = max($chartData);
                $barWidth = 100 / count($chartData);
                
                $i = 0;
                foreach ($chartData as $label => $value) {
                    $height = ($value / $maxValue) * 100;
                    $left = $i * $barWidth + ($barWidth / 4);
                    $width = $barWidth / 2;
                    $colorClass = $label == 'Passed' ? 'pass-stat' : 'fail-stat';
                    
                    echo "<div class='chart-bar $colorClass' 
                          style='left: {$left}%; width: {$width}%; height: {$height}%'
                          data-value='$value'>
                          $value
                          </div>";
                    $i++;
                }
                ?>
            </div>
        </main>

        <div class="navigation">
            <a href="../index.php" class="nav-button">
                <i class="fas fa-arrow-left"></i> Back to Grade Report
            </a>
        </div>

        <footer>
            <p>© <?php echo date("Y"); ?> Academic Analytics System | <i class="fas fa-chart-line"></i> Data-Driven Insights</p>
        </footer>
    </div>

    <script>
        // Simple animation trigger for the chart
        document.addEventListener('DOMContentLoaded', function() {
            const bars = document.querySelectorAll('.chart-bar');
            bars.forEach(bar => {
                const height = bar.style.height;
                bar.style.height = '0';
                setTimeout(() => {
                    bar.style.height = height;
                }, 300);
            });
        });
    </script>
</body>
</html>