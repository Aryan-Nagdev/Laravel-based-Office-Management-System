<!DOCTYPE html>
<html>
<head>
    <title>Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Employee Management</h4>
            <a href="{{ route('employees.create') }}" class="btn btn-success btn-sm">+ Add Employee</a>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-secondary">
                    <tr>
                        <th>Name</th>
                        <th>Company</th>
                        <th>Manager</th>
                        <th>Position</th>
                        <th>Location</th>
                        <th width="140">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td class="fw-bold">{{ $employee->name }}</td>
                        <td>{{ $employee->company->name ?? '' }}</td>
                        <td>{{ $employee->manager->name ?? 'None' }}</td>
                        <td><span class="badge bg-info text-dark">{{ $employee->position }}</span></td>
                        <td>{{ $employee->city }}, {{ $employee->state }}, {{ $employee->country }}</td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
