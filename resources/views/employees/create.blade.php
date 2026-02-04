<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Add Employee</h2>

    <form action="{{ route('employees.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" class="form-control">
        </div>

        <div class="mb-3">
            <label>Company</label>
            <select name="company_id" class="form-select">
                @foreach($companies as $company)
                    <option value="{{ $company->id }}">{{ $company->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Manager</label>
            <select name="manager_id" class="form-select">
                <option value="">None</option>
                @foreach($managers as $manager)
                    <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Country</label>
            <select name="country" class="form-select">
                <option>India</option>
                <option>USA</option>
                <option>UK</option>
                <option>Canada</option>
                <option>Australia</option>
            </select>
        </div>

        <div class="mb-3">
            <label>State</label>
            <input type="text" name="state" class="form-control">
        </div>

        <div class="mb-3">
            <label>City</label>
            <input type="text" name="city" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Save Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>

    </form>

</div>

</body>
</html>
