<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2 Column 3 Row Table</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="p-6 bg-white shadow-lg rounded-lg">
        <table class="w-full border border-gray-300">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border border-gray-300 px-4 py-2">Column 1</th>
                    <th class="border border-gray-300 px-4 py-2">Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Row 1, Col 1</td>
                    <td class="border border-gray-300 px-4 py-2">Row 1, Col 2</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Row 2, Col 1</td>
                    <td class="border border-gray-300 px-4 py-2">Row 2, Col 2</td>
                </tr>
                <tr>
                    <td class="border border-gray-300 px-4 py-2">Row 3, Col 1</td>
                    <td class="border border-gray-300 px-4 py-2">Row 3, Col 2</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>