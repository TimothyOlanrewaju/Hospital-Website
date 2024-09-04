<script>
    function viewAll(categoryId) {
        window.location.href = '/view_all_services.php?category=' + categoryId;
    }
</script>
<?php
// Retrieve the category ID from the URL
$category_id = isset($_GET['category']) ? $_GET['category'] : null;

// Fetch the services corresponding to the category from the database
$services = DB::table('serves')->where('category_id', $category_id)->get();

// Display the services in a tabular form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Services</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>All Services</h2>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <!-- Add more columns as needed -->
        </tr>
    </thead>
    <tbody>
        <?php foreach ($services as $service): ?>
        <tr>
            <td><?php echo $service->name; ?></td>
            <td><?php echo $service->description; ?></td>
            <!-- Add more columns as needed -->
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
