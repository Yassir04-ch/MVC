<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">MySite</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <span class="nav-link">Hello, <?= $_SESSION['firstname']; ?>!</span>

                </li>
            </ul>
        </div>
         <div class="card-body text-center">
             <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h3 class="mb-4">Users List</h3>
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->getId(); ?></td>
                <td><?= $user->getFirstname(); ?></td>
                <td><?= $user->getLastname(); ?></td>
                <td><?= $user->getEmail(); ?></td>
                <td><?= $user->getRole(); ?></td>
                <td>
                     <a href="/update?id=<?= $user->getId(); ?>" class="btn btn-sm btn-warning">Edit</a>
                     <a href="/delete?id=<?= $user->getId(); ?>" class="btn btn-sm btn-danger" >Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


</body>

</html>