<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Table</title>
    <link rel="stylesheet" href="css/style3.css">
</head>

<body>
    <h1>Job Application Table</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>公司</th>
                <th>优先级</th>
                <th>行业</th>
                <th>Base</th>
                <th>岗位名称</th>
                <th>流程进展</th>
                <th>终止详情</th>
                <th>网申日</th>
                <th>笔试日</th>
                <th>面试日</th>
                <th>官网链接</th>
            </tr>
        </thead>
        <tbody id="job-table-body">
            <!-- Rows will be populated by JavaScript -->
        </tbody>
    </table>

    <button id="add-row-button">添加记录</button>

    <!-- <script src="scripts.js"></script> -->
    <script src="{{ asset('js/notes.js') }}"></script>
</body>

</html>