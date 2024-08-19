<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Statistics</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .stat-card {
            margin: 15px 0;
            padding: 20px;
            border-radius: 10px;
            color: white;
        }
        .stat-card h3 {
            margin-bottom: 10px;
        }
        .bg-primary-custom { background-color: #007bff; }
        .bg-success-custom { background-color: #28a745; }
        .bg-warning-custom { background-color: #ffc107; }
        .bg-danger-custom { background-color: #dc3545; }
        .bg-info-custom { background-color: #17a2b8; }
    </style>
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-5">Doctor Statistics</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="stat-card bg-primary-custom">
                <h3>Total Doctors</h3>
                <p>{{ $totalDoctors }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card bg-success-custom">
                <h3>Total Experience (Years)</h3>
                <p>{{ $totalExperience }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card bg-warning-custom">
                <h3>Minimum Experience (Years)</h3>
                <p>{{ $minExperience }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card bg-danger-custom">
                <h3>Maximum Experience (Years)</h3>
                <p>{{ $maxExperience }}</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="stat-card bg-info-custom">
                <h3>Average Salary</h3>
                <p>{{ $avgSalary }}</p>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
