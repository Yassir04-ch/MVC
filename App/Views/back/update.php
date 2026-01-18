<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Update User</h4>
                </div>

                <div class="card-body">
                    <form action="/update" method="POST">

                         <input type="hidden" name="id" value="<?= $userr->getId() ?>">

                        <div class="mb-3">
                            <label class="form-label">First name</label>
                            <input type="text"
                                   name="firstname"
                                   class="form-control"
                                   value="<?= $userr->getFirstname(); ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last name</label>
                            <input type="text"
                                   name="lastname"
                                   class="form-control"
                                   value="<?= $userr->getLastname();?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   value="<?= $userr->getEmail(); ?>"
                                   required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">password</label>
                            <input type="text"
                                   name="password"
                                   class="form-control"
                                   value="<?= $userr->getPassword(); ?>"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <select name="role" class="form-select">
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Update
                        </button>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>
