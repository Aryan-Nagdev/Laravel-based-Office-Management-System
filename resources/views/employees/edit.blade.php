<!DOCTYPE html>
<html>
<head>
    <title>Edit Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <h2 class="mb-4">Edit Employee</h2>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="card p-4 shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" value="{{ $employee->name }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Position</label>
            <input type="text" name="position" value="{{ $employee->position }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Company</label>
            <select name="company_id" class="form-select">
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" {{ $employee->company_id == $company->id ? 'selected' : '' }}>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Manager</label>
            <select name="manager_id" class="form-select">
                <option value="">None</option>
                @foreach($managers as $manager)
                    <option value="{{ $manager->id }}" {{ $employee->manager_id == $manager->id ? 'selected' : '' }}>
                        {{ $manager->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Country</label>
            <select name="country" class="form-select">
                <option {{ $employee->country == 'India' ? 'selected' : '' }}>India</option>
                <option {{ $employee->country == 'USA' ? 'selected' : '' }}>USA</option>
                <option {{ $employee->country == 'UK' ? 'selected' : '' }}>UK</option>
                <option {{ $employee->country == 'Canada' ? 'selected' : '' }}>Canada</option>
                <option {{ $employee->country == 'Australia' ? 'selected' : '' }}>Australia</option>
            </select>
        </div>

        <div class="mb-3">
            <label>State</label>
            <input type="text" name="state" value="{{ $employee->state }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>City</label>
            <input type="text" name="city" value="{{ $employee->city }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Update Employee</button>
        <a href="{{ route('employees.index') }}" class="btn btn-secondary">Back</a>

    </form>

</div>

</body>
</html>
